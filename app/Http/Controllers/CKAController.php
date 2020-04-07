<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\Cka;

class CKAController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->cka = new Cka;
	}

	public function listCka($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.cka.cka', compact('infoPfr'));
	}

	public function addNewCka(Request $request, $idPfr)
	{
		$rules = [
			'state' => 'sometimes|in:1',
			'reason' => 'required_if:state,1'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}
		$dataCka = array();
		foreach($request->except('_token', 'reason') as $key=>$val){
			if(substr($key, 0, 1) == "q"){
				$dataCka[$key] = $val;
			}
		}
		$data[] = $dataCka;
		$data[] = array();
		$reason = $request->state == 1 && $request->reason != null ? $request->reason : "";
		$infoCkaForPfr = $this->cka->infoCkaForPfr($idPfr);
		$edit = false;
		if ($infoCkaForPfr) {
			$edit = true;
			$param = [
				'data' => json_encode($data),
				'reason' => $reason
			];
			$resultAddCka = $this->cka->editCka($idPfr, $param);
		} else {
			$param = [
				'pfr_id' => $idPfr,
				'data' => json_encode($data),
				'reason' => $reason
			];
			$resultAddCka = $this->cka->addNewCka($param);
		}
		if ($resultAddCka) {
			$message = $edit ? "Edit cka successfully" : "Add new cka successfully";
			return response()->json([
				'error' => false,
				'message' => $message
			], 200);
		} else {
			$message = $edit ? "Edit cka error" : "Add new cka error";
			return response()->json([
				'error' => true,
				'message' => $message
			], 200);
		}
	}
}

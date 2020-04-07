<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\RiskProfile;

class RiskProfileController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->riskProfile = new RiskProfile;
	}

	public function listRiskProfile($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.riskprofile.risk', compact('infoPfr'));
	}

	public function addNewRiskProfile(Request $request, $idPfr)
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
		$data = array();
		foreach($request->except('_token', 'reason') as $key=>$val){
			$data[$key] = $val;
		}
		$data['reason'] = $request->state == 1 && $request->reason != null ? $request->reason : "";
		$param[] = $data;
		$param[] = array(
			'reason' => ''
		);
		
		$infoRiskProfileForPfr = $this->riskProfile->infoRiskProfileForPfr($idPfr);
		$edit = false;
		if ($infoRiskProfileForPfr) {
			$edit = true;
			$param = [
				'data' => json_encode($param)
			];
			$resultAddRiskProfile = $this->riskProfile->editRiskProfile($idPfr, $param);
		} else {
			$param = [
				'pfr_id' => $idPfr,
				'data' => json_encode($param)
			];
			$resultAddRiskProfile = $this->riskProfile->addNewRiskProfile($param);
		}
		
		if ($resultAddRiskProfile) {
			$message = $edit ? "Edit risk profile successfully" : "Add new risk profile successfully";
			return response()->json([
				'error' => false,
				'message' => $message
			], 200);
		} else {
			$message = $edit ? "Edit risk profile error" : "Add new risk profile error";
			return response()->json([
				'error' => true,
				'message' => $message
			], 200);
		}
	}
}

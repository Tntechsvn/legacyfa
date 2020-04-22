<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Pfr;

class PfrController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
	}

	public function showFormQuestion($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$trush = array(
			'name' => '',
			'nric' => '',
			'relationship' => '',
			'language' => 'ENG',
			'other_language' => '',
			'contact_number' => ''
		);
		if ($infoPfr->trusted_individual != null) {
			$trush = (array) $infoPfr->trusted_individual;
		}
		return view('pages.single-fact.question.add-new', compact('infoPfr', 'trush'));
	}

	public function addNewQuestion(Request $request, $idPfr)
	{
		$rules = [
			'name' => 'required',
			'nric' => 'required',
			'relationship' => 'required',
			'language' => 'required|in:ENG,MAN,MAL,TAM,Ot',
			'other_language' => 'required_if:language,Ot',
			'contact_number' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoPfr = $this->pfr->infoPfrById($idPfr);
		if ($infoPfr) {
			$otherLanguage = $request->language == "Ot" ? $request->other_language : "";
			$data = array(
				'name' => $request->name,
				'nric' => $request->nric,
				'relationship' => $request->relationship,
				'language' => $request->language,
				'other_language' => $otherLanguage,
				'contact_number' => $request->contact_number
			);
			$param = array(
				'trusted_individual' => json_encode($data)
			);
			$edit = false;
			if ($infoPfr->trusted_individual != null) {
				$edit = true;
			}
			$resultEditPfr = $this->pfr->editPfr($idPfr, $param);
			if ($resultEditPfr) {
				$message = $edit ? "Edit trush individual successfully" : "Add new trush individual successfully";
				event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
				
				return response()->json([
					'error' => false,
					'message' => $message,
					'url' => route('single_fact.balance.list', $idPfr)
				], 200);
			} else {
				$message = $edit ? "Edit trush individual error" : "Add new trush individual error";
				return response()->json([
					'error' => true,
					'message' => $message
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Error"
			], 200);
		}
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

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
		return view('pages.single-fact.question.add-new', compact('infoPfr'));
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
			$language = $request->language != "Ot" ? $request->language : $request->other_language;
			$data = array(
				'name' => $request->name,
				'nric' => $request->nric,
				'relationship' => $request->relationship,
				'language' => $language,
			);
			$param = array(
				'trusted_individual' => json_encode($data)
			);
			$resultEditPfr = $this->pfr->editPfr($idPfr, $param);
			if ($resultEditPfr) {
				return response()->json([
					'error' => false,
					'message' => "Add new trush individual successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Add new trush individual error"
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

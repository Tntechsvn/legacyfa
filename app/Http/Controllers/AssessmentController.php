<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\Client;
use App\Models\ClientAa;

class AssessmentController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->client = new Client;
		$this->assessment = new ClientAa;
	}

	public function showFormAddNewSingleAssessment($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.assessment.add-new', compact('infoPfr'));
	}

	public function addNewSingleAssessment(Request $request, $idPfr)
	{
		$rules = [
			'age' => 'required|min:0|max:1',
			'spoken_en' => 'required|min:0|max:1',
			'written_en' => 'required|min:0|max:1',
			'education' => 'required|min:0|max:4'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoClientOne = $this->client->infoClientOne($idPfr);
		if ($infoClientOne) {
			$param = array(
				'client_id' => $infoClientOne->id,
				'age' => $request->age,
				'english_spoken' => $request->spoken_en,
				'english_written' => $request->written_en,
				'education_level' => $request->education
			);
			$resultAddAssessment = $this->assessment->addNewClientAa($param);
			if ($resultAddAssessment) {
				return response()->json([
					'error' => false,
					'message' => "Add new assessment successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Add new assessment error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Client not found"
			], 200);
		}
	}
}

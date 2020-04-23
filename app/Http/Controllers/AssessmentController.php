<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

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

		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$infoClientOne = $infoPfr->clients[0];
		if ($infoClientOne) {
			$infoClientAa = $infoClientOne->clientAa;
			$param = array(
				'age' => $request->age,
				'english_spoken' => $request->spoken_en,
				'english_written' => $request->written_en,
				'education_level' => $request->education
			);
			$edit = false;
			if ($infoClientAa) {
				$edit = true;
				$resultAddAssessment = $this->assessment->editClientAa($infoClientAa->id, $param);
			} else {
				$param['client_id'] = $infoClientOne->id;
				$resultAddAssessment = $this->assessment->addNewClientAa($param);
			}
			if ($resultAddAssessment) {
				$url = route('single_fact.balance.list', $idPfr);
				if ( ( $request->age == 1 && ($request->spoken_en == 1 || $request->written_en == 1 ) ) || ( $request->age == 1 && ( $request->education == 0 || $request->education == 1) ) || ( ( $request->spoken_en == 1 || $request->written_en == 1 ) && ( $request->education == 0 || $request->education == 1 ) ) || ( $request->spoken_en == 1 || $request->written_en == 1 ) ) {
					$url = route('single-fact.show_form_question', $idPfr);
				} else {
					if ($edit) {
						$param = array(
							'trusted_individual' => null
						);
						$resultUpdatePfr = $this->pfr->editPfr($idPfr, $param);
						if (! $resultUpdatePfr) {
							return response()->json([
								'error' => true,
								'message' => "Error"
							], 200);
						}
					}
				}
				$message = $edit ? "Edit assessment successfully" : "Add new assessment successfully";
				event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
				
				return response()->json([
					'error' => false,
					'message' => $message,
					'url' => $url
				], 200);
			} else {
				$message = $edit ? "Edit assessment error" : "Add new assessment error";
				return response()->json([
					'error' => true,
					'message' => $message
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

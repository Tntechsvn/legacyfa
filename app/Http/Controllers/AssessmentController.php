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
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$rules = [
			'age' => 'required|min:0|max:1',
			'spoken_en' => 'required|min:0|max:1',
			'written_en' => 'required|min:0|max:1',
			'education' => 'required|min:0|max:4'
		];
		if ($infoPfr->type == config('constants.TYPE_FACT_JOIN')) {
			$rules2 = [
				'age_j' => 'required|min:0|max:1',
				'spoken_en_j' => 'required|min:0|max:1',
				'written_en_j' => 'required|min:0|max:1',
				'education_j' => 'required|min:0|max:4'
			];
			$rules = array_merge($rules, $rules2);
		}
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoClientOne = $infoPfr->clients[0];
		if ($infoPfr->type == config('constants.TYPE_FACT_JOIN')) {
			$infoClientTwo = $infoPfr->clients[1];
		}
		if ($infoClientOne || $infoClientTwo) {
			$infoClientAa1 = $infoClientOne->clientAa;
			$param = array(
				'age' => $request->age,
				'english_spoken' => $request->spoken_en,
				'english_written' => $request->written_en,
				'education_level' => $request->education
			);
			$edit = false;
			if ($infoClientAa1) {
				$edit = true;
				$resultAddAssessment = $this->assessment->editClientAa($infoClientAa1->id, $param);
			} else {
				$param['client_id'] = $infoClientOne->id;
				$resultAddAssessment = $this->assessment->addNewClientAa($param);
			}
			$resultAddAssessment2 = true;
			if ($infoPfr->type == config('constants.TYPE_FACT_JOIN')) {
				$infoClientAa2 = $infoClientTwo->clientAa;
				$param = array(
					'age' => $request->age_j,
					'english_spoken' => $request->spoken_en_j,
					'english_written' => $request->written_en_j,
					'education_level' => $request->education_j
				);
				if ($infoClientAa2) {
					$edit = true;
					$resultAddAssessment2 = $this->assessment->editClientAa($infoClientAa2->id, $param);
				} else {
					$param['client_id'] = $infoClientTwo->id;
					$resultAddAssessment2 = $this->assessment->addNewClientAa($param);
				}
			}
			if ($resultAddAssessment || $resultAddAssessment2) {
				if ($infoPfr->type == config('constants.TYPE_FACT_SINGLE')) {
					$url = route('single_fact.balance.list', $idPfr);
				} else {
					$url = route('jointfact.balance.list', $idPfr);
				}
				if ( ( $request->age == 1 && ($request->spoken_en == 1 || $request->written_en == 1 ) ) || ( $request->age == 1 && ( $request->education == 0 || $request->education == 1) ) || ( ( $request->spoken_en == 1 || $request->written_en == 1 ) && ( $request->education == 0 || $request->education == 1 ) ) || ( $request->spoken_en == 1 || $request->written_en == 1 ) ) {
					if ($infoPfr->type == config('constants.TYPE_FACT_JOIN')) {
						$url = route('jointfact.show_form_question', $idPfr);
					} else {
						$url = route('single-fact.show_form_question', $idPfr);
					}
				} else {
					if ($infoPfr->type == config('constants.TYPE_FACT_JOIN')) {
						if ( ( $request->age_j == 1 && ($request->spoken_en_j == 1 || $request->written_en_j == 1 ) ) || ( $request->age_j == 1 && ( $request->education_j == 0 || $request->education_j == 1) ) || ( ( $request->spoken_en_j == 1 || $request->written_en_j == 1 ) && ( $request->education_j == 0 || $request->education_j == 1 ) ) || ( $request->spoken_en_j == 1 || $request->written_en_j == 1 ) ) {
							$url = route('jointfact.show_form_question', $idPfr);
						}
					}
				}

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Pfr;
use App\Models\Survey;

class SurveyController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->survey = new Survey;
	}

	public function representativesDeclaration($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.representatives-declaration.list', compact('infoPfr'));
	}

	public function addNewRepresentativesDeclaration(Request $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$infoSurvey = $this->survey->infoSurveyForPfr($idPfr);
		$param['declaration'] = $request->declaration;
		if ($infoSurvey) {
			$result = $this->survey->editSurvey($idPfr, $param);
		} else {
			$param['pfr_id'] = $idPfr;
			$result = $this->survey->addNewSurvey($param);
		}
		if ($result) {
			event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
			return redirect()->route('single_fact.supervisors_review', $idPfr);
		} else {
			return redirect()->back();
		}
	}

	public function supervisorsReview($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.supervisor.list', compact('infoPfr'));
	}

	public function addNewSupervisorsReview(Request $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$infoSurvey = $this->survey->infoSurveyForPfr($idPfr);
		$data = array(
			'check_list' => array(
				array(
					'name' => isset($request->name0) ? $request->name0 : '',
					'remark' => isset($request->remark0) ? $request->remark0 : ''
				),
				array(
					'name' => isset($request->name1) ? $request->name1 : '',
					'remark' => isset($request->remark1) ? $request->remark1 : ''
				),
				array(
					'name' => isset($request->name2) ? $request->name2 : '',
					'remark' => isset($request->remark2) ? $request->remark2 : ''
				),
				array(
					'name' => isset($request->name3) ? $request->name3 : '',
					'remark' => isset($request->remark3) ? $request->remark3 : ''
				),
				array(
					'name' => isset($request->name4) ? $request->name4 : '',
					'remark' => isset($request->remark4) ? $request->remark4 : ''
				)
			),
			'recommendation' => isset($request->recommendation) ? $request->recommendation : '',
			'reason' => isset($request->reason) ? $request->reason : '',
			'carried_out' => isset($request->carried_out) ? $request->carried_out : '',
			'call_back' => isset($request->call_back) ? $request->call_back : ''
		);
		$param['review'] = $data;
		if ($infoSurvey) {
			$result = $this->survey->editSurvey($idPfr, $param);
		} else {
			$param['pfr_id'] = $idPfr;
			$result = $this->survey->addNewSurvey($param);
		}
		if ($result) {
			event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
			return redirect()->route('single_fact.client_survey', $idPfr);
		} else {
			return redirect()->back();
		}
	}

	public function clientSurvey($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.survey.client-survey', compact('infoPfr'));
	}
}

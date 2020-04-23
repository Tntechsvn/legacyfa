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

	public function addNewSurvey(Request $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$infoSurvey = $this->survey->infoSurveyForPfr($idPfr);
		$data = array(
			'lfa' => isset($request->lfa) ? $request->lfa : '',
			'mas_representative' => isset($request->mas_representative) ? $request->mas_representative : '',
			'type_client' => isset($request->type_client) ? $request->type_client : array(),
			'name_client' => isset($request->name_client) ? $request->name_client : '',
			'nric_passport' => isset($request->nric_passport) ? $request->nric_passport : '',
			'mode_contact' => isset($request->mode_contact) ? $request->mode_contact : array(),
			'specify_contact' => isset($request->specify_contact) ? $request->specify_contact : '',
			'used_lang' => isset($request->used_lang) ? $request->used_lang : array(),
			'lang' => isset($request->lang) ? $request->lang : '',
			'log_of_call' => array(
				array(
					'surveyed' => isset($request->a_one) ? $request->a_one : '',
					'not_surveyed' => isset($request->b_one) ? $request->b_one : '',
					'uncontactable' => isset($request->c_three) ? $request->c_three : '',
					'reason' => isset($request->reason1) ? $request->reason1 : ''
				),
				array(
					'surveyed' => isset($request->a_two) ? $request->a_two : '',
					'not_surveyed' => isset($request->b_two) ? $request->b_two : '',
					'uncontactable' => isset($request->b_three) ? $request->b_three : '',
					'reason' => isset($request->reason2) ? $request->reason2 : ''
				),
				array(
					'surveyed' => isset($request->a_three) ? $request->a_three : '',
					'not_surveyed' => isset($request->b_three) ? $request->b_three : '',
					'uncontactable' => isset($request->c_three) ? $request->c_three : '',
					'reason' => isset($request->reason3) ? $request->reason3 : ''
				)
			),
			'question' => array(
				isset($request->rq1) ? $request->rq1 : '',
				isset($request->rq2) ? $request->rq2 : '',
				isset($request->rq3) ? $request->rq3 : '',
				isset($request->rq4) ? $request->rq4 : '',
				isset($request->rq5) ? $request->rq5 : '',
				isset($request->rq6) ? $request->rq6 : ''
			),
			'comment' => isset($request->comment) ? $request->comment : ''
		);
		$param['callback'] = $data;
		if ($infoSurvey) {
			$result = $this->survey->editSurvey($idPfr, $param);
		} else {
			$param['pfr_id'] = $idPfr;
			$result = $this->survey->addNewSurvey($param);
		}
		if ($result) {
			event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
			return redirect()->route('downloadpdf', $idPfr);
		} else {
			return redirect()->back();
		}
	}
}

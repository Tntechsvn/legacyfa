<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		$infoSurvey = $this->survey->infoSurveyForPfr($idPfr);
		$param['declaration'] = $request->declaration;
		if ($infoSurvey) {
			$result = $this->survey->editSurvey($idPfr, $param);
		} else {
			$param['pfr_id'] = $idPfr;
			$result = $this->survey->addNewSurvey($param);
		}
		if ($result) {
			return redirect()->route('single_fact.supervisors_review', $idPfr);
		} else {
			return redirect()->back();
		}
	}

	public function supervisorsReview()
	{
		return view('pages.single-fact.supervisor.list');
	}
}

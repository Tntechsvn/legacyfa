<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pfr;

class AnalysisRecommendationsController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
	}
	
    public function clientOverview($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.analysis-recommendations.step1.list', compact('infoPfr'));
	}

	public function plansRecommended($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.analysis-recommendations.step2.list', compact('infoPfr'));
	}
}

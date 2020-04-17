<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalysisRecommendationsController extends Controller
{
    public function clientOverview()
	{
		return view('pages.single-fact.analysis-recommendations.step1.list');
	}
	public function plansRecommended()
	{
		return view('pages.single-fact.analysis-recommendations.step2.list');
	}
}



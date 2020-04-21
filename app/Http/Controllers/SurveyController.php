<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function clientSurvey()
	{
		return view('pages.single-fact.survey.client-survey');
	}
}

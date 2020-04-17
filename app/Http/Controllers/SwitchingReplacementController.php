<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchingReplacementController extends Controller
{
    public function switchingReplacement()
	{
		return view('pages.single-fact.switchingreplacement.list');
	}
}

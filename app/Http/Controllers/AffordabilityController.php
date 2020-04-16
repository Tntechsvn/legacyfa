<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffordabilityController extends Controller
{
    public function listAffordability()
	{
		return view('pages.single-fact.affordability.list');
	}
}

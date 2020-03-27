<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JointFactController extends Controller
{
	public function showFormAddNewJointFact()
	{
		return view('pages.joint-fact.add-new');
	}

	public function addNewJointFact(Request $request)
	{
		return $request;
	}
}

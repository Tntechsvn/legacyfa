<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepresentativesDeclarationController extends Controller
{
    public function representativesDeclaration()
	{
		return view('pages.single-fact.representatives-declaration.list');
	}
}

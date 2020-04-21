<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorsReviewController extends Controller
{
    public function supervisorsReview()
	{
		return view('pages.single-fact.supervisor.list');
	}
}

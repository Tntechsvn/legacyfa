<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrioritiesNeedsController extends Controller
{
    public function listPrioritiesNeeds()
    {
        return view('pages.single-fact.priorities-needs.list');
    }
}

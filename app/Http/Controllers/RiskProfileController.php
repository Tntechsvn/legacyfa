<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskProfileController extends Controller
{
    public function RiskProfile()
    {
        return view('pages.single-fact.riskprofile.risk');
    }
}

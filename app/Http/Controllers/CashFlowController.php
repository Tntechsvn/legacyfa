<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashFlowController extends Controller
{
    public function listCashFlow()
    {
        return view('pages.single-fact.annual-cashflow.list');
    }

}

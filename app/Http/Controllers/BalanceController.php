<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function listBalance()
	{
		return view('pages.single-fact.balance.list');
	}
}

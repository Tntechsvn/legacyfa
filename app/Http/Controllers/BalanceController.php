<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pfr;

class BalanceController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
	}

	public function listBalance($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.balance.list', compact('infoPfr'));
	}

	public function addNewBalance(Request $request, $idPfr)
	{
		return response()->json($request);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsAcknowledgementController extends Controller
{
    public function clientAcknowledgement()
	{
		return view('pages.single-fact.acknowledgement.list');
	}

}

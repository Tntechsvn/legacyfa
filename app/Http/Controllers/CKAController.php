<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKAController extends Controller
{
    public function cka()
    {
        return view('pages.single-fact.cka.cka');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleFactController extends Controller
{
    public function addNewSingleFact(){
        return view('pages.single-fact.add-new');
    }
}

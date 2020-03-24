<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JointFactController extends Controller
{
    public function addNewJointFact(){
        return view('pages.joint-fact.add-new');
    }
}

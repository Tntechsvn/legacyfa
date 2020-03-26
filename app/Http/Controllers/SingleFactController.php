<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleFactController extends Controller
{
    public function addNewSingleFact(){
        return view('pages.single-fact.add-new');
    }
    public function listSingleFactDependants(){
        return view('pages.single-fact.dependants.list');
    }
    public function listSingleFactDependantsTrash(){
        return view('pages.single-fact.dependants.list-trash');
    }
    public function addNewSingleFactAssessment(){
        return view('pages.single-fact.assessment.add-new');
    }
    public function addNewSingleFactQuestion(){
        return view('pages.single-fact.question.add-new');
    }
}

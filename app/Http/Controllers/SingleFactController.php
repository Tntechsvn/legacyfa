<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pfr;

class SingleFactController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
	}

	public function addNewSingleFact(Request $request)
	{
		return view('pages.single-fact.add-new');
	}

    public function listSingleFactDependants(){
		$paginate = config('constants.PAGINATE_PFR');
		$listPfr = $this->pfr->listPfrPaginate($request, $paginate);
        return view('pages.single-fact.dependants.list', compact('listPfr'));
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

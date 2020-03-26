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
		/*$paginate = config('constants.PAGINATE_PFR');
		$listPfr = $this->pfr->listPfrPaginate($request, $paginate);*/
		return view('pages.single-fact.add-new');
	}
}

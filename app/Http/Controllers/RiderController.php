<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rider;

class RiderController extends Controller
{
    public function __construct()
	{
		$this->rider = new Rider;
	}

	public function listRider(Request $request)
	{
		$paginate = config('constants.PAGINATE_RIDER');
		$listRider = $this->rider->listRiderPaginate($request, $paginate);
		return view('pages.list-rider', compact('listRider'));
	}

	public function infoRider($idPlan)
	{
		$infoRider = $this->rider->infoRiderById($idCategoryPlan);
		return view();
	}
}

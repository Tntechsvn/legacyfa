<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rider;
use App\Models\Plan;

use App\Http\Requests\AddNewRiderRequest;
use App\Http\Requests\EditRiderRequest;

class RiderController extends Controller
{
    public function __construct()
	{
		$this->rider = new Rider;
		$this->plan = new Plan;
	}

	public function listRider(Request $request)
	{
		$listPlan = $this->plan->listPlan();
		$paginate = config('constants.PAGINATE_RIDER');
		$listRider = $this->rider->listRiderPaginate($request, $paginate);
		return view('pages.rider.list', compact('listPlan', 'listRider'));
	}

	public function listTrashRiders(Request $request)
	{
		return view('pages.rider.list-trash');
	}

	public function infoRider($idRider)
	{
		$infoRider = $this->rider->infoRiderById($idRider);
		return view();
	}

	public function addNewRider(AddNewRiderRequest $request)
	{
		return $request;
		$param = [
			'name' => $request->name,
			'featured' => $request->feature
		];
		$resultAddRider = $this->rider->addNewRider($param);
		if ($resultAddRider) {
			return view();
		} else {
			return view();
		}
	}

	public function editRider(EditRiderRequest $request, $idRider)
	{
		return $request;
		$infoRider = $this->rider->infoRiderById($idRider);
		if ($infoRider) {
			$param = [
				'name' => $request->name,
				'featured' => $request->feature
			];
			$resultEditRider = $this->rider->editRider($idRider, $param);
			if ($resultEditRider) {
				return view();
			} else {
				return view();
			}
		} else {
			return view();
		}
	}
}

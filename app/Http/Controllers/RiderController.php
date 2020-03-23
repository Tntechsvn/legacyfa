<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rider;

use App\Http\Requests\AddNewRiderRequest;
use App\Http\Requests\EditRiderRequest;

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
		return view('pages.rider.list', compact('listRider'));
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
			'feature' => $request->feature
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
				'feature' => $request->feature
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

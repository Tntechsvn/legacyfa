<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Benifit;

use App\Http\Requests\AddNewBenifitRequest;
use App\Http\Requests\EditBenifitRequest;

class BenifitController extends Controller
{
	public function __construct()
	{
		$this->benifit = new Benifit;
	}

	public function listBenifit(Request $request)
	{
		$paginate = config('constants.PAGINATE_BENIFIT');
		$listBenifit = $this->benifit->listBenifitPaginate($request, $paginate);
		return view('pages.list-benifit', compact('listBenifit'));
	}

	public function infoBenifit($idBenifit)
	{
		$infoRider = $this->benifit->infoBenifitById($idBenifit);
		return view();
	}

	public function addNewBenifit(AddNewBenifitRequest $request)
	{
		return $request;
		$param = [
			'name' => $request->name,
			'detail' => $request->detail,
			'rider_id' => $request->rider_id
		];
		$resultAddBenifit = $this->benifit->addNewBenifit($param);
		if ($resultAddBenifit) {
			return view();
		} else {
			return view();
		}
	}

	public function editBenifit(EditBenifitRequest $request, $idBenifit)
	{
		return $request;
		$infoBenifit = $this->benifit->infoBenifitById($idBenifit);
		if ($infoBenifit) {
			$param = [
				'name' => $request->name,
				'detail' => $request->detail,
				'rider_id' => $request->rider_id
			];
			$resultEditBenifit = $this->benifit->editBenifit($idBenifit, $param);
			if ($resultEditBenifit) {
				return view();
			} else {
				return view();
			}
		} else {
			return view();
		}
	}
}

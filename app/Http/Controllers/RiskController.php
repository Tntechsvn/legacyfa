<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Risk;

class RiskController extends Controller
{
    public function __construct()
	{
		$this->risk = new Risk;
	}

	public function listRisk(Request $request)
	{
		$paginate = config('constants.PAGINATE_RISK');
		$listRisk = $this->risk->listRiskPaginate($request, $paginate);
		return view('pages.list-benifit', compact('listRisk'));
	}

	public function infoRisk($idRisk)
	{
		$infoRisk = $this->risk->infoBenifitById($idRisk);
		return view();
	}

	public function addNewRisk(Request $request)
	{
		return $request;
		$param = [
			'name' => $request->name,
			'detail' => $request->detail,
			'rider_id' => $request->rider_id
		];
		$resultAddRisk = $this->risk->addNewRisk($param);
		if ($resultAddRisk) {
			return view();
		} else {
			return view();
		}
	}

	public function editRisk(Request $request, $idRisk)
	{
		return $requeRisk = $this->risk->infoRiskById($idRisk);
		if ($infoRisk) {
			$param = [
				'name' => $request->name,
				'detail' => $request->detail,
				'rider_id' => $request->rider_id
			];
			$resultEditRisk = $this->risk->editRisk($idRisk, $param);
			if ($resultEditRisk) {
				return view();
			} else {
				return view();
			}
		} else {
			return view();
		}
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\Affordability;

use App\Http\Requests\AddNewAffordabilityRequest;

class AffordabilityController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->affordability = new Affordability;
	}

	public function listAffordability($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$infoAffordability = $infoPfr->affordability;
		$totalAnnualIncome = $infoPfr->totalAnnualIncome;
		$totalAnnualExpense = $infoPfr->totalAnnualExpense;

		$totalAssets = $infoPfr->totalAssets;
		$totalLiabilities = $infoPfr->totalLiabilities;

		$annualSurplusShortfall = $totalAnnualIncome - $totalAnnualExpense;
		$netWorth = $totalAssets - $totalLiabilities;
		return view('pages.single-fact.affordability.list', compact('infoPfr', 'infoAffordability', 'totalAnnualIncome', 'totalAnnualExpense', 'annualSurplusShortfall', 'totalAssets', 'totalLiabilities', 'netWorth'));
	}

	public function addNewAffordability(AddNewAffordabilityRequest $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		if ($infoPfr) {
			$payor = array(
				'payor_for' => $request->payor_for_client,
				'relationship' => $request->payor_relationship,
				'name' => $request->payor_name,
				'nric' => $request->payor_nric,
				'occupation' => $request->payor_occupation,
				'income_range' => $request->income_range != null ? $request->income_range : "",
			);

			$arrAnnual = $arrSingle = $arrSource = array(
				'cash' => '',
				'srs' => '',
				'cpf_oa' => '',
				'cpf_medisave' => '',
				'cpf_sa' => ''
			);
			for($i = 1; $i <= 5; $i++){
				$arrAnnual = $this->addData2Buget($request, $arrAnnual, "annual", $i);
				$arrSingle = $this->addData2Buget($request, $arrSingle, "single", $i);
				$arrSource = $this->addData2Buget($request, $arrSource, "source", $i);
			}
			$budget[] = $arrAnnual;
			$budget[] = $arrSingle;
			$budget[] = $arrSource;

			$param = array(
				'payor_detail' => json_encode($payor),
				'budget' => json_encode($budget),
				'reason' => $request->reason
			);
			$infoAffordability = $this->affordability->infoAffordabilityForPfr($idPfr);
			$edit = false;
			if ($infoAffordability) {
				$edit = true;
				$resultAddAffordability = $this->affordability->editAffordability($idPfr, $param);
			} else {
				$param['pfr_id'] = $idPfr;
				$resultAddAffordability = $this->affordability->addNewAffordability($param);
			}
			if ($resultAddAffordability) {
				$message = $edit ? "Edit affordability successfully" : "Add new affordability successfully";
				return $message;
			} else {
				$message = $edit ? "Edit affordability error" : "Add new affordability error";
				return $message;
			}
		} else {
			return "Pfr not found";
		}
	}

	public function addData2Buget($request, $arr, $type, $position)
	{
		$key = $type."_".$position;
		switch ($position) {
			case 1:
			$arr['cash'] = $request->$key != null ? $request->$key : "";
			break;

			case 2:
			$arr['srs'] = $request->$key != null ? $request->$key : "";
			break;

			case 3:
			$arr['cpf_oa'] = $request->$key != null ? $request->$key : "";
			break;

			case 4:
			$arr['cpf_medisave'] = $request->$key != null ? $request->$key : "";
			break;

			case 5:
			$arr['cpf_sa'] = $request->$key != null ? $request->$key : "";
			break;
		}
		return $arr;
	}
}

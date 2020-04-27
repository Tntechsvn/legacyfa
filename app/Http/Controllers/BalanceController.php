<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Pfr;
use App\Models\Balance;

class BalanceController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->balance = new Balance;
	}

	public function listBalance($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$totalAssetsClient1 = $totalLiabilitiesClient1 = $totalAssetsClient2 = $totalLiabilitiesClient2 = 0;
		$infoBalance = $this->balance->infoBalanceForPfr($idPfr);
		$assetsClient1 = $liabilitiesClient1 = $assetsClient2 = $liabilitiesClient2 = [];
		if ($infoBalance) {
			$assetsClient1 = $infoBalance->assets[0];
			$liabilitiesClient1 = $infoBalance->liabilities[0];
			if ($infoBalance->reason[0] == "") {
				foreach($assetsClient1 as $val){
					$totalAssetsClient1 += (int) $val;
				}
				foreach($liabilitiesClient1 as $val){
					$totalLiabilitiesClient1 += (int) $val;
				}
			} else {
				$totalAssetsClient1 = "";
				$totalLiabilitiesClient1 = "";
			}

			//client 2
			$assetsClient2 = $infoBalance->assets[1];
			$liabilitiesClient2 = $infoBalance->liabilities[1];
			if ($infoBalance->reason[1] == "") {
				foreach($assetsClient2 as $val){
					$totalAssetsClient2 += (int) $val;
				}
				foreach($liabilitiesClient2 as $val){
					$totalLiabilitiesClient2 += (int) $val;
				}
			} else {
				$totalAssetsClient2 = "";
				$totalLiabilitiesClient2 = "";
			}
		}
		if ($infoPfr->type == config('constants.TYPE_FACT_SINGLE')) {
			if ($infoPfr->trusted_individual != null) {
				$backUrl = route('single-fact.show_form_question', $idPfr);
			} else {
				$backUrl = route('single-fact.show_form_add_new_assessment', $idPfr);
			}
		} else {
			if ($infoPfr->trusted_individual != null) {
				$backUrl = route('jointfact.show_form_question', $idPfr);
			} else {
				$backUrl = route('jointfact.show_form_add_new_assessment', $idPfr);
			}
		}
		return view('pages.single-fact.balance.list', compact('infoPfr', 'infoBalance', "assetsClient1", 'totalAssetsClient1', 'liabilitiesClient1', 'totalLiabilitiesClient1', 'assetsClient2', 'totalAssetsClient2', 'liabilitiesClient2', 'totalLiabilitiesClient2', 'backUrl'));
	}

	public function addNewBalance(Request $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$rules = [
			'state' => 'required|in:0,1',
			'reason' => 'required_if:state,1'
		];
		if ($infoPfr->type == config('constants.TYPE_FACT_JOIN')) {
			$rules2 = [
				'state_2nd' => 'required|in:0,1',
				'reason_2nd' => 'required_if:state_2nd,1'
			];
			$rules = array_merge($rules, $rules2);
		}
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$assets = $this->addData2ArrAssets($request);
		$liabilities = $this->addData2ArrLiabilities($request);
		
		$reason =  array(
			$request->state == 1 && $request->reason != null ? $request->reason : "",
			$request->state_2nd == 1 && $request->reason_2nd != null ? $request->reason_2nd : ""
		);

		$infoBalanceForPfr = $this->balance->infoBalanceForPfr($idPfr);
		$edit = false;
		$param = [
			'assets' => $assets,
			'liabilities' => $liabilities,
			'reason' => $reason
		];
		if ($infoBalanceForPfr) {
			$edit = true;
			$resultAddBalance = $this->balance->editBalance($idPfr, $param);
		} else {
			$param['pfr_id'] = $idPfr;
			$resultAddBalance = $this->balance->addNewBalance($param);
		}
		
		if ($resultAddBalance) {
			$message = $edit ? "Edit balance successfully" : "Add new balance successfully";
			event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
			
			if ($infoPfr->type == config('constants.TYPE_FACT_SINGLE')) {
				$url = route('single_fact.cash_flow.list', $idPfr);
			} else {
				$url = route('jointfact.cash_flow.list', $idPfr);
			}
			return response()->json([
				'error' => false,
				'message' => $message,
				'url' => $url
			], 200);
		} else {
			$message = $edit ? "Edit balance error" : "Add new balance error";
			return response()->json([
				'error' => true,
				'message' => $message
			], 200);
		}
	}

	private function addData2ArrAssets($request)
	{
		$data[] = array(
			'residence_property' => $request->residence_property != null && $request->state == 0 ? $request->residence_property : "",
			'investment_property' => $request->investment_property != null && $request->state == 0 ? $request->investment_property : "",
			'bonds_investments' => $request->bonds_investments != null && $request->state == 0 ? $request->bonds_investments : "",
			'unit_investments' => $request->unit_investments != null && $request->state == 0 ? $request->unit_investments : "",
			'stockshares_investments' => $request->stockshares_investments != null && $request->state == 0 ? $request->stockshares_investments : "",
			'other_investments' => $request->other_investments != null && $request->state == 0 ? $request->other_investments : "",
			'bank_savings' => $request->bank_savings != null && $request->state == 0 ? $request->bank_savings : "",
			'deposits_savings' => $request->deposits_savings != null && $request->state == 0 ? $request->deposits_savings : "",
			'ordinary_cpf' => $request->ordinary_cpf != null && $request->state == 0 ? $request->ordinary_cpf : "",
			'special_cpf' => $request->special_cpf != null && $request->state == 0 ? $request->special_cpf : "",
			'medisave_cpf' => $request->medisave_cpf != null && $request->state == 0 ? $request->medisave_cpf : "",
			'retirement_cpf' => $request->retirement_cpf != null && $request->state == 0 ? $request->retirement_cpf : "",
			'cash_insurance' => $request->cash_insurance != null && $request->state == 0 ? $request->cash_insurance : "",
			'account_balance' => $request->account_balance != null && $request->state == 0 ? $request->account_balance : "",
			'others_value' => $request->others_value != null && $request->state == 0 ? $request->others_value : ""
		);

		$data[] = array(
			'residence_property' => $request->residence_property_2nd != null && $request->state_2nd == 0 ? $request->residence_property_2nd : "",
			'investment_property' => $request->investment_property_2nd != null && $request->state_2nd == 0 ? $request->investment_property_2nd : "",
			'bonds_investments' => $request->bonds_investments_2nd != null && $request->state_2nd == 0 ? $request->bonds_investments_2nd : "",
			'unit_investments' => $request->unit_investments_2nd != null && $request->state_2nd == 0 ? $request->unit_investments_2nd : "",
			'stockshares_investments' => $request->stockshares_investments_2nd != null && $request->state_2nd == 0 ? $request->stockshares_investments_2nd : "",
			'other_investments' => $request->other_investments_2nd != null && $request->state_2nd == 0 ? $request->other_investments_2nd : "",
			'bank_savings' => $request->bank_savings_2nd != null && $request->state_2nd == 0 ? $request->bank_savings_2nd : "",
			'deposits_savings' => $request->deposits_savings_2nd != null && $request->state_2nd == 0 ? $request->deposits_savings_2nd : "",
			'ordinary_cpf' => $request->ordinary_cpf_2nd != null && $request->state_2nd == 0 ? $request->ordinary_cpf_2nd : "",
			'special_cpf' => $request->special_cpf_2nd != null && $request->state_2nd == 0 ? $request->special_cpf_2nd : "",
			'medisave_cpf' => $request->medisave_cpf_2nd != null && $request->state_2nd == 0 ? $request->medisave_cpf_2nd : "",
			'retirement_cpf' => $request->retirement_cpf_2nd != null && $request->state_2nd == 0 ? $request->retirement_cpf_2nd : "",
			'cash_insurance' => $request->cash_insurance_2nd != null && $request->state_2nd == 0 ? $request->cash_insurance_2nd : "",
			'account_balance' => $request->account_balance != null && $request->state_2nd == 0 ? $request->account_balance : "",
			'others_value' => $request->others_value_2nd != null && $request->state_2nd == 0 ? $request->others_value_2nd : ""
		);
		return $data;
	}

	public function addData2ArrLiabilities($request)
	{
		$data[] = array(
			'housing_loans' => $request->housing_loans != null && $request->state == 0 ? $request->housing_loans : "",
			'vehicle_loans' => $request->vehicle_loans != null && $request->state == 0 ? $request->vehicle_loans : "",
			'renovation_loans' => $request->renovation_loans != null && $request->state == 0 ? $request->renovation_loans : "",
			'education_loans' => $request->education_loans != null && $request->state == 0 ? $request->education_loans : "",
			'credit_loans' => $request->credit_loans != null && $request->state == 0 ? $request->credit_loans : "",
			'personal_loans' => $request->personal_loans != null && $request->state == 0 ? $request->personal_loans : "",
			'overdrafts_loans' => $request->overdrafts_loans != null && $request->state == 0 ? $request->overdrafts_loans : "",
			'others_loans' => $request->others_loans != null && $request->state == 0 ? $request->others_loans : ""
		);

		$data[] = array(
			'housing_loans' => $request->housing_loans_2nd != null && $request->state_2nd == 0 ? $request->housing_loans_2nd : "",
			'vehicle_loans' => $request->vehicle_loans_2nd != null && $request->state_2nd == 0 ? $request->vehicle_loans_2nd : "",
			'renovation_loans' => $request->renovation_loans_2nd != null && $request->state_2nd == 0 ? $request->renovation_loans_2nd : "",
			'education_loans' => $request->education_loans_2nd != null && $request->state_2nd == 0 ? $request->education_loans_2nd : "",
			'credit_loans' => $request->credit_loans_2nd != null && $request->state_2nd == 0 ? $request->credit_loans_2nd : "",
			'personal_loans' => $request->personal_loans != null && $request->state_2nd == 0 ? $request->personal_loans_2nd : "",
			'overdrafts_loans' => $request->overdrafts_loans_2nd != null && $request->state_2nd == 0 ? $request->overdrafts_loans_2nd : "",
			'others_loans' => $request->others_loans_2nd != null && $request->state_2nd == 0 ? $request->others_loans_2nd : ""
		);
		return $data;
	}
}

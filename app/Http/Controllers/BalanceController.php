<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

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
		$totalAssets = 0;
		$totalLiabilities = 0;
		$infoBalance = $this->balance->infoBalanceForPfr($idPfr);
		if ($infoBalance) {
			$assets = json_decode($infoBalance->assets);
			foreach((array) $assets as $val){
				$totalAssets += (int) $val;
			}
			$liabilities = json_decode($infoBalance->liabilities);
			foreach((array) $liabilities as $val){
				$totalLiabilities += (int) $val;
			}
		}
		return view('pages.single-fact.balance.list', compact('infoPfr', 'infoBalance', "assets", 'totalAssets', 'liabilities', 'totalLiabilities'));
	}

	public function addNewBalance(Request $request, $idPfr)
	{
		$rules = [
			'state' => 'required|in:0,1',
			'reason' => 'required_if:state,1'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$assets = array(
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

		$liabilities = array(
			'housing_loans' => $request->housing_loans != null && $request->state == 0 ? $request->housing_loans : "",
			'vehicle_loans' => $request->vehicle_loans != null && $request->state == 0 ? $request->vehicle_loans : "",
			'renovation_loans' => $request->renovation_loans != null && $request->state == 0 ? $request->renovation_loans : "",
			'education_loans' => $request->education_loans != null && $request->state == 0 ? $request->education_loans : "",
			'credit_loans' => $request->credit_loans != null && $request->state == 0 ? $request->credit_loans : "",
			'personal_loans' => $request->personal_loans != null && $request->state == 0 ? $request->personal_loans : "",
			'overdrafts_loans' => $request->overdrafts_loans != null && $request->state == 0 ? $request->overdrafts_loans : "",
			'others_loans' => $request->others_loans != null && $request->state == 0 ? $request->others_loans : "",
		);

		$infoBalanceForPfr = $this->balance->infoBalanceForPfr($idPfr);
		if ($infoBalanceForPfr) {
			$param = [
				'assets' => json_encode($assets),
				'liabilities' => json_encode($liabilities),
				'reason' => $request->reason
			];
			$resultAddBalance = $this->balance->editBalance($idPfr, $param);
		} else {
			$param = [
				'pfr_id' => $idPfr,
				'assets' => json_encode($assets),
				'liabilities' => json_encode($liabilities),
				'reason' => $request->reason
			];
			$resultAddBalance = $this->balance->addNewBalance($param);
		}
		
		if ($resultAddBalance) {
			return response()->json([
				'error' => false,
				'message' => "Add new balance successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new balance error"
			], 200);
		}
	}
}

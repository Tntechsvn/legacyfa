<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\CashFlow;

class CashFlowController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->cashFlow = new CashFlow;
	}

	public function listCashFlow($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$totalIncome = 0;
		$totalExpenses = 0;
		$infoCashFlow = $this->cashFlow->infoCashFlowForPfr($idPfr);
		if ($infoCashFlow) {
			$dataIncome = json_decode($infoCashFlow->income, true);
			$income = $dataIncome[0];
			foreach($income as $val){
				$totalIncome += (int) $val;
			}
			$dataExpenses = json_decode($infoCashFlow->expenses, true);
			$expenses = $dataExpenses[0];
			foreach($expenses as $val){
				$totalExpenses += (int) $val;
			}
		}
		$totalAnnual = $totalIncome + $totalExpenses;
		return view('pages.single-fact.annual-cashflow.list', compact('infoPfr', 'totalIncome', 'totalExpenses', 'totalAnnual', 'income', 'expenses'));
	}

	public function addNewCashFlow(Request $request, $idPfr)
	{
		$rules = [
			'state_cash_flow' => 'required|in:0,1',
			'reason_cash_flow' => 'required_if:state_cash_flow,1',
			'state_plan' => 'required:in:0,1',
			'reason_plan' => 'required_if:state_plan,1'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$income[] = array(
			'gross_income' => $request->gross_income != null && $request->state_cash_flow == 0 ? $request->gross_income : "",
			'wages_income' => $request->wages_income != null && $request->state_cash_flow == 0 ? $request->wages_income : "",
			'employee_income' => $request->employee_income != null && $request->state_cash_flow == 0 ? $request->employee_income : "",
			'orther_income' => $request->orther_income != null && $request->state_cash_flow == 0 ? $request->orther_income : ""
		);
		$income[] = array(
			'gross_income' => 0,
			'wages_income' => 0,
			'employee_income' => 0,
			'orther_income' => 0
		);

		$expenses[] = array(
			'household_expenses' => $request->household_expenses != null && $request->state_cash_flow == 0 ? $request->household_expenses : "",
			'transportation_expenses' => $request->transportation_expenses != null && $request->state_cash_flow == 0 ? $request->transportation_expenses : "",
			'telco_expenses' => $request->telco_expenses != null && $request->state_cash_flow == 0 ? $request->telco_expenses : "",
			'dependants_expenses' => $request->dependants_expenses != null && $request->state_cash_flow == 0 ? $request->dependants_expenses : "",
			'personal_expenses' => $request->personal_expenses != null && $request->state_cash_flow == 0 ? $request->personal_expenses : "",			
			'luxury_expenses' => $request->luxury_expenses != null && $request->state_cash_flow == 0 ? $request->luxury_expenses : "",
			'premiums_expenses' => $request->premiums_expenses != null && $request->state_cash_flow == 0 ? $request->premiums_expenses : "",
			'repayments_expenses' => $request->repayments_expenses != null && $request->state_cash_flow == 0 ? $request->repayments_expenses : "",
			'orther_expenses' => $request->orther_expenses != null && $request->state_cash_flow == 0 ? $request->orther_expenses : ""
		);
		$expenses[] = array(
			'household_expenses' => 0,
			'transportation_expenses' => 0,
			'telco_expenses' => 0,
			'dependants_expenses' => 0,
			'personal_expenses' => 0,
			'luxury_expenses' => 0,
			'premiums_expenses' => 0,
			'repayments_expenses' => 0,
			'orther_expenses' => 0
		);

		$reason_cash_flow = $request->state_cash_flow == 1 && $request->reason_cash_flow != null ? $request->reason_cash_flow : null;
		$reason_plan = $request->state_cash_flow == 0 && $request->state_plan == 1 && $request->reason_plan != null ? $request->reason_plan : null;

		$infoCashFlowForPfr = $this->cashFlow->infoCashFlowForPfr($idPfr);
		if ($infoCashFlowForPfr) {
			$dataIncome = json_decode($infoCashFlowForPfr->income, true);
			$dataIncome = $income;
			$dataExpenses = json_decode($infoCashFlowForPfr->expenses, true);
			$dataExpenses = $expenses;
			$param = [
				'income' => json_encode($dataIncome),
				'expenses' => json_encode($dataExpenses),
				'reason_cash_flow' => $reason_cash_flow,
				'reason_plan' => $reason_plan
			];
			$resultAddCashFlow = $this->cashFlow->editCashFlow($idPfr, $param);
		} else {
			$param = [
				'pfr_id' => $idPfr,
				'income' => json_encode($income),
				'expenses' => json_encode($expenses),
				'reason_cash_flow' => $reason_cash_flow,
				'reason_plan' => $reason_plan
			];
			$resultAddCashFlow = $this->cashFlow->addNewCashFlow($param);
		}
		if ($resultAddCashFlow) {
			return response()->json([
				'error' => false,
				'message' => "Add new cash flow successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new cash flow error"
			], 200);
		}
	}
}

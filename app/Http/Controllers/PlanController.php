<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plan;

class PlanController extends Controller
{
	public function __construct()
	{
		$this->plan = new Plan;
	}

	public function listPlan(Request $request)
	{
		$paginate = config('constants.PAGINATE_PLAN');
		$listPlan = $this->plan->listPlanPaginate($request, $paginate);
		return view();
	}

	public function infoPlan($idPlan)
	{
		$infoPlan = $this->plan->infoPlanById($idCategoryPlan);
		return view();
	}

	public function showFormAddNewPlan()
	{
		return view();
	}

	public function addNewPlan(Request $request)
	{
		$param = [
			'name' => $request->name,
			'company_id' => $request->company_id,
			'category_plan_id' => $request->category_plan_id,
			'feature' => $request->feature
		];
		$resultAddPlan = $this->plan->addNewPlan($param);
		if ($resultAddPlan) {
			return view();
		} else {
			return view();
		}
	}

	public function showFormEditPlan($idPlan)
	{
		$infoPlan = $this->plan->infoPlan($request->idPlan);
		return view();
	}

	public function editPlan(Request $request, $idPlan)
	{
		$infoPlan = $this->plan->infoPlanById($request->idPlan);
		if ($infoPlan) {
			$param = [
				'name' => $request->name,
				'company_id' => $request->company_id,
				'category_plan_id' => $request->category_plan_id,
				'feature' => $request->feature
			];
			$resultEditPlan = $this->plan->editPlan($idPlan, $param);
			if ($resultEditPlan) {
				return view();
			} else {
				return view();
			}
		} else{
			return view();
		}
	}
}

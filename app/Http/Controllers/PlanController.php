<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plan;
use App\Models\Company;
use App\Models\CategoryPlan;

use App\Http\Requests\AddNewPlanRequest;
use App\Http\Requests\EditPlanRequest;

class PlanController extends Controller
{
	public function __construct()
	{
		$this->plan = new Plan;
		$this->company = new Company;
		$this->categoryPlan = new CategoryPlan;
	}

	public function listPlan(Request $request)
	{
		$paginate = config('constants.PAGINATE_PLAN');
		$listPlan = $this->plan->listPlanPaginate($request, $paginate);
		$listCompany = $this->company->listCompany();
		$listCategoryPlan = $this->categoryPlan->listCategoryPlan();
		return view('pages.list-plan', compact('listPlan', 'listCompany', 'listCategoryPlan'));
	}

	public function listTrashPlan()
	{
		return view('pages.plan.list-trash');
	}

	public function infoPlan($idPlan)
	{
		$infoPlan = $this->plan->infoPlanById($idCategoryPlan);
		return view();
	}

	public function addNewPlan(AddNewPlanRequest $request)
	{
		$param = [
			'name' => $request->name,
			'company_id' => $request->company,
			'category_plan_id' => $request->category,
			'feature' => $request->featured
		];
		$resultAddPlan = $this->plan->addNewPlan($param);
		if ($resultAddPlan) {
			return redirect()->route('plan.list');
		} else {
			return redirect()->route('plan.list');
		}
	}

	public function editPlan(EditPlanRequest $request, $idPlan)
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

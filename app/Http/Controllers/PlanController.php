<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Plan;
use App\Models\Company;
use App\Models\CategoryPlan;

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
		return view('pages.plan.list', compact('listPlan', 'listCompany', 'listCategoryPlan'));
	}

	public function listTrashPlan(Request $request)
	{
		$paginate = config('constants.PAGINATE_PLAN_TRASH');
		$listPlanTrash = $this->plan->listPlanTrashPaginate($request, $paginate);
		return view('pages.plan.list-trash', compact('listPlanTrash'));
	}

	public function infoPlan($idPlan)
	{
		$infoPlan = $this->plan->infoPlanById($idCategoryPlan);
		return view();
	}

	public function addNewPlan(Request $request)
	{
		$rules = [
			'name' => 'required|unique:plans,name',
			'company' => 'required|integer|min:1',
			'category' => 'required|integer|min:1',
			'featured' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$param = [
			'name' => $request->name,
			'company_id' => $request->company,
			'category_plan_id' => $request->category,
			'featured' => $request->featured
		];
		$resultAddPlan = $this->plan->addNewPlan($param);
		if ($resultAddPlan) {
			return response()->json([
				'error' => false,
				'message' => "Add new plan successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new plan error"
			], 200);
		}
	}

	public function editPlan(Request $request, $idPlan)
	{
		$rules = [
			'name_plan' => 'required',
            'company_edit' => 'required|integer|min:1',
            'category_edit' => 'required|integer|min:1',
            'featured_edit' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoPlan = $this->plan->infoPlanById($idPlan);
		if ($infoPlan) {
			if ($infoPlan->name != $request->name_plan) {
				$isUnique = $this->plan->checkUniquePlan($idPlan, $request->name_plan);
				if ($isUnique > 0) {
					return response()->json([
						'error' => true,
						'message' => "Plan name has been already"
					], 200);
				}
			}

			$param = [
				'name' => $request->name_plan,
				'company_id' => $request->company_edit,
				'category_plan_id' => $request->category_edit,
				'featured' => $request->featured_edit
			];
			$resultEditPlan = $this->plan->editPlan($idPlan, $param);
			if ($resultEditPlan) {
				return response()->json([
					'error' => false,
					'message' => "Edit plan successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Edit plan error"
				], 200);
			}
		} else{
			return response()->json([
				'error' => true,
				'message' => "Plan not found"
			], 200);
		}
	}

	public function softDeletePlan($id)
	{
		$resultSoftDelete = $this->plan->softDeletePlan($id);
		if ($resultSoftDelete) {
			return response()->json([
				'error' => false,
				'message' => "Delete plan successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Delete plan error"
			], 200);
		}
	}

	public function restorePlan($id)
	{
		$resultRestore = $this->plan->restorePlan($id);
		if ($resultRestore) {
			return response()->json([
				'error' => false,
				'message' => "Restore plan successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Restore plan error"
			], 200);
		}
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\CategoryPlan;

class CategoryPlanController extends Controller
{
	public function __construct()
	{
		$this->categoryPlan = new CategoryPlan;
	}

	public function listCategoryPlan(Request $request)
	{
		$paginate = config('constants.PAGINATE_CATEGORY_PLAN');
		$listCategoryPlan = $this->categoryPlan->listCategoryPlanPaginate($request, $paginate);
		return view('pages.category.list', compact('listCategoryPlan'));
	}

	public function listTrashCategoryPlan(Request $request)
	{
		$paginate = config('constants.PAGINATE_CATEGORY_PLAN_TRASH');
		$listCategoryPlanTrash = $this->categoryPlan->listCategoryPlanTrashPaginate($request, $paginate);
		return view('pages.category.list-trash', compact('listCategoryPlanTrash'));
	}

	public function infoCategoryPlan($idCategoryPlan)
	{
		$infoCategoryPlan = $this->categoryPlan->infoCategoryPlanById($idCategoryPlan);
		return view();
	}

	public function addNewCategoryPlan(Request $request)
	{
		$rules = [
			'name' => 'required|unique:category_plans,name'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$param = [
			'name' => $request->name
		];
		$resultAddCategoryPlan = $this->categoryPlan->addNewCategoryPlan($param);
		if ($resultAddCategoryPlan) {
			return response()->json([
				'error' => false,
				'message' => "Add new category plan successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new category plan error"
			], 200);
		}
	}

	public function editCategoryPlan(Request $request, $idCategoryPlan)
	{
		$rules = [
			'name_category' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoCategoryPlan = $this->categoryPlan->infoCategoryPlanById($idCategoryPlan);
		if ($infoCategoryPlan) {
			if ($infoCategoryPlan->name != $request->name_category) {
				$isUnique = $this->categoryPlan->checkUniqueCategoryPlan($idCategoryPlan, $request->name_category);
				if ($isUnique > 0) {
					return response()->json([
						'error' => true,
						'message' => "Category plan name has been already"
					], 200);
				}
			}
			$param = [
				'name' => $request->name_category
			];
			$resultEditCategoryPlan = $this->categoryPlan->editCategoryPlan($idCategoryPlan, $param);
			if ($resultEditCategoryPlan) {
				return response()->json([
					'error' => false,
					'message' => "Edit category plan successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Edit category plan error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Category plan not found"
			], 200);
		}
	}

	public function softDeleteCategoryPlan($id)
	{
		$resultSoftDelete = $this->categoryPlan->softDeleteCategoryPlan($id);
		if ($resultSoftDelete) {
			return response()->json([
				'error' => false,
				'message' => "Delete category plan successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Delete category plan error"
			], 200);
		}
	}

	public function restoreCategoryPlan($id)
	{
		$resultRestore = $this->categoryPlan->restoreCategoryPlan($id);
		if ($resultRestore) {
			return response()->json([
				'error' => false,
				'message' => "Restore category plan successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Restore category plan error"
			], 200);
		}
	}
}

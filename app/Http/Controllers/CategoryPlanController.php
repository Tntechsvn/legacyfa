<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategoryPlan;

use App\Http\Requests\AddNewCategoryPlanRequest;
use App\Http\Requests\EditCategoryPlanRequest;

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

	public function listTrashCategory()
	{
		return view('pages.category.list-trash');
	}

	public function infoCategoryPlan($idCategoryPlan)
	{
		$infoCategoryPlan = $this->categoryPlan->infoCategoryPlanById($idCategoryPlan);
		return view();
	}

	public function addNewCategoryPlan(AddNewCategoryPlanRequest $request)
	{
		$param = [
			'name' => $request->name
		];
		$resultAddCategoryPlan = $this->categoryPlan->addNewCategoryPlan($param);
		if ($resultAddCategoryPlan) {
			return redirect()->route('category.list');
		} else {
			return redirect()->route('category.list');
		}
	}

	public function editCategoryPlan(EditCategoryPlanRequest $request, $idCategoryPlan)
	{
		$validator = Validator::make($request->all(), [
			'category_plan_id' => 'required|integer|min:1',
			'name' => 'required',
		]);
		if ($validator->fails()) {
			if ($validator->errors()->first('category_plan_id') != null) {
				return response()->json([
					"state" => "error",
					"message" => $validator->errors()->first('category_plan_id')
				]);
			} else if($validator->errors()->first('name') != null) {
				return response()->json([
					"state" => "error",
					"message" => $validator->errors()->first('name')
				]);
			}
		}
		return $request;
		$infoCategoryPlan = $this->categoryPlan->infoCategoryPlanById($idCategoryPlan);
		if ($infoCategoryPlan) {
			$param = [
				'name' => $request->name
			];
			$resultEditCategoryPlan = $this->categoryPlan->editCategoryPlan($idCategoryPlan, $param);
			if ($resultEditCategoryPlan) {
				return view();
			} else {
				return view();
			}
		} else {
			return view();
		}
	}
}

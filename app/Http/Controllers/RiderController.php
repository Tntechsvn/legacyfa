<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Rider;
use App\Models\Plan;

class RiderController extends Controller
{
	public function __construct()
	{
        $this->middleware('roleMiddleware');

		$this->rider = new Rider;
		$this->plan = new Plan;
	}

	public function listRider(Request $request)
	{
		$keyword = $request->keyword ?? "";
		$listPlan = $this->plan->listPlan();
		$paginate = config('constants.PAGINATE_RIDER');
		$listRider = $this->rider->keyword($keyword)->paginate($paginate);
		return view('pages.rider.list', compact('listPlan', 'listRider'));
	}

	public function listTrashRider(Request $request)
	{
		$paginate = config('constants.PAGINATE_COMPANY_TRASH');
		$listRiderTrash = $this->rider->listRiderTrashPaginate($request, $paginate);
		return view('pages.rider.list-trash', compact('listRiderTrash'));
	}

	public function infoRider($idRider)
	{
		$infoRider = $this->rider->infoRiderById($idRider);
		return view();
	}

	public function addNewRider(Request $request)
	{
		$rules = [
			'name' => 'required|unique:riders,name',
			'plan' => 'required|array|min:1',
			'plan.*' => 'required|integer|min:1',
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
			'featured' => $request->featured
		];
		$resultAddRider = $this->rider->addNewRider($param);
		if ($resultAddRider) {
			$resultAddRider->plans()->sync($request->plan);
			return response()->json([
				'error' => false,
				'message' => "Add new rider successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new rider error"
			], 200);
		}
	}

	public function editRider(Request $request, $idRider)
	{
		$rules = [
			'name_edit' => 'required',
			'plan_edit' => 'required|array|min:1',
			'plan_edit.*' => 'required|integer|min:1',
			'featured_edit' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoRider = $this->rider->infoRiderById($idRider);
		if ($infoRider) {
			if ($infoRider->name != $request->name_edit) {
				$isUnique = $this->rider->checkUniqueRider($idRider, $request->name_edit);
				if ($isUnique > 0) {
					return response()->json([
						'error' => true,
						'message' => "Rider name has been already"
					], 200);
				}
			}

			$param = [
				'name' => $request->name_edit,
				'featured' => $request->featured_edit
			];
			$resultEditRider = $this->rider->editRider($idRider, $param);
			if ($resultEditRider) {
				$infoRider->plans()->sync($request->plan_edit);
				return response()->json([
					'error' => false,
					'message' => "Edit rider successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Edit rider error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Rider not found"
			], 200);
		}
	}

	public function softDeleteRider($id)
	{
		$resultSoftDelete = $this->rider->softDeleteRider($id);
		if ($resultSoftDelete) {
			return response()->json([
				'error' => false,
				'message' => "Delete rider successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Delete rider error"
			], 200);
		}
	}

	public function restoreRider($id)
	{
		$resultRestore = $this->rider->restoreRider($id);
		if ($resultRestore) {
			return response()->json([
				'error' => false,
				'message' => "Restore rider successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Restore rider error"
			], 200);
		}
	}
}

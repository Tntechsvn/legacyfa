<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\Dependant;

class DependantController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->dependant = new Dependant;
	}

	public function listDependantSingle(Request $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$paginate = config('constants.PAGINATE_DEPENDANT_SINGLE');
		$listDependant = $this->dependant->listDependantForPfrPaginate($request, $idPfr, $paginate);
		return view('pages.single-fact.dependants.list', compact('infoPfr', 'listDependant'));
	}

	public function listDependantTrashSingle(Request $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$paginate = config('constants.PAGINATE_DEPENDANT_SINGLE_TRASH');
		$listDependant = $this->dependant->listDependantTrashForPfrPaginate($request, $idPfr, $paginate);
		return view('pages.single-fact.dependants.list-trash', compact('infoPfr', 'listDependant'));
	}

	public function addNewDependant(Request $request, $idPfr)
	{
		$rules = [
			'title' => 'required',
			'name' => 'required',
			'relationship' => 'required',
			'birthday' => 'required|date_format:Y-m-d',
			'age' => 'required|integer|min:0',
			'sex' => 'required|min:0|max:1',
			'year_sp' => 'required',
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}
		
		$param = [
			'pfr_id' => $idPfr,
			'title' => $request->title,
			'name' => $request->name,
			'relationship' => $request->relationship,
			'dob' => $request->birthday,
			'age' => $request->age,
			'gender' => $request->sex,
			'year_to_support' => $request->year_sp,
		];
		$resultAddDependant = $this->dependant->addNewDependant($param);
		if ($resultAddDependant) {
			return response()->json([
				'error' => false,
				'message' => "Add new dependant successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new dependant error"
			], 200);
		}
	}

	public function editDependant(Request $request, $idPfr, $idDependant)
	{
		$rules = [
			'title' => 'required',
			'name' => 'required',
			'relationship' => 'required',
			'birthday' => 'required|date_format:Y-m-d',
			'age' => 'required|integer|min:0',
			'sex' => 'required|min:0|max:1',
			'year_sp' => 'required',
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoDependant = $this->dependant->infoDependantById($idDependant);
		if ($infoDependant) {
			$param = [
				'pfr_id' => $idPfr,
				'title' => $request->title,
				'name' => $request->name,
				'relationship' => $request->relationship,
				'dob' => $request->birthday,
				'age' => $request->age,
				'gender' => $request->sex,
				'year_to_support' => $request->year_sp,
			];

			$resultEditDependant = $this->dependant->editDependant($idDependant, $param);
			if ($resultEditDependant) {
				return response()->json([
					'error' => false,
					'message' => "Edit dependant successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Edit dependant error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Dependant not found"
			], 200);
		}
	}

	public function softDeleteDependant($idPfr, $idDependant)
	{
		$resultSoftDelete = $this->dependant->softDeleteDependant($idDependant);
		if ($resultSoftDelete) {
			return response()->json([
				'error' => false,
				'message' => "Delete dependant successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Delete dependant error"
			], 200);
		}
	}

	public function restoreDependant($idPfr, $idDependant)
	{
		$resultRestore = $this->dependant->restoreDependant($idDependant);
		if ($resultRestore) {
			return response()->json([
				'error' => false,
				'message' => "Restore dependant successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Restore dependant error"
			], 200);
		}
	}
}

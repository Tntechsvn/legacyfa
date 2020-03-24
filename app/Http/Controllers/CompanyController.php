<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Company;

class CompanyController extends Controller
{
	public function __construct()
	{
		$this->company = new Company;
	}

	public function listCompany(Request $request)
	{
		$paginate = config('constants.PAGINATE_COMPANY');
		$listCompany = $this->company->listCompanyPaginate($request, $paginate);
		return view('pages.company.list', compact('listCompany'));
	}

	public function listTrashCompany(Request $request)
	{
		$paginate = config('constants.PAGINATE_COMPANY_TRASH');
		$listCompanyTrash = $this->company->listCompanyTrashPaginate($request, $paginate);
		return view('pages.company.list-trash', compact('listCompanyTrash'));
	}

	public function infoCompany($idCompany)
	{
		$infoCompany = $this->company->infoCompany($idCompany);
		return view();
	}

	public function addNewCompany(Request $request)
	{
		$rules = [
			'name' => 'required|unique:companies,name'
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
		$resultAddCompany = $this->company->addNewCompany($param);
		if ($resultAddCompany) {
			return response()->json([
				'error' => false,
				'message' => "Add new company successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new company error"
			], 200);
		}
	}

	public function editCompany(Request $request, $idCompany)
	{
		$rules = [
			'name_company' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoCompany = $this->company->infoCompanyById($idCompany);
		if ($infoCompany) {
			if ($infoCompany->name != $request->name_company) {
				$isUnique = $this->company->checkUniqueCompany($idCompany, $request->name_company);
				if ($isUnique > 0) {
					return response()->json([
						'error' => true,
						'message' => "Company name has been already"
					], 200);
				}
			}
			$param = [
				'name' => $request->name_company
			];
			$resultEditCompany = $this->company->editCompany($idCompany, $param);
			if ($resultEditCompany) {
				return response()->json([
					'error' => false,
					'message' => "Edit company successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Edit company error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Company not found"
			], 200);
		}
	}

	public function softDeleteCompany($id)
	{
		$resultSoftDelete = $this->company->softDeleteCompany($id);
		if ($resultSoftDelete) {
			return response()->json([
				'error' => false,
				'message' => "Delete company successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Delete company error"
			], 200);
		}
	}

	public function restoreCompany($id)
	{
		$resultRestore = $this->company->restoreCompany($id);
		if ($resultRestore) {
			return response()->json([
				'error' => false,
				'message' => "Restore company successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Restore company error"
			], 200);
		}
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		return view('pages.list-company', compact('listCompany'));
	}

	public function infoCompany($idCompany)
	{
		$infoCompany = $this->company->infoCompany($idCompany);
		return view();
	}

	public function addNewCompany(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required',
		]);
		if ($validator->fails()) {
			if ($validator->errors()->first('name') != null) {
				return response()->json([
					"state" => "error",
					"message" => $validator->errors()->first('name')
				]);
			}
		}
		$param = [
			'name' => $request->name
		];
		$resultAddCompany = $this->company->addNewCompany($param);
		if ($resultAddCompany) {
			return view();
		} else {
			return view();
		}
	}

	public function editCompany()
	{
		$validator = Validator::make($request->all(), [
			'company_id' => 'required|integer|min:1',
			'name' => 'required',
		]);
		if ($validator->fails()) {
			if ($validator->errors()->first('company_id') != null) {
				return response()->json([
					"state" => "error",
					"message" => $validator->errors()->first('company_id')
				]);
			} else if($validator->errors()->first('name') != null) {
				return response()->json([
					"state" => "error",
					"message" => $validator->errors()->first('name')
				]);
			}
		}
		$infoCompany = $this->company->infoCompanyById($request->company_id);
		if ($infoCompany) {
			$param = [
				'name' => $request->name
			];
			$resultEditCompany = $this->company->editCompany($request->company_id, $param);
			if ($resultEditCompany) {
				return view();
			} else {
				return view();
			}
		} else {
			return view();
		}
	}
}

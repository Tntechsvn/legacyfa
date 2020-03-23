<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

use App\Http\Requests\AddNewCompanyRequest;
use App\Http\Requests\EditCompanyRequest;

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

	public function listTrashCompany()
	{
		return view('pages.company.list-trash');
	}

	public function infoCompany($idCompany)
	{
		$infoCompany = $this->company->infoCompany($idCompany);
		return view();
	}

	public function addNewCompany(AddNewCompanyRequest $request)
	{
		$param = [
			'name' => $request->name
		];
		$resultAddCompany = $this->company->addNewCompany($param);
		if ($resultAddCompany) {
			return redirect()->route('company.list');
		} else {
			return redirect()->route('company.list');
		}
	}

	public function editCompany(EditCompanyRequest $request, $idCompany)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required',
		]);
		if ($validator->fails()) {
			if($validator->errors()->first('name') != null) {
				return response()->json([
					"state" => "error",
					"message" => $validator->errors()->first('name')
				]);
			}
		}
		return $request;
		$infoCompany = $this->company->infoCompanyById($idCompany);
		if ($infoCompany) {
			$param = [
				'name' => $request->name
			];
			$resultEditCompany = $this->company->editCompany($idCompany, $param);
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

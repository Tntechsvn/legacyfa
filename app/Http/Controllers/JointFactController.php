<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Pfr;
use App\Models\Client;

class JointFactController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->client = new Client;
	}

	public function showFormAddNewJointFact()
	{
		return view('pages.joint-fact.add-new');
	}

	public function addNewAndEditJointFact(Request $request)
	{
		$rules = [
			'title1' => 'required',
			'join_name1' => 'required',
			'sex1' => 'required',
			'passport_no1' => 'required',
			'select_nationality1' => 'required',
			'select_residency1' => 'required',
			'birthday1' => 'required',
			'select_marital1' => 'required',
			'smoker1' => 'required',
			'select_employment1' => 'required',
			'occupation1' => 'required',
			'company_name1' => 'required',
			'business_nature1' => 'required',
			'select_annual_income1' => 'required',
			'details_mobile1' => 'required',
			'residential_address1' => 'required',
			'email_address1' => 'nullable|email',
			'mailing_address1' => 'email',

			'title2' => 'required',
			'join_name2' => 'required',
			'relationship' => 'required|min:1|max:4',
			'sex2' => 'required',
			'passport_no2' => 'required',
			'select_nationality2' => 'required',
			'select_residency2' => 'required',
			'birthday2' => 'required',
			'select_marital2' => 'required',
			'smoker2' => 'required',
			'select_employment2' => 'required',
			'occupation2' => 'required',
			'company_name2' => 'required',
			'business_nature2' => 'required',
			'select_annual_income2' => 'required',
			'details_mobile2' => 'required',
			'residential_address2' => 'required',
			'email_address2' => 'nullable|email',
			'mailing_address2' => 'email',
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}
		$edit = false;
		if (isset($request->id)) {
			$edit = true;
			$infoPfr = $this->pfr->infoPfrById($request->id);
		} else {
			$paramPfr = array(
				'user_id' => Auth::id(),
				'type' => 1
			);
			$infoPfr = $this->pfr->addNewPfr($paramPfr);
		}

		if ($infoPfr) {
			$paramClient1 = array(
				'title' => $request->title1,
				'name' => $request->join_name1,
				'gender' => $request->sex1,
				'nric_passport' => $request->passport_no1,
				'nationality' => $request->select_nationality1,
				'residency' => $request->select_residency1,
				'dob' => $request->birthday1,
				'marital_status' => $request->select_marital1,
				'smoker' => $request->smoker1,
				'employment_status' => $request->select_employment1,
				'occupation' => $request->occupation1,
				'company' => $request->company_name1,
				'business_nature' => $request->business_nature1,
				'income_range' => $request->select_annual_income1,
				'contact_home' => $request->details_home1,
				'contact_mobile' => $request->details_mobile1,
				'contact_office' => $request->details_office1,
				'contact_fax' => $request->details_fax1,
				'email' => $request->email_address1,
				'residential_address' => $request->residential_address1,
				'mailing_address' => $request->mailing_address1,
			);

			if ($edit) {
				$resultClient1 = $this->client->editClient($infoPfr->clients[0]->id, $paramClient1);
			} else {
				$paramClient1['pfr_id'] = $infoPfr->id;
				$resultClient1 = $this->client->addNewClient($paramClient1);
			}
			if (! $resultClient1) {
				$message = $edit ? "Edit client 1 error" : "Add new client 1 error";
				return response()->json([
					'error' => true,
					'message' => $message
				], 200);
			}

			$paramClient2 = array(
				'title' => $request->title2,
				'name' => $request->join_name2,
				'relationship' => $request->relationship,
				'gender' => $request->sex2,
				'nric_passport' => $request->passport_no2,
				'nationality' => $request->select_nationality2,
				'residency' => $request->select_residency2,
				'dob' => $request->birthday2,
				'marital_status' => $request->select_marital2,
				'smoker' => $request->smoker2,
				'employment_status' => $request->select_employment2,
				'occupation' => $request->occupation2,
				'company' => $request->company_name2,
				'business_nature' => $request->business_nature2,
				'income_range' => $request->select_annual_income2,
				'contact_home' => $request->details_home2,
				'contact_mobile' => $request->details_mobile2,
				'contact_office' => $request->details_office2,
				'contact_fax' => $request->details_fax2,
				'email' => $request->email_address2,
				'residential_address' => $request->residential_address2,
				'mailing_address' => $request->mailing_address2,
			);

			if ($edit) {
				$resultClient2 = $this->client->editClient($infoPfr->clients[1]->id, $paramClient2);
			} else {
				$paramClient2['pfr_id'] = $infoPfr->id;
				$resultClient2 = $this->client->addNewClient($paramClient2);
			}
			if ($resultClient2) {
				$message = $edit ? "Edit client successfully" : "Add new client successfully";
				if ($edit) {
					event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
				} else {
					event(new \App\Events\Pfr\NewPfr($infoPfr));
				}
				return response()->json([
					'error' => false,
					'message' => $message,
					'url' => route('jointfact.dependant.list', $infoPfr->id)
				], 200);
			} else {
				$message = $edit ? "Edit client 2 error" : "Add new client 2 error";
				return response()->json([
					'error' => true,
					'message' => $message
				], 200);
			}
		} else {
			$message = $edit ? "Pfr not found" : "Add new pfr error";
			return response()->json([
				'error' => true,
				'message' => $message
			], 200);
		}
	}

	public function editJointFact(Request $request) {
		$infoPfr = $this->pfr->find($request->id);
		if(!$infoPfr) return abort(404);
		if($infoPfr->type == 0)
			return redirect(route('single_fact.edit', $infoPfr->id));
		return view('pages.joint-fact.add-new', compact('infoPfr'));
	}
}

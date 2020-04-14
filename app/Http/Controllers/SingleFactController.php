<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Pfr;
use App\Models\Client;

class SingleFactController extends Controller
{
    public function __construct()
    {
        $this->pfr = new Pfr;
        $this->client = new Client;
    }

    public function showFormAddNewSingleFact(Request $request)
    {
        return view('pages.single-fact.add-new');
    }

    public function addNewSingleFact(Request $request)
    {
        $rules = [
            'title' => 'required',
            'single_name' => 'required',
            'sex' => 'required',
            'passport_no' => 'required',
            'select_nationality' => 'required',
            'select_residency' => 'required',
            'birthday' => 'required',
            'select_marital' => 'required',
            'smoker' => 'required',
            'select_employment' => 'required',
            'occupation' => 'required',
            'company_name' => 'required',
            'business_nature' => 'required',
            'select_annual_income' => 'required',
            'details_mobile' => 'required',
            'residential_address' => 'required',
            'email_address' => 'nullable|email',
            'mailing_address' => 'email'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }

        $paramPfr = array(
            'user_id' => Auth::id(),
            'type' => 0
        );
        $resultAddPfr = $this->pfr->addNewPfr($paramPfr);
        if ($resultAddPfr) {
            $paramClient = array(
                'pfr_id' => $resultAddPfr->id,
                'title' => $request->title,
                'name' => $request->single_name,
                'gender' => $request->sex,
                'nric_passport' => $request->passport_no,
                'nationality' => $request->select_nationality,
                'dob' => $request->birthday,
                'marital_status' => $request->select_marital,
                'smoker' => $request->smoker,
                'employment_status' => $request->select_employment,
                'occupation' => $request->occupation,
                'company' => $request->company_name,
                'business_nature' => $request->business_nature,
                'income_range' => $request->select_annual_income,
                'contact_home' => $request->details_home,
                'contact_mobile' => $request->details_mobile,
                'contact_office' => $request->details_office,
                'contact_fax' => $request->details_fax,
                'email' => $request->email_address,
                'residential_address' => $request->residential_address,
                'mailing_address' => $request->mailing_address,
            );
            $resultAddClient = $this->client->addNewClient($paramClient);
            if ($resultAddClient) {
                return response()->json([
                    'error' => false,
                    'message' => "Add new client successfully",
                    'url' => route('singlefact.dependant.list', $resultAddPfr->id)
                ], 200);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => "Add new client error"
                ], 200);
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => "Add new pfr error"
            ], 200);
        }
    }

    public function editSingleFact(Request $request) {
        $infoPfr = $this->pfr->find($request->id);
        if(!$infoPfr) return abort(404);
        return view('pages.single-fact.add-new', compact('infoPfr'));
    }

    public function postEditSingleFact(Request $request, $idPfr) {
        $rules = [
            'title' => 'required',
            'single_name' => 'required',
            'sex' => 'required',
            'passport_no' => 'required',
            'select_nationality' => 'required',
            'select_residency' => 'required',
            'birthday' => 'required',
            'select_marital' => 'required',
            'smoker' => 'required',
            'select_employment' => 'required',
            'occupation' => 'required',
            'company_name' => 'required',
            'business_nature' => 'required',
            'select_annual_income' => 'required',
            'details_mobile' => 'required',
            'residential_address' => 'required',
            'email_address' => 'nullable|email',
            'mailing_address' => 'email'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }

        $paramClient = array(
            'title' => $request->title,
            'name' => $request->single_name,
            'gender' => $request->sex,
            'nric_passport' => $request->passport_no,
            'nationality' => $request->select_nationality,
            'dob' => $request->birthday,
            'marital_status' => $request->select_marital,
            'smoker' => $request->smoker,
            'employment_status' => $request->select_employment,
            'occupation' => $request->occupation,
            'company' => $request->company_name,
            'business_nature' => $request->business_nature,
            'income_range' => $request->select_annual_income,
            'contact_home' => $request->details_home,
            'contact_mobile' => $request->details_mobile,
            'contact_office' => $request->details_office,
            'contact_fax' => $request->details_fax,
            'email' => $request->email_address,
            'residential_address' => $request->residential_address,
            'mailing_address' => $request->mailing_address,
        );

        $infoPfr = $this->pfr->infoPfrById($idPfr);
        if ($infoPfr) {
            $listClient = $infoPfr->clients;
            $resultEditClient = $this->client->editClient($listClient[0]->id, $paramClient);
            if($resultEditClient) {
                return response()->json([
                    'error' => false,
                    'message' => "Edit client successfully",
                    'url' => route('singlefact.dependant.list', $infoPfr->id)
                ], 200);
            }else {
                return response()->json([
                    'error' => true,
                    'message' => "Edit pfr error"
                ], 200);
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => "Pfr not found"
            ], 200);
        }
    }
}

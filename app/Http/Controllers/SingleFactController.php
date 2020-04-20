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

    public function addNewAndEditSingleFact(Request $request)
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

        $edit = false;
        if (isset($request->id)) {
            $edit = true;
            $infoPfr = $this->pfr->infoPfrById($request->id);
        } else {
            $paramPfr = array(
                'user_id' => Auth::id(),
                'type' => 0
            );
            $infoPfr = $this->pfr->addNewPfr($paramPfr);

        }
        if ($infoPfr) {
            $paramClient = array(
                'title' => $request->title,
                'name' => $request->single_name,
                'gender' => $request->sex,
                'nric_passport' => $request->passport_no,
                'nationality' => $request->select_nationality,
                'residency' => $request->select_residency,
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
            if ($edit) {
                $resultClient = $this->client->editClient($infoPfr->clients[0]->id, $paramClient);
            } else {
                $paramClient['pfr_id'] = $infoPfr->id;
                $resultClient = $this->client->addNewClient($paramClient);
            }
            if ($resultClient) {
                $message = $edit ? "Edit client successfully" : "Add new client successfully";
                return response()->json([
                    'error' => false,
                    'message' => $message,
                    'url' => route('singlefact.dependant.list', $infoPfr->id)
                ], 200);
            } else {
                $message = $edit ? "Edit client error" : "Add new client error";
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

    public function editSingleFact(Request $request) {
        $infoPfr = $this->pfr->find($request->id);
        if(!$infoPfr) return abort(404);
        if($infoPfr->type != 0)
            return redirect(route('join-fact.edit', $infoPfr->id));
        return view('pages.single-fact.add-new', compact('infoPfr'));
    }
}

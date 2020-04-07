<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\RiskProfile;

class RiskProfileController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->riskProfile = new RiskProfile;
	}

	public function listRiskProfile($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.riskprofile.risk', compact('infoPfr'));
	}

	public function addNewRiskProfile(Request $request, $idPfr)
	{
		$rules = [
			'state' => 'sometimes|in:1',
			'reason' => 'required_if:state,1'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}
		$data = array();
		foreach($request->except('_token', 'reason') as $key=>$val){
			$data[$key] = $val;
		}
		$data['reason'] = $request->reason != null ? $request->reason : "";
		$param[] = $data;
		$param[] = array(
			'reason' => ''
		);
		
		$infoRiskProfileForPfr = $this->riskProfile->infoRiskProfileForPfr($idPfr);
		if ($infoRiskProfileForPfr) {
			$param = [
				'data' => json_encode($param),
			];
			$resultAddRiskProfile = $this->riskProfile->editRiskProfile($idPfr, $param);
		} else {
			$param = [
				'pfr_id' => $idPfr,
				'data' => json_encode($param)
			];
			$resultAddRiskProfile = $this->riskProfile->addNewRiskProfile($param);
		}
		
		if ($resultAddRiskProfile) {
			return response()->json([
				'error' => false,
				'message' => "Add new risk profile successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new risk profile error"
			], 200);
		}
	}
}

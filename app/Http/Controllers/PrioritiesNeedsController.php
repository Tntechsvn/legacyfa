<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pfr;
use App\Models\PrioritiesNeed;

class PrioritiesNeedsController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->prioritiesNeed = new PrioritiesNeed;
	}

	public function showFormRateCategory($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		/*$data = json_decode($infoPfr->ratePrioritiesNeed, true);
		return $data[0]['income'];*/
		return view('pages.single-fact.priorities-needs.list', compact('infoPfr'));
	}

	public function rateCategory(Request $request, $idPfr)
	{
		$rate = array();
		$client1 = $client2 = $dependent1 = $dependent2 = $dependent3 = $dependent4 = array(
			'income' => '',
			'fund_disability' => '',
			'fund_critical' => '',
			'fund_children' => '',
			'fund_saving' => '',
			'fund_retirement' => '',
			'cover' => '',
			'fund_care' => '',
			'fund_hospital' => '',
		);
		$data = $request->except('_token');
		foreach($data as $key=>$val){
			$str = substr($key, 0, 6);
			if ($str == "client") {
				$client = substr($key, 6, 1);
				$position = substr($key, -1, 1);
				$type = substr($key, 7, 4);
				$goPlan = $str.$client."goplan".$position;
				if ($client == 1) {
					$client1 = $this->addData2Arr($data, $goPlan, $client1, $position, $type, $val);
				} else {
					$client2 = $this->addData2Arr($data, $goPlan, $client2, $position, $type, $val);
				}
			} else {
				$str = substr($key, 0, 9);
				if ($str == "dependent") {
					$dependent = substr($key, 9, 1);
					$position = substr($key, -1, 1);
					$type = substr($key, 10, 4);
					$goPlan = $str.$dependent."goplan".$position;
					if ($dependent == 1) {
						$dependent1 = $this->addData2Arr($data, $goPlan, $dependent1, $position, $type, $val);
					} else if ($dependent == 2){
						$dependent2 = $this->addData2Arr($data, $goPlan, $dependent2, $position, $type, $val);
					} else if ($dependent == 3){
						$dependent3 = $this->addData2Arr($data, $goPlan, $dependent3, $position, $type, $val);
					} else if ($dependent == 4){
						$dependent4 = $this->addData2Arr($data, $goPlan, $dependent4, $position, $type, $val);
					}
				}
			}
		}
		$rate[] = $client1;
		$rate[] = $client2;
		$rate[] = $dependent1;
		$rate[] = $dependent2;
		$rate[] = $dependent3;
		$rate[] = $dependent4;

		$infoPrioritiesNeedForPfr = $this->prioritiesNeed->infoPrioritiesNeedForPfr($idPfr);
		$edit = false;
		if ($infoPrioritiesNeedForPfr) {
			$edit = true;
			$param = [
				'rate' => json_encode($rate)
			];
			$resultAddPrioritiesNeed = $this->prioritiesNeed->editPrioritiesNeed($idPfr, $param);
		} else {
			$param = [
				'pfr_id' => $idPfr,
				'rate' => json_encode($rate)
			];
			$resultAddPrioritiesNeed = $this->prioritiesNeed->addNewPrioritiesNeed($param);
		}
		
		if ($resultAddPrioritiesNeed) {
			$message = $edit ? "Edit priorities need successfully" : "Add new priorities need successfully";
			return response()->json([
				'error' => false,
				'message' => $message
			], 200);
		} else {
			$message = $edit ? "Edit priorities need error" : "Add new priorities need error";
			return response()->json([
				'error' => true,
				'message' => $message
			], 200);
		}
	}

	private function addData2Arr($request, $goPlan, $arr, $position, $type, $val)
	{
		if ($type == "rate") {
			switch($position){
				case 1:
				$arr['income'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 2:
				$arr['fund_disability'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 3:
				$arr['fund_critical'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 4:
				$arr['fund_children'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 5:
				$arr['fund_saving'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 6:
				$arr['fund_retirement'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 7:
				$arr['cover'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 8:
				$arr['fund_care'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;

				case 9:
				$arr['fund_hospital'] = $this->checkGoPlan($request, $goPlan) ? $val."1" : $val."0";
				break;
			}
		}
		return $arr;
	}

	private function checkGoPlan($request, $goPlan)
	{
		$check = false;
		foreach($request as $key=>$val){
			if ($key == $goPlan) {
				$check = true;
				break;
			}
		}
		return $check;
	}
}

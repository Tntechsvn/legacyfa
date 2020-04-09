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
			$infoPrioritiesNeedForPfr = $this->prioritiesNeed->infoPrioritiesNeedForPfr($idPfr);
		}
		
		if ($resultAddPrioritiesNeed) {
			$message = $edit ? "Edit priorities need successfully" : "Add new priorities need successfully";
			$nextStep = $this->getMinGoPlan($infoPrioritiesNeedForPfr->rate, 0);
			$nextUrl = $this->getNextUrl($nextStep, $idPfr);
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

	public function showFormAddProtectionOne($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection1.list', compact('infoPfr'));
	}

	public function showFormAddProtectionTwo($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection2.list', compact('infoPfr'));
	}

	public function showFormAddProtectionThree($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection3.list', compact('infoPfr'));
	}

	public function showFormAddProtectionFour($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection4.list', compact('infoPfr'));
	}

	public function showFormAddProtectionFive($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection5.list', compact('infoPfr'));
	}

	public function showFormAddProtectionSix($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection6.list', compact('infoPfr'));
	}

	public function showFormAddProtectionSeven($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection7.list', compact('infoPfr'));
	}

	public function showFormAddProtectionEight($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection8.list', compact('infoPfr'));
	}

	public function showFormAddProtectionNine($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.priorities-needs.protection9.list', compact('infoPfr'));
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

	private function getMinGoPlan($str, $nextStep)
	{
		$data = json_decode($str, true);
		$i = 1;
		$min = -1;
		foreach($data as $item){
			$count = $minVal = count($item) + 1;
			if($i == 1){
				$min = $count;
			}
			$j = 1;
			foreach($item as $val){
				$rate = substr($val, 0, 1);
				$goPlan = substr($val, -1, 1);
				if ($j > $nextStep && $goPlan == 1 && $j < $count) {
					$minVal = $j;
				}
				$j++;
			}
			$i++;
			if ($minVal < $min && $min > 0) {
				$min = $minVal;
			}
		}
		return $min;
	}

	public function getNextUrl($nextStep, $idPfr)
	{
		switch($nextStep){
			case 1:
			$url = route('single_fact.priorities_needs.priotection_1', $idPfr);
			break;

			case 2:
			$url = route('single_fact.priorities_needs.priotection_2', $idPfr);
			break;

			case 3:
			$url = route('single_fact.priorities_needs.priotection_3', $idPfr);
			break;

			case 4:
			$url = route('single_fact.priorities_needs.priotection_4', $idPfr);
			break;

			case 5:
			$url = route('single_fact.priorities_needs.priotection_5', $idPfr);
			break;

			case 6:
			$url = route('single_fact.priorities_needs.priotection_6', $idPfr);
			break;

			case 7:
			$url = route('single_fact.priorities_needs.priotection_7', $idPfr);
			break;

			case 8:
			$url = route('single_fact.priorities_needs.priotection_8', $idPfr);
			break;

			case 9:
			$url = route('single_fact.priorities_needs.priotection_9', $idPfr);
			break;

			default:
			$url = "";
		}
		return $url;
	}
}

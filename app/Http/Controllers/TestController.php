<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function getTest()
	{
		$str = '[{"income":"H1","fund_disability":"L1","fund_critical":"L0","fund_children":"L1","fund_saving":"L0","fund_retirement":"L0","cover":"L0","fund_care":"L0","fund_hospital":"L0"},{"income":"","fund_disability":"H1","fund_critical":"","fund_children":"","fund_saving":"","fund_retirement":"","cover":"","fund_care":"","fund_hospital":""},{"income":"L0","fund_disability":"","fund_critical":1,"fund_children":"","fund_saving":"","fund_retirement":"","cover":"","fund_care":"","fund_hospital":""},{"income":"","fund_disability":"","fund_critical":"","fund_children":"","fund_saving":"","fund_retirement":"","cover":"","fund_care":"","fund_hospital":""},{"income":"","fund_disability":"","fund_critical":"","fund_children":"","fund_saving":"","fund_retirement":"","cover":"","fund_care":"","fund_hospital":""},{"income":"","fund_disability":"","fund_critical":"","fund_children":"","fund_saving":"","fund_retirement":"","cover":"","fund_care":"","fund_hospital":""}]';
		$thisStep = 0;
		return $this->getMinGoPlan($str, $thisStep);
	}

	private function getMinGoPlan($str, $thisStep)
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
				$goPlan = substr($val, -1, 1);
				if ($j > $thisStep && $goPlan == 1 && $j < $count) {
					$minVal = $j;
				}
				$j++;
				if ($minVal < $min && $min > 0) {
					$min = $minVal;
				}
			}
			$i++;
		}
		return $min;
	}

	private function getMaxGoPlan($str, $thisStep)
	{
		$data = json_decode($str, true);
		$i = 1;
		$max = -1;
		foreach($data as $item){
			$maxVal = -1;
			$j = 1;
			foreach($item as $val){
				$goPlan = substr($val, -1, 1);
				if($goPlan == 1 && $j > $maxVal && $j < $thisStep){
					$maxVal = $j;
				}
				$j++;
			}
			if($maxVal > $max){
				$max = $maxVal;
			}
			$i++;
		}
		return $max;
	}
}

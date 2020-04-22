<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pfr;
use App\Models\ClientAcknowledgement;

class ClientAcknowledgementController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->clientAcknowledgement = new ClientAcknowledgement;
	}

	public function showFormClientAcknowledgement($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.acknowledgement.list', compact('infoPfr'));
	}

	public function addNewClientAcknowledgement(Request $request, $idPfr)
	{
		$client1 = $client2 = array(
			array(
				'a' => 0,
				'b' => 0,
				'c' => 0
			),
			array(
				'a' => 0
			),
			array(
				'a' => 0
			),
			array(
				'a' => 0,
				'b' => 0,
				'c' => array(
					'c1' => '',
					'c2' => '',
					'c3' => '',
					'c4' => '',
					'c5' => '',
					'c6' => '',
					'c7' => '',
					'c8' => '',
					'c9' => '',
					'c10' => '',
					'c11' => '',
					'c12' => '',
					'c13' => '',
					'c14' => ''
				)
			),
			array(
				'a' => '',
				'b' => ''
			),
			array(
				'a' => '',
				'b' => ''
			),
			array(
				'accept' => '',
				'notaccept' => ''
			),
			array(
				'check' => ''
			)
		);
		$dataRequest = $request->except('_token');
		foreach($dataRequest as $key=>$val){
			$arr = explode('_', $key);
			if ($arr[0] == 1) {
				$client1 = $this->addData2Array($dataRequest, $client1, $arr[0], $arr[1], $arr[2], $key);
			}
		}
		$data[] = $client1;
		$data[] = $client2;
		$data['remark'] = $request->remark;
		$data['name'] = $request->name;

		$param['data'] = $data;

		$infoCA = $this->clientAcknowledgement->infoClientAcknowledgementForPfr($idPfr);
		$edit = false;
		if ($infoCA) {
			$edit = true;
			$result = $this->clientAcknowledgement->editClientAcknowledgement($idPfr, $param);
		} else {
			$param['pfr_id'] = $idPfr;
			$result = $this->clientAcknowledgement->addNewClientAcknowledgement($param);
		}
		if ($result) {
			$message = $edit ? "Edit client acknowledgement successfully" : "Add new client acknowledgement successfully";
			return redirect()->route('single_fact.representatives_declaration', $idPfr)->with(['message' => $message]);
		} else {
			$message = $edit ? "Edit client acknowledgement error" : "Add new client acknowledgement error";
			return back()->with(['message' => $message]);
		}
	}

	private function addData2Array($request, $arr, $client, $position, $key, $keyRequest)
	{
		switch ($position) {
			case 1: case 2: case 3: case 5: case 6:
			if ($key == 'a') {
				$arr[$position - 1]['a'] = $request[$keyRequest];
			}
			if ($key == 'b') {
				$arr[$position - 1]['b'] = $request[$keyRequest];
			}
			if ($key == 'c') {
				$arr[$position - 1]['c'] = $request[$keyRequest];
			}
			break;

			case 4:
			if (strlen($key) == 1) {
				if ($key == 'a') {
					$arr[$position - 1]['a'] = $request[$keyRequest];
				}
				if ($key == 'b') {
					$arr[$position - 1]['b'] = $request[$keyRequest];
				}
			} else {
				$arr[$position - 1]['c'][$key] = $request[$keyRequest];
			}
			break;

			case 7: case 8:
			$arr[$position - 1][$key] = $request[$keyRequest];
			break;
		}
		return $arr;
	}
}

<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Auth;

use App\Models\SwitchingReplacement;
use App\Models\Pfr;

class SwitchingReplacementController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->switchingReplacement = new SwitchingReplacement;
	}

	public function switchingReplacement($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		return view('pages.single-fact.switchingreplacement.list', compact('infoPfr'));
	}

	public function addNewAffordabilitySwitchingReplacement(Request $request, $idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$rules = [
			'name_1a' => 'required|in:0,1',
			'name_1b' => 'required|in:0,1',
			'name_2' => 'required|in:0,1',
			'name_php0' => 'required|in:0,1',
			'name_php1' => 'required|in:0,1',
			'name_php2' => 'required|in:0,1',
			'name_php3' => 'required|in:0,1',
			'name_php4' => 'required|in:0,1',
			'name_php5' => 'required|in:0,1',
			'name_php6' => 'required|in:0,1',
			'name_php7' => 'required|in:0,1'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator->errors());
		}

		$data = array(
			'name_1a' => $request->name_1a != null ? $request->name_1a : "",
			'text_1a' => $request->text_1a != null ? $request->text_1a : "",
			'name_1b' => $request->name_1b != null ? $request->name_1b : "",
			'name_2' => $request->name_2 != null ? $request->name_2 : "",
			'name_3' => $request->name_3 != null ? $request->name_3 : "",
			'name_41' => $request->name_41 != null ? $request->name_41 : "",
			'name_42' => $request->name_42 != null ? $request->name_42 : "",
			'name_43' => $request->name_43 != null ? $request->name_43 : "",
			'name_44' => $request->name_44 != null ? $request->name_44 : "",
			'name_45' => $request->name_45 != null ? $request->name_45 : "",
			'name_46' => $request->name_43 != null ? $request->name_46 : "",
			'name_php0' => $request->name_php0 != null ? $request->name_php0 : "",
			'name_php1' => $request->name_php1 != null ? $request->name_php1 : "",
			'name_php2' => $request->name_php2 != null ? $request->name_php2 : "",
			'name_php3' => $request->name_php3 != null ? $request->name_php3 : "",
			'name_php4' => $request->name_php4 != null ? $request->name_php4 : "",
			'name_php5' => $request->name_php5 != null ? $request->name_php5 : "",
			'name_php6' => $request->name_php6 != null ? $request->name_php6 : "",
			'name_php7' => $request->name_php7 != null ? $request->name_php7 : "",
		);
		$param = array(
			'data' => $data,
			'note' => $request->note
		);
		$infoSwitchingReplacement = $infoPfr->switchingReplacement;
		$edit = false;
		if ($infoSwitchingReplacement) {
			$edit = true;
			$result = $this->switchingReplacement->editSwitchingReplacement($idPfr, $param);
		} else {
			$param['pfr_id'] = $idPfr;
			$result = $this->switchingReplacement->addNewSwitchingReplacement($param);
		}
		if ($result) {
			$message = $edit ? "Edit switching replacement successfully" : "Add new switching replacement successfully";
			event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));

			return redirect()->route('single_fact.client_acknowledgement', $idPfr)->with(['message' => $message]);
		} else {
			$message = $edit ? "Edit switching replacement error" : "Add new switching replacement error";
			return redirect()->back()->with(['message' => $message]);
		}
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Pfr;
use App\Models\PfrActivity;

class PfrController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->activity = new PfrActivity;
	}

    public function listPfr(Request $request)
    {
        $keyword = $request->keyword ?? "";
        $paginate = config('constants.PAGINATE_PFR');
        $listPfr = $this->pfr->select('pfrs.*')->user()->keyword($keyword)
        ->groupBy('pfrs.id')->paginate($paginate);
        //$listPfr = $this->pfr->listPfrPaginate($request, $paginate);
        return view('pages.pfr.list', compact('listPfr'));
    }

    public function listTrashPfr(Request $request)
    {
        $paginate = config('constants.PAGINATE_PFR_TRASH');
        $listPfr = $this->pfr->listPfrTrashPaginate($request, $paginate);
        return "jfal";
    }

    public function softDeletePfr($id)
    {
        $resultSoftDelete = $this->pfr->softDeletePfr($id);
        if ($resultSoftDelete) {
            return response()->json([
                'error' => false,
                'message' => "Delete pfr successfully"
            ], 200);
        } else {
            return response()->json([
                'error' => true,
                'message' => "Delete pfr error"
            ], 200);
        }
    }

	public function showFormQuestion($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$trush = array(
			'name' => '',
			'nric' => '',
			'relationship' => '',
			'language' => 'ENG',
			'other_language' => '',
			'contact_number' => ''
		);
		if ($infoPfr->trusted_individual != null) {
			$trush = (array) $infoPfr->trusted_individual;
		}
		return view('pages.single-fact.question.add-new', compact('infoPfr', 'trush'));
	}

	public function addNewQuestion(Request $request, $idPfr)
	{
		$rules = [
			'name' => 'required',
			'nric' => 'required',
			'relationship' => 'required',
			'language' => 'required|in:ENG,MAN,MAL,TAM,Ot',
			'other_language' => 'required_if:language,Ot',
			'contact_number' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoPfr = $this->pfr->infoPfrById($idPfr);
		if ($infoPfr) {
			$otherLanguage = $request->language == "Ot" ? $request->other_language : "";
			$data = array(
				'name' => $request->name,
				'nric' => $request->nric,
				'relationship' => $request->relationship,
				'language' => $request->language,
				'other_language' => $otherLanguage,
				'contact_number' => $request->contact_number
			);
			$param = array(
				'trusted_individual' => json_encode($data)
			);
			$edit = false;
			if ($infoPfr->trusted_individual != null) {
				$edit = true;
			}
			$resultEditPfr = $this->pfr->editPfr($idPfr, $param);
			if ($resultEditPfr) {
				$message = $edit ? "Edit trush individual successfully" : "Add new trush individual successfully";
				event(new \App\Events\Pfr\EditPfr($infoPfr, Auth::user()));
				if ($infoPfr->type == config('constants.TYPE_FACT_SINGLE')) {
					$url = route('single_fact.balance.list', $idPfr);
				} else {
					$url = route('jointfact.balance.list', $idPfr);
				}
				return response()->json([
					'error' => false,
					'message' => $message,
					'url' => $url
				], 200);
			} else {
				$message = $edit ? "Edit trush individual error" : "Add new trush individual error";
				return response()->json([
					'error' => true,
					'message' => $message
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Error"
			], 200);
		}
	}

	public function action(Request $request){
		$pfr = $this->pfr->find($request->id);
		if($pfr){
			if($request->type == 'approve'){
				$pfr->status = 1;
				$this->activity->new($pfr->id, Auth::id(), 1);
				event(new \App\Events\Pfr\ApprovePfr($pfr, Auth::user()));
			}else {
				$pfr->status = 2;
				$this->activity->new($pfr->id, Auth::id(), 2);
				event(new \App\Events\Pfr\CancelPfr($pfr, Auth::user()));
			}
			$pfr->save();
			return response()->json([
				'error' => false,
				'message' => "Success"
			], 200);
		}

		return response()->json([
			'error' => true,
			'message' => "Error"
		], 200);
	}

	public function loadActivity(Request $request){

		$pfr = $this->pfr->find($request->id);
		if($pfr){
			$list = $pfr->activities()->list()->get();
			$data = '';
			foreach ($list as $key => $activity) {
				$full_name = $activity->user->full_name;
				$data .= "
                        <tr>
                            <td><a href=\"detail-checking-log\">$activity->time</a></td>
                            <td>$full_name</td>
                        </tr>";
			}
			return response()->json([
				'error' => false,
				'message' => "Success",
				'data' => $data
			], 200);
		}

		return response()->json([
			'error' => true,
			'message' => "Error"
		], 200);

	}
}

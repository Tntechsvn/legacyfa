<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pfr;
use App\Models\User;
use App\Models\Plan;
use App\Models\Company;
use App\Models\CategoryPlan;
use PDF;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pfr = new Pfr;
        $this->user = new User;
        $this->plan = new Plan;
        $this->company = new Company;
        $this->categoryPlan = new CategoryPlan;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $paginate = config('constants.PAGINATE_PFR');
        $listPfr = $this->pfr->listPfrPaginate($request, $paginate);
        $paginate2 = config('constants.PAGINATE_USER');
        $listUser = $this->user->listUserPaginate($request, $paginate2);

        $paginate3 = config('constants.PAGINATE_PLAN');
        $listPlan = $this->plan->listPlanPaginate($request, $paginate3);
        $listCompany = $this->company->listCompany();
        $listCategoryPlan = $this->categoryPlan->listCategoryPlan();

        return view('pages.home', compact('listPfr','listUser','listPlan', 'listCompany', 'listCategoryPlan'));
    }

    public function listPfr(Request $request)
    {
        $keyword = $request->keyword ?? "";
        $paginate = config('constants.PAGINATE_PFR');
        $listPfr = $this->pfr->select('pfrs.*')->keyword($keyword)
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



    /* DOWNLOAD PDF*/
    public function downloadPdf($id)
    {
        $data=$this->pfr->downloadPdf($id);
        $filename = $data->nameClient;
        $time = Carbon::now();
        $nowtime = $time->format('Y-m-d');
        $pdf = PDF::loadView('pages.user.invoice',  compact('data'));
        return $pdf->download($nowtime.'-'.$id.'-'.$filename.'.pdf');
    }
    
}

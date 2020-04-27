<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pfr;
use App\Models\User;
use App\Models\Plan;
use App\Models\Company;
use App\Models\CategoryPlan;
use PDF;
use Auth;

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
        $this->middleware('roleMiddleware',['except' => ['listPfr','listTrashPfr', 'softDeletePfr']]);

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
        if(!Auth::user()->is_admin){
            return redirect()->route('pfr.list');
        }
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

    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pfr;
use App\Models\User;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('pages.home');
    }

    public function listPfr(Request $request)
    {
        $paginate = config('constants.PAGINATE_PFR');
        $listPfr = $this->pfr->listPfrPaginate($request, $paginate);
        return view('pages.pfr.list', compact('listPfr'));
    }

    public function ListCategory()
    {
        return view('pages.list-category');
    }

    public function ListPlan()
    {
        return view('pages.list-plan');
    }

    public function ListRidders()
    {
        return view('pages.list-ridders');
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

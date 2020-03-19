<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
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

    public function ListCompany()
    {
        return view('pages.list-company');
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

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Login
    public function login(){
        return view('pages.login');
    }

    public function listUser()
	{
		return view('pages.user.list');
	}

	public function listTrashUser()
	{
		return view('pages.user.list-trash');
	}
}

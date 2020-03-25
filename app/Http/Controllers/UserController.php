<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
	public function __construct()
	{
		$this->user = new User;
	}
    // Login
    public function login(){
        return view('pages.login');
    }

    public function listUser(Request $request)
	{
		$paginate = config('constants.PAGINATE_USER');
		$listUser = $this->user->listUserPaginate($paginate);
		return view('pages.user.list', compact('listUser'));
	}

	public function listTrashUser()
	{
		return view('pages.user.list-trash');
	}
}

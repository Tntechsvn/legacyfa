<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
	public function __construct()
	{
		$this->user = new User;
		$this->role = new Role;
	}
    // Login
    // 
	public function showFormLogin()
	{
		return view('pages.login');
	}

	public function login(Request $request)
	{
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			return redirect()->route('home');
		} else {
			return redirect()->back();
		}
	}

	public function logout()
	{
		if (Auth::check()) {
			Auth::logout();
		}
		return redirect()->route('show_form_login');
	}

	public function listUser(Request $request)
	{
		$paginate = config('constants.PAGINATE_USER');
		$listUser = $this->user->listUserPaginate($request, $paginate);
		$listRole = $this->role->listRole(Auth::user());
		return view('pages.user.list', compact('listUser', 'listRole'));
	}

	public function listTrashUser(Request $request)
	{
		$paginate = config('constants.PAGINATE_USER_TRASH');
		$listUserTrash = $this->user->listUserTrashPaginate($request, $paginate);
		return view('pages.user.list-trash', compact('listUserTrash'));
	}

	public function addNewUser(Request $request)
	{
		$rules = [
			'email' => 'required|email|unique:users,email',
			'full_name' => 'required',
			'preferred_name' => 'required',
			'password' => 'required|min:6|confirmed',
			'role' => 'required|integer|min:1',
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$param = [
			'email' => $request->email,
			'full_name' => $request->full_name,
			'preferred_name' => $request->preferred_name,
			'password' => bcrypt($request->password),
			'role_id' => $request->role,
			'status' => 0
		];
		$resultAddUser = $this->user->addNewUser($param);
		if ($resultAddUser) {
			return response()->json([
				'error' => false,
				'message' => "Add new user successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Add new user error"
			], 200);
		}
	}

	public function editUser(Request $request, $idUser)
	{
		$rules = [
			'full_name_edit' => 'required',
			'preferred_name_edit' => 'required',
			'role_edit' => 'required|integer|min:1',
			'password_edit' => 'min:6',
			'repassword' => 'same:password_edit'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoUser = $this->user->infoUserById($idUser);
		if ($infoUser) {
			$param = [
				'full_name' => $request->full_name_edit,
				'preferred_name' => $request->preferred_name_edit,
				'role_id' => $request->role_edit
			];
			if (isset($request->password_edit)) {
				$param['password'] = bcrypt($request->password_edit);
			}
			$resultEditUser = $this->user->editUser($idUser, $param);
			if ($resultEditUser) {
				return response()->json([
					'error' => false,
					'message' => "Edit user successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Edit user error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "User not found"
			], 200);
		}
	}

	public function softDeleteUser($id)
	{
		$resultSoftDelete = $this->user->softDeleteUser($id);
		if ($resultSoftDelete) {
			return response()->json([
				'error' => false,
				'message' => "Delete user successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Delete user error"
			], 200);
		}
	}

	public function restoreUser($id)
	{
		$resultRestore = $this->user->restoreUser($id);
		if ($resultRestore) {
			return response()->json([
				'error' => false,
				'message' => "Restore user successfully"
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => "Restore user error"
			], 200);
		}
	}
}

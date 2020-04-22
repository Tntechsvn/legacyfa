<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use View;

use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;

class UserController extends Controller
{
	public function __construct()
	{
        $this->middleware('roleMiddleware',['except' => ['showFormLogin','login', 'logout']]);

		$this->user = new User;
		$this->role = new Role;
	}
    // Login
    // 
	public function showFormLogin()
	{
		if(Auth::id()) {
			return redirect()->route('home');
		}
		return view('pages.login');
	}

	public function login(Request $request)
	{
		$user = User::where('email', '=', $request->email)->first();
		if ($user === null) {
			session()->put('error', "Your email not exist");
			return redirect()->back();
		}
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			return redirect()->route('home');
		} else {
			session()->put('error', "Your password not correct");
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
		$keyword = $request->keyword ?? "";
		$paginate = config('constants.PAGINATE_USER');
		$listUser = $this->user->keyword($keyword)->paginate($paginate);
		// $listUser = $this->user->listUserPaginate($request, $paginate);
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
        	$view = View::make('pages.user.content-user', ['user' => $resultAddUser]);
			$data = (string) $view;
			return response()->json([
				'error' => false,
				'message' => "Add new user successfully",
				'data' => $data
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
			'full_name' => 'required',
			'preferred_name' => 'required',
			'role' => 'required|integer|min:1',
			'password' => 'nullable|min:6',
			'repassword' => 'same:password'
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
				'full_name' => $request->full_name,
				'preferred_name' => $request->preferred_name,
				'role_id' => $request->role
			];
			if (isset($request->password)) {
				$param['password'] = bcrypt($request->password);
			}
			$resultEditUser = $this->user->editUser($idUser, $param);
			$infoUser = $this->user->infoUserById($idUser);
			if ($resultEditUser) {
	        	$view = View::make('pages.user.content-user', ['user' => $infoUser]);
				$data = (string) $view;
				return response()->json([
					'error' => false,
					'message' => "Edit user successfully",
					'data' => $data
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

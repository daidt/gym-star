<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;
use Auth;
use App\Http\Controllers\MainController;
class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getProfile($username)
	{
		$profile = User::where('username','=',$username)->get();
		return view('page.profile',compact('profile'));
	}

	public function updateProfile(Request $req)
	{
		$this->validate($req,
			[
				'fullname' => 'required|max:30',
				'address' => 'required|max:50',
				'weight' => 'required|',
				'job' => 'required|max:50',
			]);

		$birth = $req->yyyy . "-" . $req->mm . "-". $req->dd;
		$user = new User();
		$user = $user->find($req->id);

		$user->fullname = MainController::checkInput($req->fullname) ;
		$user->birth = $birth;
		$user->aim = MainController::checkInput($req->aim) ;
		$user->address = MainController::checkInput($req->address) ;
		$user->weight = MainController::checkInput($req->weight) ;
		$user->job = MainController::checkInput($req->job) ;
		
		$user->save();

		return redirect()->back()->with('success','Update Successfully');
	}

	public function getMyPage($username)	
	{
		return view('page.mypage',compact('username'));
	}
}

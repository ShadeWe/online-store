<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App;

class LoginController extends Controller
{
    public function index()
		{
			return view('loginpage');
		}

		public function userLogin(Request $request)
		{
			$input = $request->all();

			$user = App\User::where('name', $input['username'])->first();	// find an item containing the provided username

			if ($user) {	// if there's such a user
				if (Hash::check($input['password'], $user->password)) {
					session(['username' => $input['username']]);
					return redirect('/admin-panel');
				} else {
					return view('loginpage');
				}
			} else {
				return view('loginpage');
			}

		}
}

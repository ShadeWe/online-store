<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
		{
			if (session()->has('username'))
				return view('adminpanel');
			else
				return redirect('login');
		}
}

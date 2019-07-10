<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
			if (session()->has('username'))
				return view('homepage', ['username' => session('username')]);
			else
				return view('homepage');
    }
}

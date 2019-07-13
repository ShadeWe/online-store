<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminPanelController extends Controller
{
    public function index()
	{
		if (session()->has('username')) {
			$products = App\Product::all();
			return view('adminpanel', ['products' => $products]);
		}
		else
			return redirect('login');
	}

    /*
     *  Deleting rows choosed by the user from the Product's table
     */
    public function deleteProducts(Request $request) {
        $data = json_decode($request->getContent(), true);

        for ($i = 0; $i < count($data); $i++) {
            App\Product::where('id', $data[$i])->delete();
        }

        return 'good';
    }
}

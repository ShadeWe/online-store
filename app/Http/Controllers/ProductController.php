<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProductController extends Controller
{

		// defaoult page /categories, which shows up all products
		public function index() {
			$products = App\Product::all();

			return view('showproducts', ['products' => $products]);
		}
}

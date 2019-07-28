<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminPanelController extends Controller
{
    /*
     *  domain.smth/admin-panel GET
     *  If the user is not logged in, redirect to the login page (checkauth middleware)
     *  otherwise, return the home page of the admin panel
     */
    public function index()
    {
        return view('adminpanel');
    }
    /*
     *  domain.smth/admin-panel/products GET
     *  obtain products from database and return a page with all products shown
     */
    public function seeProducts()
    {
        $products = App\Product::all();
        return view('adminpanel', ['products' => $products, 'include' => 'admin-panel-views.see-all-products']);
    }

    /*
     *  domain.smth/admin-panel/new-product GET
     *  return a page with a form for uploading new products into database
     */
    public function newProduct()
    {
        return view('adminpanel', ['include' => 'admin-panel-views.add-new-products']);
    }

    /*
     *  domain.smth/admin-panel/products DELETE (AJAX)
     *  Deleting rows choosed by the user from the Product's table
     */
    public function deleteProducts(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        for ($i = 0; $i < count($data); $i++)
            App\Product::where('id', $data[$i])->delete();
        return 'good';
    }

    /*
     *  domain.smth/admin-panel/new-product PUT
     *  simply adds a new product to database verifying every single field to be passed from the user.
     *  if a field isn't passed by the user, return this page with a message.
     */
    public function addProduct(Request $request)
    {
        $data = $request->all();
        $product = new App\Product;

        if (isset($data['product-name'])) $product->{'product-name'} = $data['product-name'];
        else return view('adminpanel', ['status'=> 'bad', 'include' => 'admin-panel-views.add-new-products', 'message' => "You haven't supplied the product's name"]);
        if (isset($data['product-category'])) $product->{'product-category'} = $data['product-category'];
        else return view('adminpanel', ['status'=> 'bad', 'include' => 'admin-panel-views.add-new-products', 'message' => "You haven't supplied the product's category"]);
        if (isset($data['product-price'])) $product->{'product-price'} = $data['product-price'];
        else return view('adminpanel', ['status'=> 'bad', 'include' => 'admin-panel-views.add-new-products', 'message' => "You haven't supplied the product's price"]);
        if (isset($data['short_desc'])) $product->short_desc = $data['short_desc'];
        else return view('adminpanel', ['status'=> 'bad', 'include' => 'admin-panel-views.add-new-products', 'message' => "You haven't supplied the product's short description"]);

        $product->save();
        return view('adminpanel', ['status'=> 'good', 'include' => 'admin-panel-views.add-new-products', 'message' => 'The product: <b>' . $data['product-name'] . '</b> has been added <i>successfuly</i>']);
    }
}

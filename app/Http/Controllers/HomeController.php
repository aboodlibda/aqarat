<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $cities = City::all();
        $products = Product::all();
        return view('home',compact('categories','cities','products'));
    }


    public function checkout(Product $product)
    {
        return view('checkout',compact('product'));
    }

    public function payment()
    {
        return view('payment');
    }
}

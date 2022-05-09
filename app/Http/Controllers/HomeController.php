<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $products = Product::latest()->paginate(10);
        $mobile = Product::where('category_id' ,'=' , 2)->get();
        $laptop = Product::where('category_id' ,'=' , 4)->get();
        $Ipad = Product::where('category_id' ,'=' , 3)->get();
        $electronic = Product::where('category_id' ,'=' , 5)->get();
        return view('home',compact('categories','products','mobile','laptop','Ipad','electronic'));
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

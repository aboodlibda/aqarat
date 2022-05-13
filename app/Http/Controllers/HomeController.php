<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
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
        $custom_categories = Category::query()->latest()->paginate(3);
        $cities = City::all();
        $products = Product::query()->latest()->take(15)->get();
        $random_products = Product::query()->latest()->take(15)->get();
        return view('home',compact('custom_categories','cities','products','random_products'));
    }


    public function contact()
    {
        $info = Contact::query()->first();
        return view('contact' , compact('info'));
    }

    public function about()
    {
        return view('about');
    }
}

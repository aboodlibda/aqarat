<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('dashboard.products.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $cities = City::all();
        return view('dashboard.products.create',compact('categories','cities'));
    }

    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'name' => 'required|string|min:5|max:200',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'city' => 'required|string',
            'description' => 'required|string|min:10',
            'images' => 'required',

        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->city_id = $request->get('city');
        $product->description = $request->get('description');
        $isSave = $product->save();

        foreach ($request->file('images') as $imagefile) {
            $image = new Image();
            $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
        }

        if ($isSave){
            return redirect()->route('products.create')->with('product-created','');
        }
        else{
            return back();
        }
    }

    public function show(Product $product)
    {
        $info = Contact::query()->first();
        return view('dashboard.products.show',compact('product','info'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $cities = City::all();
        return view('dashboard.products.edit',compact('product','categories','cities'));
    }

    public function update(Request $request, Product $product)
    {
//        dd($product->id);
        $request->validate([
            'name' => 'required|string|min:5|max:200',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'city' => 'required|string',
            'description' => 'required|string|min:10',
        ]);
        $product->update([
        'name' => $request->get('name'),
        'price' => $request->get('price'),
        'category_id' => $request->get('category'),
        'city_id' => $request->get('city'),
        'description' => $request->get('description')
        ]);
        if ($request->file('images')){
          Image::query()->where('product_id' , $product->id)->delete();

        foreach ($request->file('images') as $imagefile) {
            $image = new Image();
            $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
        }
        }
        $isSave = $product->save();
        if ($isSave){
            return redirect()->route('products.index')->with('product-updated','');
        }
        else{
            return back();
        }
    }

    public function destroy(Request $request)
    {
        Product::destroy($request->id);
        return redirect()->route('products.index')->with('product-deleted','');
    }

    public function product(Product $product)
    {
        return view('product',compact('product'));
    }
}

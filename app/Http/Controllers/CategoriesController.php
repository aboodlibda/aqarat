<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth')->except('show');
    }



    public function index()
    {
        $categories = Category::latest()->paginate(6);
        return view('dashboard.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:15|unique:categories',
            'image' => 'required|max:5000'
        ]);
        $category = new Category();
        $category->name = $request->get('name');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('categories-images/'), $imageName);
            $category->image = ($imageName);
        }
        $isSave = $category->save();
        if ($isSave){
            return redirect()->route('categories.create')->with('category-created','test');
        }
        else{
            return back();
        }
    }

    public function show(Category $category)
    {
        return view('dashboard.categories.show' , compact('category'));
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $id = $category->id;
        $request->validate([
            'name' => 'required|string|min:3|max:15|unique:categories,name,'.$id,
            'image' => 'max:5000'

        ]);

        $category->update([
            'name' => $request->name
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('categories-images/'), $imageName);
            $category->image = ($imageName);
        }
        $isSave = $category->save();
        if ($isSave){
            return redirect()->route('categories.index')->with('category-updated','test');
        }
        else{
            return back();
        }
    }

    public function destroy(Request $request)
    {
        Category::destroy($request->id);
        return redirect()->route('categories.index')->with('category-deleted','');
    }
}

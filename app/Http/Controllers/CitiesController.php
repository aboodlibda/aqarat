<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }


    public function index()
    {
        $cities = City::latest()->paginate(15);
        return view('dashboard.cities.index',compact('cities'));
    }

    public function create()
    {
        return view('dashboard.cities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:15|unique:cities',
            'image' => 'required|max:5000'
        ]);

        $city = new City();
        $city->name = $request->get('name');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('cities-images/'), $imageName);
            $city->image = ($imageName);
        }
        $isSave = $city->save();
        if ($isSave){
            return redirect()->route('cities.create')->with('city-created','test');
        }
        else{
            return back();
        }


    }

    public function show(City $city)
    {
        return view('dashboard.cities.show' , compact('city'));
    }

    public function edit(City $city)
    {
        return view('dashboard.cities.edit',compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $id = $city->id;
        $request->validate([
            'name' => 'required|string|min:3|max:15|unique:cities,name,'.$id,
            'image' => 'max:5000'

        ]);

        $city->update([
            'name' => $request->name
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('product-images/'), $imageName);
            $city->image = ($imageName);
        }
        $isSave = $city->save();
        if ($isSave){
            return redirect()->route('cities.index')->with('city-updated','test');
        }
        else{
            return back();
        }
    }

    public function destroy(Request $request)
    {
        City::destroy($request->id);
        return redirect()->route('cities.index')->with('city-deleted','test');
    }
}

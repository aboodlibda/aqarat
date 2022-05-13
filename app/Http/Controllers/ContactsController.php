<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $setting = Contact::query()->first();
        return view('dashboard.settings.index' , compact('setting'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Request $request,$id)
    {
        $setting = Contact::query()->findOrFail($id);
        return view('dashboard.settings.edit' , compact('setting'));
    }

    public function update(Request $request, Contact $contact)
    {
        Contact::query()->first()->update($request->all());
        return redirect()->route('settings.index')->with('settings-updated','test');
    }

    public function destroy(Contact $contact)
    {
        //
    }
}

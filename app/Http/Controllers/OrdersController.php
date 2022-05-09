<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate(15);
        return view('dashboard.orders.index',compact('orders'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
           'first_name' => 'required|string',
           'last_name' => 'required|string',
           'email' => 'email',
           'address' => 'required|string',
           'card_name' => 'required|string',
           'card_number' => 'required|integer',
           'expire' => 'required',
           'cvv' => 'required|integer',
        ]);

        Order::create($request->all());

        return redirect()->route('payment');
    }

    public function show(Order $order)
    {
        return view('dashboard.orders.show',compact('order'));
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Request $request)
    {
        Order::destroy($request->id);
        return redirect()->route('orders.index')->with('order-deleted','');
    }
}

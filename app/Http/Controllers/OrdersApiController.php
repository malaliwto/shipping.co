<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class OrdersApiController extends Controller
{
    public function index()
    {
        return Order::all('id', 'number', 'customer_fullname', 'total_sum', 'shipping_address', 'created_at');
        /*
            or, we can return all the existing fields
            return Order::all(); 
        */
    }

    public function show($id)
    {
        return Order::findOrFail($id);
    }

    public function store()
    {
        request()->validate([
            'number'=>'required',
            'customer_fullname'=>'required',
            'total_sum'=>'required',
            'shipping_address'=>'required'
        ]);

        return Order::create([
            'number' => request('number'),
            'customer_fullname' => request('customer_fullname'),
            'total_sum' => request('total_sum'),
            'shipping_address' => request('shipping_address')
        ]);
    }

    public function update(Order $order)
    {
        request()->validate([
            'number'=>'required',
            'customer_fullname'=>'required',
            'total_sum'=>'required',
            'shipping_address'=>'required'
        ]);

        return $order->update([
            'number' => request('number'),
            'customer_fullname' => request('customer_fullname'),
            'total_sum' => request('total_sum'),
            'shipping_address' => request('shipping_address')
        ]);
    }

    public function destroy(Order $order)
    {
        return $order->delete();
    }
}

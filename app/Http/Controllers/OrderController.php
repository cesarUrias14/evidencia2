<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $orders = Order::paginate(10);
        return view('orders.order_index', compact('orders'));
    }


    public function create(){
        return view('orders.order_create');
    }

    public function store(Request $request){
        Order::create($request->all());
        return redirect()->route('orders.order_index')->with('success', 'Orden registrada correctamente');
    }

    public function edit(Order $order){
        return view('orders.order_edit', compact('order'));
    }

    public function update(Request $request, $id){
        $order = Order::findOrFail($id);
        $data = $request->only('customer_name', 'address', 'notes');
        $order->update($data);
        return redirect()->route('orders.index')->with('success', 'Orden modificado correctamente');
    }

    public function destroy(Order $order){
        $order->delete();
        return back()->with('success', 'Orden eliminado correctamente');
    }
}

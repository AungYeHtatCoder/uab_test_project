<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class GetOrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        $products = Product::all();
        return view('admin.orders.show', compact('order', 'products'));
    }

    public function update(Request $request, $id)
{
    $order = Order::find($id);
    $order->order_status = $request->input('order_status');
    $order->save();
    return redirect()->back()->with('success', 'Order status updated successfully.');
}
// delete order
public function destroy($id)
{
    $order = Order::find($id);
    $order->delete();
    return redirect()->back()->with('success', 'Order deleted successfully.');

}

}
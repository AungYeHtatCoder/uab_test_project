<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cartItems', []);
        return view('users.orders.index', compact('cartItems'));
    }

    public function store(Request $request)
{
    $cartItems = session()->get('cartItems', []);
    $total = 0;
    foreach ($cartItems as $cartItem) {
        $total += $cartItem['product_price'] * $cartItem['product_quantity'];
    }
    $order = Order::create([
        'paymentmethod' => $request->input('paymentmethod'),
        'card_name' => $request->input('card_name'),
        'card_no' => $request->input('card_no'),
        'exp_date' => $request->input('exp_date'),
        'cvv_no' => $request->input('cvv_no'),
        'user_id' => $request->user_id,
        'total_price' => $total,
        'order_number' => date('YmdHis') . rand(1000, 9999) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)),
        'order_status' => 'pending',
        'order_date' => date('Y-m-d'),
        'order_time' => date('H:i:s'),
    ]);
    foreach ($cartItems as $cartItem) {
        if (!empty($cartItem['product_id'])) {
            $order->products()->attach($cartItem['product_id'], [
                'product_name' => $cartItem['product_name'],
                'product_image' => $cartItem['product_image'],
                'product_quantity' => $cartItem['product_quantity'],
                'product_price' => $cartItem['product_price'],
            ]);
        }
    }
    session()->forget('cartItems');
    return redirect()->route('orders.index');
}
}
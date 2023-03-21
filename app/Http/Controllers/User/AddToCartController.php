<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AddToCartController extends Controller
{
    // index 
    public function index()
    {
    $cartItems = session()->get('cartItems', []);
    return view('cart_index', compact('cartItems'));
    }

    // add-to-cart.store 
    public function store(Request $request, $id)
    {
    //dd($request->all());
        $productId = $request->input('product_id');
    $productName = $request->input('product_name');
    $productPrice = $request->input('product_price');
    $productQuantity = $request->input('product_quantity');
    $productImage = $request->input('product_image');

    $cartItems = session()->get('cartItems', []);

    $cartItems[] = [
        'product_id' => $productId,
        'product_name' => $productName,
        'product_price' => $productPrice,
        'product_quantity' => $productQuantity,
        'product_image' => $productImage,
    ];

    session()->put('cartItems', $cartItems);

    //return redirect()->route('cart.index');
    return redirect()->back();
    }

    public function update(Request $request, $id)
{
    $cartItems = session()->get('cartItems', []);

    foreach ($cartItems as $key => $cartItem) {
        if ($cartItem['product_id'] === $id) {
            $cartItems[$key]['product_quantity'] = $request->input('product_quantity');
            break;
        }
    }

    session()->put('cartItems', $cartItems);
    
    return redirect()->back()->with('success', 'Product updated in cart successfully!');
}



    // cart.destroy
    // public function destroy($id)
    // {
    // $cartItems = session()->get('cartItems', []);
    // // remove item from cart
    // unset($cartItems[$id]);
    // // rebase array keys and store in the session
    // session()->put('cartItems', array_values($cartItems));
    // return redirect()->back();
    
    // }

//     public function destroy($id)
// {
//     $cartItems = session()->get('cartItems', []);
//     // remove item from cart
//     unset($cartItems[$id]);
//     // rebase array keys and store in the session
//     session()->put('cartItems', array_values($cartItems));
    
//     // debug statements
//     echo "ID: $id<br>";
//     echo "Cart items before: <pre>" . print_r(session()->get('cartItems'), true) . "</pre><br>";
    
//     session()->put('cartItems', array_values($cartItems));
    
//     // debug statements
//     echo "Cart items after: <pre>" . print_r(session()->get('cartItems'), true) . "</pre><br>";
    
//     return redirect()->back();
// }

public function destroy($id)
{
    $cartItems = session()->get('cartItems', []);
    $updatedCartItems = [];

    foreach ($cartItems as $cartItem) {
        if ($cartItem['product_id'] !== $id) {
            $updatedCartItems[] = $cartItem;
        }
    }

    session()->put('cartItems', $updatedCartItems);

    //return redirect()->back();
    return redirect()->back()->with('success', 'Product removed from cart successfully!');
}


}
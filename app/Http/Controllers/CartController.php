<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //show
    public function showCart()
    {
        $cart_items = session('cart', []);
        $total_price = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart_items));

        return view('cart.index', compact('cart_items', 'total_price'));
    }

    //add to cart
    public function addToCart($id){

        // found product with id
        $product = Product::findOrFail($id);

        // make cart with session
        $cart = session()->get('cart', []);
        $price = $product->discounted_price ?? $product->price;
        $image = $product->primary_image ? str_replace('public/', '', $product->primary_image) : 'default.png';

        // if we have this product in cart, add number
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                'image' => $image,
            ];
        }
        // save cart in session
        session()->put('cart', $cart);


        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    //delet
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back();
    }
}

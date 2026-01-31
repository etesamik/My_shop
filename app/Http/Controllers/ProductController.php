<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //add to cart method
    public function addToCart($id){
        // found product with id
        $product = Product::findOrFail($id);

        // make cart with session
        $cart = session()->get('cart', []);

        // if we have this product in cart, add number
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
            ];
        }
        // save cart in session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    // product details
    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.detail', compact('product'));
    }


}

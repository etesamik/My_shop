<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showCheckout()
    {
        if (Auth::check()) {
            $cartItem = Auth::user()->cartItems()->with('product')->get();

        } else{
            $sessionCart = session('cart', []);
            $cartItems = collect($sessionCart)->map(function ($item) {
                $product = Product::find($item['product_id']);
                return (object) [
                    'id' => $item['product_id'],
                    'product' => $product,
                    'quantity' => $item['quantity'],
                ];
            })->filter(fn($item) => $item->product);

        }





        return view('frontend.order.checkout');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class login extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        $sessionCart = session()->get('cart', []);

        foreach ($sessionCart as $item) {

            $cartItem = CartItem::where('user_id', $user->id)
                ->where('product_id', $item['product_id'])
                ->first();

            if ($cartItem) {
                $cartItem->quantity += $item['quantity'];
                $cartItem->save();
            } else {
                CartItem::create([
                    'user_id' => $user->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity']
                ]);
            }
        }

        session()->forget('cart'); // خیلی مهم
    }

}

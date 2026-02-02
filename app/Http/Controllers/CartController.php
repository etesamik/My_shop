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
        if (auth()->check()) {
            $cartItems = auth()->user()
                ->cartItems()
                ->with('product')
                ->get();
            $count = $cartItems->sum('quantity');
            $isCartEmpty = $cartItems->isEmpty();
            $totalPrice = $cartItems->sum(function ($item) {
                $price = $item->product->discounted_price ?? $item->product->price;
                return $price * $item->quantity;
            });

            $real_price = $cartItems->sum(function ($item) {
                $price = $item->product->price;
                return $price * $item->quantity;
            });
            $discounted_price = $real_price - $totalPrice;


        } else {
            $cartItems = session('cart', []);
            $count = array_sum(array_column($cartItems, 'quantity'));
            $isCartEmpty = empty($cartItems);
            $real_price= 0;
            foreach ($cartItems as $cartItem) {
                $real_price += $cartItem->product->price * $cartItem->quantity;
            }

            $totalPrice = 0;
            foreach ($cartItems as $item) {
                $price = $item['discounted_price'] ?? $item['price'];
                $totalPrice += $price * $item['quantity'];
            }
            $discounted_price = $real_price - $totalPrice;
        }
        $data = [
            'cartItems' => $cartItems,
            'count' => $count,
            'isCartEmpty' => $isCartEmpty,
            'totalPrice' => $totalPrice,
            'discounted_price' => $discounted_price,
            'real_price' => $real_price,
        ];
        return view('frontend.cart.cart', $data);
    }

    //add to cart
    public function addToCart($id){

        // هدف سبد خرید اینه که ما اگر کاربر لاگین نیست از طریق سشن بتونه اضافه کنه و وقتی لاگین کرد همش رو با هم مرج گنیم و بشه یک سبد خرید

        // found product with id
        $product = Product::findOrFail($id);

        // login اینجا می‌بینیم که لاگین شدیم یا نه
        if (auth()->check()) {
            $cart_item = CartItem::where('user_id', auth()->id())->where('product_id', $id)->first();
            if ($cart_item) {
                $cart_item->increment('quantity');
            }else{
                CartItem::create([
                    'user_id' => auth()->id(),
                    'product_id' => $id,
                    'quantity' => 1
                ]);
            }
        }else{
            // not login اینحا میگیم اگر لاگین نبود از سشن استفاده کن
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    'product_id' => $id,
                    'quantity' => 1
                ];
            }
            session()->put('cart', $cart);
        }
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

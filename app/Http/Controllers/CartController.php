<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //show cart
    public function showCart()
    {
        if (Auth::check()) {
            return $this->showUserCart();
        }

        return $this->showGuestCart();
    }

    //add to cart
    public function addToCart($id){
        $product = Product::findOrFail($id);

        if (Auth::check()) {
            $this->addToUserCart($product);
        } else {
            $this->addToGuestCart($product);
        }

        return back()->with('success', 'محصول به سبد خرید اضافه شد');

    }

    //delet
    public function remove($id)
    {
        if (Auth::check()) {
            CartItem::where('user_id', Auth::id())
                ->where('product_id', $id)
                ->delete();
        } else {
            $cart = session()->get('cart', []);
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back();
    }

    /* ==============================
            private method
    =================================*/



    // برای کاربرها که لاگین کردن
    private function showUserCart()
    {
        $cartItems = Auth::user()
            ->cartItems()
            ->with('product')
            ->get();

        $count = $cartItems->sum('quantity');
        $isCartEmpty = $cartItems->isEmpty();
        $realPrice = $cartItems->sum(fn ($item) =>
            $item->product->price * $item->quantity
        );

        $totalPrice = $cartItems->sum(fn ($item) =>
            ($item->product->discounted_price ?? $item->product->price) * $item->quantity
        );

        $data =  [
            'cartItems' => $cartItems,
            'count' => $count,
            'isCartEmpty' => $isCartEmpty,
            'real_price' => $realPrice,
            'totalPrice' => $totalPrice,
            'discounted_price' => $realPrice - $totalPrice,
        ];

        return view('frontend.cart.cart' , $data);


    }
    // برای کاربرهایی که لاگین نکردن در سشن میزاریم
    private function showGuestCart()
    {
        $sessionCart = session()->get('cart', []);

        //gbt ?
        $cartItems = collect($sessionCart)->map(function ($item) {

            $product = Product::find($item['product_id']);

            return (object) [
                'product' => $product,
                'quantity' => $item['quantity'],
            ];
        })->filter(fn ($item) => $item->product); // اگر محصول حذف شده بود

        $count = $cartItems->sum('quantity');
        $isCartEmpty = $cartItems->isEmpty();

        $realPrice = $cartItems->sum(fn ($item) =>
            $item->product->price * $item->quantity
        );

        $totalPrice = $cartItems->sum(fn ($item) =>
            ($item->product->discounted_price ?? $item->product->price) * $item->quantity
        );


        $data =  [
            'cartItems' => $cartItems,
            'count' => $count,
            'isCartEmpty' => $isCartEmpty,
            'real_price' => $realPrice,
            'totalPrice' => $totalPrice,
            'discounted_price' => $realPrice - $totalPrice,
        ];

        return view('frontend.cart.cart' , $data);
    }

    private function addToUserCart(Product $product)
    {
        $item = CartItem::firstOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $product->id,
            ],
            ['quantity' => 0]
        );

        $item->increment('quantity');
    }

    private function addToGuestCart(Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'discounted_price' => $product->discounted_price,
                'quantity' => 1,
                'image' => $product->primary_image,
            ];
        }

        session()->put('cart', $cart);
    }

}










//
//// show cart
//if (auth()->check()) {
//    $cartItems = auth()->user()
//        ->cartItems()
//        ->with('product')
//        ->get();
//    $count = $cartItems->sum('quantity');
//    $isCartEmpty = $cartItems->isEmpty();
//    $totalPrice = $cartItems->sum(function ($item) {
//        $price = $item->product->discounted_price ?? $item->product->price;
//        return $price * $item->quantity;
//    });
//
//    $real_price = $cartItems->sum(function ($item) {
//        $price = $item->product->price;
//        return $price * $item->quantity;
//    });
//    $discounted_price = $real_price - $totalPrice;
//
//
//} else {
//    $cartItems = session('cart', []);
//    $count = array_sum(array_column($cartItems, 'quantity'));
//    $isCartEmpty = empty($cartItems);
//    $real_price= 0;
//    foreach ($cartItems as $cartItem) {
//        $real_price += $cartItem->product->price * $cartItem->quantity;
//    }
//
//    $totalPrice = 0;
//    foreach ($cartItems as $item) {
//        $price = $item['discounted_price'] ?? $item['price'];
//        $totalPrice += $price * $item['quantity'];
//    }
//    $discounted_price = $real_price - $totalPrice;
//}
//$data = [
//    'cartItems' => $cartItems,
//    'count' => $count,
//    'isCartEmpty' => $isCartEmpty,
//    'totalPrice' => $totalPrice,
//    'discounted_price' => $discounted_price,
//    'real_price' => $real_price,
//];
//return view('frontend.cart.cart', $data);



//////////////////////////////////////////////////////////////////////////////
///
/// public function addToCart($id){
//
//        // هدف سبد خرید اینه که ما اگر کاربر لاگین نیست از طریق سشن بتونه اضافه کنه و وقتی لاگین کرد همش رو با هم مرج گنیم و بشه یک سبد خرید
//
//        // found product with id
//        $product = Product::findOrFail($id);
//
//        // login اینجا می‌بینیم که لاگین شدیم یا نه
//        if (auth()->check()) {
//            $cart_item = CartItem::where('user_id', auth()->id())->where('product_id', $id)->first();
//            if ($cart_item) {
//                $cart_item->increment('quantity');
//            }else{
//                CartItem::create([
//                    'user_id' => auth()->id(),
//                    'product_id' => $id,
//                    'quantity' => 1
//                ]);
//            }
//        }else{
//            // not login اینحا میگیم اگر لاگین نبود از سشن استفاده کن
//            $cart = session()->get('cart', []);
//
//            if (isset($cart[$id])) {
//                $cart[$id]['quantity']++;
//            } else {
//                $cart[$id] = [
//                    'product_id' => $id,
//                    'quantity' => 1
//                ];
//            }
//            session()->put('cart', $cart);
//        }
//        // make cart with session
//        $cart = session()->get('cart', []);
//        $price = $product->discounted_price ?? $product->price;
//        $image = $product->primary_image ? str_replace('public/', '', $product->primary_image) : 'default.png';
//
//        // if we have this product in cart, add number
//        if(isset($cart[$id])) {
//            $cart[$id]['quantity']++;
//        }else{
//            $cart[$id] = [
//                "name" => $product->name,
//                "quantity" => 1,
//                "price" => $product->price,
//                'image' => $image,
//            ];
//        }
//        // save cart in session
//        session()->put('cart', $cart);
//
//
//        return redirect()->back()->with('success', 'Product added to cart successfully!');
//    }

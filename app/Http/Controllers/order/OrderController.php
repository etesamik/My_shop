<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\order\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Morilog\Jalali\Jalalian;

class OrderController extends Controller
{


    public function getDeliveryDates()
    {
        // ترتیب بر اساس dayOfWeekIso (1=Monday ... 7=Sunday)
        $daysFa = [
            1 => 'دوشنبه',
            2 => 'سه‌شنبه',
            3 => 'چهارشنبه',
            4 => 'پنج‌شنبه',
            5 => 'جمعه',
            6 => 'شنبه',
            7 => 'یک‌شنبه',
        ];

        $today = Jalalian::now();
        $result = [];
        $dayCount = 0;
        $i = 0;

        while (count($result) < 6 && $dayCount < 14) {

            // ❗ clone مهمه
            $futureDate = (clone $today)->addDays($i);

            // 1 تا 7
            $weekdayIso = $futureDate->toCarbon()->dayOfWeekIso;
            $weekdayFa = $daysFa[$weekdayIso];

            // حذف جمعه
            if ($weekdayFa !== 'جمعه') {

                $result[] = [
                    'label'     => $weekdayFa,
                    'full_date' => $futureDate->format('d F'), // مثل: ۱۲ اردیبهشت
                    'id'        => 'cb' . ($i + 1),
                    'value'     => $futureDate->toCarbon()->toDateString(), // 2026-02-08
                ];
            }

            $i++;
            $dayCount++;
        }

        return $result;
    }


    public function showCheckout()
    {
        if (Auth::check()) {

            $cartItems = Auth::user()->cartItems()->with('product')->get();
            if ($cartItems->isEmpty()) {
                return view('frontend.cart.empty-cart');
            } else {
                $totalPrice = 0;
                foreach ($cartItems as $item) {
                    $price = $item->product->discounted_price ?? $item->product->price;
                    $totalPrice += $price * $item->quantity;

                }

                $real_price = 0;
                foreach ($cartItems as $item) {
                    $real_price += $item->product->price * $item->quantity;
                }

                $discounted_price = $totalPrice - $real_price;


                $user_addresses = Auth::user()->addresses()->get();
                $firstAddress = $user_addresses->first();

                $selectedAddressId = session()->get('selected_address_id');

                if ($selectedAddressId) {
                    $selectedAddress = $user_addresses
                        ->where('id', $selectedAddressId)
                        ->first();
                } else {
                    $selectedAddress = $firstAddress;
                }
                $selectedAddress = $selectedAddress ?? $firstAddress;

                $user = Auth::user();


                $fullName = $user->name ?? null;

                $phoneNumber = $user->phone_number ?? null;
                $email = $user->email ?? null;

                $deliveryDates = $this->getDeliveryDates();


                $data = [
                    'cartItems' => $cartItems,
                    'totalPrice' => $totalPrice,
                    'user_addresses' => $user_addresses,
                    'firstAddress' => $firstAddress,
                    'selectedAddress' => $selectedAddress,
                    'fullName' => $fullName,
                    'phoneNumber' => $phoneNumber,
                    'email' => $email,
                    'deliveryDates' => $deliveryDates,
                    'real_price' => $real_price,
                    'discounted_price' => $discounted_price,

                ];

                return view('frontend.order.checkout', $data);
            }

        } else {
            return redirect()->route('login');
//            $sessionCart = session()->get('cart', []);
//            $cartItems = collect($sessionCart)->map(function ($item) {
//                $product = Product::find($item['product_id']);
//                return (object)[
//                    'id' => $item['product_id'],
//                    'product' => $product,
//                    'quantity' => $item['quantity'],
//                ];
//            });
//            if ($cartItems->isEmpty()) {
//                return view('frontend.cart.empty-cart');
//            } else {
//                $count = $cartItems->sum('quantity');
//                $totalPrice = $cartItems->sum(fn($item) => ($item->product->discounted_price ?? $item->product->price) * $item->quantity
//                );
//                $data = [
//                    'cartItems' => $cartItems,
//                    'count' => $count,
//                    'totalPrice' => $totalPrice,
//                ];
//
//                return view('frontend.order.checkout', $data);
//            }
        }

    }

    public function saveCheckout()
    {
        $cartItems = Auth::user()->cartItems()->with('product')->get();
        if ($cartItems->isEmpty()) {
            return view('frontend.cart.empty-cart');
        } else {

            // find total price
            $totalPrice = 0;
            foreach ($cartItems as $item) {
                $price = $item->product->discounted_price ?? $item->product->price;
                $totalPrice += $price * $item->quantity;

            }

            //find real price
            $real_price = 0;
            foreach ($cartItems as $item) {
                $real_price += $item->product->price * $item->quantity;
            }


            // user address
            $user_addresses = Auth::user()->addresses()->get();
            $firstAddress = $user_addresses->first();

            $selectedAddressId = session()->get('selected_address_id');

            if ($selectedAddressId) {
                $selectedAddress = $user_addresses
                    ->where('id', $selectedAddressId)
                    ->first();
            } else {
                $selectedAddress = $firstAddress;
            }
            $selectedAddress = $selectedAddress ?? $firstAddress;
            $address_id = $selectedAddress->id;


            Order::query()->create([
                'user_id' => Auth::id(),
                'address_id' => $address_id,
                'coupon_id' => null,
                'status' => 1,
                'total_amount' => $real_price,
                'delivery_amount' => 50000,
                'paying_amount' => $totalPrice,
                'description' => '',
            ]);

            return redirect()->route('success');


        }

    }
}

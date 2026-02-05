<?php

    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\Facades\Auth;
    use App\Models\Product;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         */
        public function register(): void
        {
            //
        }

        /**
         * Bootstrap any application services.
         */

        public function boot(): void
        {
            View::composer('*', function ($view) {
                $cartItems = [];

                if (Auth::check()) {
                    // کاربر لاگین هست، cartItems از دیتابیس
                    foreach (Auth::user()->cartItems()->with('product')->get() as $cartItem) {
                        if ($cartItem->product) {
                            $cartItems[$cartItem->product->id] = [
                                'product_id' => $cartItem->product->id,
                                'name' => $cartItem->product->name,
                                'price' => $cartItem->product->discounted_price ?? $cartItem->product->price,
                                'quantity' => $cartItem->quantity,
                                'image' => $cartItem->product->primary_image ?? 'images/default.png',
                            ];
                        }
                    }
                } else {
                    // مهمان است، از session
                    $cartItems = session('cart', []);
                }

                $view->with('cart_items', $cartItems);
            });
        }
//        public function boot(): void
//        {
////            View::composer('*', function ($view) {
////                $view->with('cart_items', session('cart', []));
////            });
//        }
    }

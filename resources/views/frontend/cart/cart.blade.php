
@extends('base')

@section('title', 'سبد خرید')


<!--============ start main content ==============-->

@section("contend")

<section class="content">
    <div class="container-fluid">


        <div class="payment_navigtions">
            <div class="checkout-headers">
                <nav class="navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="" class="nav-link">
                                <span>1</span>
                                <p>سبد خرید</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>2</span>
                                <p>صورتحساب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>3</span>
                                <p>جزییات پرداخت</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <h2 class="fw-900 main-color-one-color mt-4 h4">سبد خرید شما <span
                    class="main-color-three-color">( {{$count}} کالا)</span>
            </h2>
        </div>

    </div>
    <div class="container-fluid">
        <div class="cart-product">
            <div class="row gy-4">
                <div class="col-lg-9">
                    @forelse($cartItems as $cartItem)
                    <div class="cart-product-item mt-3">
                        <div class="content-box">
                            <div class="container-fluid">
                                <div class="cart-items">
                                    <div class="item">
                                        <div class="row gy-2">
                                            <div class="col-md-2 w-100-in-400">
                                                <div class="image">
                                                    <img src="{{asset($cartItem->product->image)}}" alt=""
                                                         class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-10 w-100-in-400">
                                                <div class="d-flex justify-content-between align-items-md-start align-items-end flex-wrap">
                                                    <div class="d-flex align-items-start flex-column me-2">
                                                        <div class="title d-flex align-items-center flex-wrap">
                                                            <h6 class="font-16">{{$cartItem->product->name}}
{{--                                                                <span class="badge ms-2 danger-label rounded-pill">% {{cart_pro.product.discount_percent}}</span>--}}
                                                            </h6>
                                                        </div>
                                                        <div class="cart-item-feature d-flex flex-column align-items-start flex-wrap mt-3">
                                                            <div class="item d-flex align-items-center">
                                                                <div class="icon"><i class="bi bi-shop"></i></div>
                                                                <div class="saller-name mx-2">فروشنده:</div>
                                                                <div class="saller-name text-muted">3 بیت</div>
                                                            </div>
                                                            <div class="item d-flex align-items-center mt-2">
                                                                <div class="icon"><i class="bi bi-shield-check"></i>
                                                                </div>
                                                                <div class="saller-name mx-2">گارانتی:</div>
                                                                <div class="saller-name text-muted">دارد</div>
                                                            </div>
                                                            <div class="item d-flex align-items-center mt-3">
                                                                <div class="counter">
                                                                    <label>
                                                                        <input type="text" name="count" class="counter quantity-input"
                                                                               data-id="{{$cartItem->product->id}}"
{{--                                                                               data-url="{{ route('cart.update', $cartItem->product->id) }}"--}}
                                                                               value="{{$cartItem->quantity}}">
                                                                    </label>
                                                                </div>
                                                                <div class="remove danger-label ms-3">
                                                                    <form action="{{route('cart.remove', $cartItem->product->id)}}" method="POST" style="display:inline;">
                                                                        @csrf
                                                                        <button type="submit" class="btn" style="background: none; border: none; padding: 0; cursor: pointer;" title="حذف">
                                                                            <i class="bi bi-trash-fill"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action d-flex flex-wrap flex-column justify-content-sm-end justify-content-center align-items-center">
                                                        <div class="product-box-price flex-column justify-content-end align-items-end">
                                                            <div class="product-box-price-price d-flex">
                                                                <h5 class="title-font main-color-green-color h2 mb-2">
                                                                    {{ number_format($cartItem->product->discounted_price ?? $cartItem->product->price) }}
                                                                </h5>
                                                                <p class="mb-0 text-muted-two ms-1 ">تومان</p>
                                                            </div>
                                                        </div>

                                                        <div class="mt-2">
                                                            <a href=""
                                                               class="btn btn-sm main-color-one-outline rounded-pill"><i
                                                                    class="bi bi-plus-circle me-1"></i> ذخیره در لیست
                                                                خرید بعدی</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center">
                        <h1>سبد خرید شما خالی است</h1>
                        <a class="main-color-one-color h4" href="{{asset('home')}}">اضافه کردن به سبد خرید</a>
                    </div>
                            @endforelse

                </div>
                <div class="col-lg-3">
                    <div class="cart-canvases position-sticky top-0">
                        <div class="item">
                            <div class="factor">
                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">قیمت کالا ها</h5>
                                    <p class="mb-0 font-17"> {{number_format($real_price)}} تومان</p>
                                </div>

                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">تخفیف کالا ها</h5>
                                    <p class="mb-0 font-18">{{number_format($discounted_price)}} تومان</p>
                                </div>

                                <div class="d-flex factor-item flex-column mb-3 align-items-start justify-content-between">
                                    <h5 class="title-font mb-0 h6">حمل و نقل</h5>
                                    <form action="">
                                        <div class="form-check mt-3">
                                            <input type="radio" checked class="form-check-input" name="post"
                                                   id="post-1">
                                            <label for="post-1" class="form-check-label">
                                                پیک موتوری اختصاصی (کمتر از 5 ساعت): 80,000 تومان
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input type="radio" checked class="form-check-input" name="post" id="post-2">
                                            <label for="post-2"  class="form-check-label">
                                                پیک عمومی 3 بیت (2 تا 3 روز کاری): 50,000 تومان

                                            </label>
                                        </div>
                                    </form>
                                </div>

                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">مجموع</h5>
                                    <p class="mb-0 font-18">{{number_format($totalPrice)}} تومان</p>
                                </div>

                                <div class="action mt-3 d-flex align-items-center justify-content-center">
                                    <a href="/products/checkout/"
                                       class="btn main-color-one-outline py-2 rounded-pill rounded-3 d-block w-100">تسویه
                                        حساب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section("extra_js")
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('.quantity-input');
        console.log("✅ JavaScript Loaded!");
        console.log("🎯 تعداد input های پیدا شده:", inputs.length);

        // تابع گرفتن csrftoken از کوکی‌ها
        function getCookie(name) {
            let cookieValue = null;
            if (document.cookie && document.cookie !== '') {
                const cookies = document.cookie.split(';');
                for (let cookie of cookies) {
                    cookie = cookie.trim();
                    if (cookie.startsWith(name + '=')) {
                        cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                        break;
                    }
                }
            }
            return cookieValue;
        }

        inputs.forEach(input => {
            input.addEventListener('change', function () {
                const itemId = this.dataset.id;
                const url = this.dataset.url;
                const quantity = this.value;

                console.log("🟡 مقدار تغییر کرده:", quantity);
                console.log("📦 آدرس ارسال:", url);

                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRFToken': getCookie('csrftoken'),
                    },
                    body: JSON.stringify({ quantity: quantity })
                })
                    .then(res => {
                        if (!res.ok) throw new Error('❌ خطا در پاسخ سرور');
                        return res.json();
                    })
                    .then(data => {
                        if (data.success) {
                            console.log("✅ با موفقیت آپدیت شد");
                            alert("تعداد محصول با موفقیت آپدیت شد!");
                            location.reload();  // یا به جای reload فقط DOM رو آپدیت کن
                        } else {
                            console.error("❌ آپدیت انجام نشد");
                            alert("خطا در به‌روزرسانی سبد خرید");
                        }
                    })
                    .catch(err => {
                        console.error("🚨 خطای fetch:", err);
                        alert("خطا در ارتباط با سرور");
                    });
            });
        });
    });
</script>
@endsection
<!--============ end main content ==============-->


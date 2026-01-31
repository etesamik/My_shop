@extends('base')
{{--{% load static %}--}}
{{--{% load humanize %}--}}
{{--{% load custom_filters %}--}}
{{--در لاراول نداریم--}}


@section('title', 'صفحه اصلی')



@section('content')


<!--============ start main slider ==============-->

<section class="main-slider">
    <div class="container-fluid position-relative">
        <div class="row gy-4">
            <div class="col-xl-9">
                <div class="slider">
                    <div class="swiper" id="homeSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{asset('image/slider/slide4.jpg')}}" class="img-fluid w-100" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{asset('image/cart/empty.svg')}}" class="cart-empty-image" alt="">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{asset('image/slider/slide22-3.jpg')}}" class="img-fluid w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next d-lg-flex d-none"></div>
                        <div class="swiper-button-prev d-lg-flex d-none"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="swiper suggetMoment">
                    <div class="swiper-wrapper position-relative">
                        <div class="swiper-slide p-1">
                            <a href="">
                                <div class="product-box border-ui">
                                    <div class="product-timer">
                                        <div class="timer-label">
                                            <span>40% تخفیف</span>
                                        </div>
                                        <div class="timer">
                                            <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img alt="" class="img-fluid" src="{{asset('image/product/laptop-1.jpg')}}">
                                    </div>
                                    <div class="product-title">
                                        <div class="title">
                                            <p class="title-font font-14">گوشی موبایل شیائومی مدل Redmi Note 13 Pro 5G
                                                دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-action flex-column mt-3">
                                        <div class="price d-flex justify-content-between w-100 align-items-baseline">
                                            <p class="new-price">3,175,000 <span class="font-12">تومان</span></p>
                                            <p class="old-price">6,500,000 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="">
                                <div class="product-box border-ui">
                                    <div class="product-timer">
                                        <div class="timer-label">
                                            <span>40% تخفیف</span>
                                        </div>
                                        <div class="timer">
                                            <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img alt="" class="img-fluid" src="{{asset('image/product/laptop-2.jpg')}}">
                                    </div>
                                    <div class="product-title">
                                        <div class="title">
                                            <p class="title-font font-14">گوشی موبایل شیائومی مدل Redmi Note 13 Pro 5G
                                                دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-action flex-column mt-3">
                                        <div class="price d-flex justify-content-between w-100 align-items-baseline">
                                            <p class="new-price">3,175,000 <span class="font-12">تومان</span></p>
                                            <p class="old-price">6,500,000 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="">
                                <div class="product-box border-ui">
                                    <div class="product-timer">
                                        <div class="timer-label">
                                            <span>40% تخفیف</span>
                                        </div>
                                        <div class="timer">
                                            <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img alt="" class="img-fluid" src="{{asset('image/product/laptop-2.jpg')}}">
                                    </div>
                                    <div class="product-title">
                                        <div class="title">
                                            <p class="title-font font-14">گوشی موبایل شیائومی مدل Redmi Note 13 Pro 5G
                                                دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-action flex-column mt-3">
                                        <div class="price d-flex justify-content-between w-100 align-items-baseline">
                                            <p class="new-price">3,175,000 <span class="font-12">تومان</span></p>
                                            <p class="old-price">6,500,000 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="swiper-progress-bar">
                            <span class="slide_progress-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============ end main slider ==============-->

<!--============ start feature section ==============-->

<section class="feature">
    <div class="container-fluid">
        <div class="row justify-content-center g-2 row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
            <div class="col">
                <div class="feature-item text-center active">
                    <div class="icon">
                        <i class="bi bi-coin"></i>
                    </div>
                    <div class="title mt-2 d-flex align-items-center justify-content-center flex-column">
                        <h6 class="h6">فقط کالاهای اصل</h6>
                        <h6 class="fw-lighter font-14 mt-3">همراه با گارانتی معتبر</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-item text-center">
                    <div class="icon">
                        <i class="bi bi-repeat"></i>
                    </div>
                    <div class="title mt-2 d-flex align-items-center justify-content-center flex-column">
                        <h6 class="h6">بازگشت و تعویض کالا</h6>
                        <h6 class="fw-lighter font-14 mt-3">تا هفت روز به هر دلیل</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-item text-center">
                    <div class="icon">
                        <i class="bi bi-gift"></i>
                    </div>
                    <div class="title mt-2 d-flex align-items-center justify-content-center flex-column">
                        <h6 class="h6">دریافت امتیاز با سفارش</h6>
                        <h6 class="fw-lighter font-14 mt-3">برای خرید های بعدی</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-item text-center">
                    <div class="icon">
                        <i class="bi bi-car-front"></i>
                    </div>
                    <div class="title mt-2 d-flex align-items-center justify-content-center flex-column">
                        <h6 class="h6">ارسال اکسپرس</h6>
                        <h6 class="fw-lighter font-14 mt-3">سوپر مارت در تهران</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-item text-center">
                    <div class="icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="title mt-2 d-flex align-items-center justify-content-center flex-column">
                        <h6 class="h6">مشاور رایگان خرید</h6>
                        <h6 class="fw-lighter font-14 mt-3">برای تمامی خرید های شما</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============ end feature section ==============-->

<!--============ start category slider  ==============-->

<section class="categories free-swiper py-30">
    <div class="container-fluid position-relative">
        <div class="section-title mb-5">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="fw-900 h4">دسته بندی <span class="with-highlight ms-1">محصولات</span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn main-color-two-bg border-0" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-4">
            @foreach($categories as $category)
            <div class="col-lg-3 col-sm-6">
                <a href="">
                    <div class="cat-item d-flex align-items-center">
                        <div class="cat-item-image">
                            <img src="" alt="">
                        </div>
                        <div class="cat-item-desc ms-3">
                            <h5> انواع {{ $category->name }}</h5>
                            <p class="text-muted">{{$category->description}} </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!--============ end category slider  ==============-->


<!--============ start banner section ==============-->

<section class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-item rounded-3">
                    <a href="">
                        <img src="{{asset('image/banner/banner-1.png')}}" alt="" class="img-fluid rounded-3 w-100">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item rounded-3">
                    <a href="">
                        <img src="{{asset('image/banner/banner-2.png')}}" alt="" class="img-fluid rounded-3 w-100">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============ end banner section ==============-->

<!--============ start product slider ==============-->

<section class="product-slider  site-slider">
    <div class="container-fluid">
        <div class="section-title mb-3">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="fw-900 h4">محصولات<span class="with-highlight ms-1">تازه وارد</span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn main-color-two-bg border-0" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper pro-slider">
            <div class="swiper-wrapper">

                @foreach($new_products as $new_pro)
                <div class="swiper-slide">
                    <div class="product-box border-ui">
                        <div class="product-timer position-relative">
                            <div class="product-header-btn flex-column position-absolute top-0">
                                <a href="" class="mb-1 border-ui" data-bs-toggle="tooltip" data-bs-placement="right"
                                   data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i>
                                </a>
                                <a class="mb-1 border-ui">
                                    <form action="{{route('cart.add', $new_pro->id)}}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="mb-1 border-ui" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="افزودن به سبد خرید" style="background: none; border: none; padding: 0;">
                                            <i class="bi bi-bag-plus"></i>
                                        </button>
                                    </form>
                                </a>

                            </div>
                        </div>
                        <a href="{{route('products.detail', $new_pro->slug)}}">
                            <div class="product-image">
                                <img src="{{ asset($new_pro->primary_image) }}" loading="lazy" alt=""
                                     class="img-fluid one-image">

                                @if($new_pro->primary_image)
                                <img src="{{asset($new_pro->primary_image)}}" loading="lazy" alt=""
                                     class="img-fluid two-image">
                                @else
                                <img src="" loading="lazy" alt=""
                                     class="img-fluid two-image">
                                @endif

                            </div>
                            <div class="product-title mb-3">
                                <div class="title">
                                    <p class="text-overflow-1 mt-2">{{ $new_pro->name }}</p>
                                </div>
                                <div class="rating">
                                    <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                    <div class="icon"><i class="bi bi-star-fill"></i></div>
                                </div>
                            </div>
                            <div class="product-action">
                                <div class="discount">


                                    @if($new_pro->discounted_price)
                                    <div class="no-hover border-0 rounded-3 main-color-one-bg p-2">
                                        <span class="text-white">{{ $new_pro->discounted_price }}</span>
                                    </div>
                                    @endif

                                </div>
                                <div class="price">
                                    @if($new_pro->discount_percent && $new_pro->discount_percent > 0)
                                        <p class="new-price">{{ number_format($new_pro->discounted_price) }} تومان</p>
                                        <p class="old-price">{{ number_format($new_pro->price) }} تومان</p>
                                    @else
                                    <p class="new-price">{{ number_format($new_pro->price) }} تومان</p>
                                    @endif
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!--============ end product slider ==============-->

<!--============ start banner section ==============-->

<section class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-item rounded-3">
                    <a href="">
                        <img src="{{asset('image/banner/banner-3.jpg')}}" alt="" class="img-fluid rounded-3 w-100">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item rounded-3">
                    <a href="">
                        <img src="{{asset('image/banner/banner-4.jpg')}}" alt="" class="img-fluid rounded-3 w-100">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============ end banner section ==============-->

<!--============ start product group ==============-->

<section class="product-group">
    <div class="container-fluid">
        <div class="border bg-white slider-parent border-ui px-3 rounded-3">
            <div class="row">
                {% for cat in categories %}
                <div class="col-lg-3 col-sm-6">
                    <div class="product-group-item">
                        <h5 class="fw-bold with-highlight ms-1">انواع</h5>
                        <p class="text-muted">بر اساس سلیقه شما</p>
                        <div class="row">
                            {% with category_products=category_products|get_item:cat %}
                            {% for product in category_products %}
                            <div class="col-6">
                                <a href="">  <!-- Assuming you have a URL for product detail -->
                                    <img src="" alt="">  <!-- Adjust according to your model -->
                                </a>
                            </div>
                            {% endfor %}
                            {% endwith %}
                        </div>
                        <div class="text-center py-3">
                            <a href="" class="main-color-one-color">مشاهده <i class="bi bi-chevron-left font-14"></i></a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>

<!--============ end product group ==============-->



<!--============ start quick select   ==============-->

<section class="quick-select pt-0 free-swiper">
    <div class="container-fluid position-relative">
        <div class="section-title mb-3">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="fw-900 h4">مودم براساس<span class="with-highlight ms-1">ویژگی</span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn main-color-two-bg border-0" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-2 row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
            <div class="col">
                <div class="bg-white mini-box rounded-3 px-1 py-3 shadow-box">
                    <a href="" class="d-flex align-items-center justify-content-center flex-column">
                        <i class="bi bi-cpu main-color-one-color fs-3"></i>
                        <h5 class="mt-3">قدرت پردازش</h5>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="bg-white mini-box rounded-3 px-1 py-3 shadow-box">
                    <a href="" class="d-flex align-items-center justify-content-center flex-column">
                        <i class="bi bi-battery main-color-one-color fs-3"></i>
                        <h5 class="mt-3">نگه داری باتری</h5>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="bg-white mini-box rounded-3 px-1 py-3 shadow-box">
                    <a href="" class="d-flex align-items-center justify-content-center flex-column">
                        <i class="bi bi-camera main-color-one-color fs-3"></i>
                        <h5 class="mt-3">دوربین</h5>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="bg-white mini-box rounded-3 px-1 py-3 shadow-box">
                    <a href="" class="d-flex align-items-center justify-content-center flex-column">
                        <i class="bi bi-hdd main-color-one-color fs-3"></i>
                        <h5 class="mt-3">حافظه</h5>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="bg-white mini-box rounded-3 px-1 py-3 shadow-box">
                    <a href="" class="d-flex align-items-center justify-content-center flex-column">
                        <i class="bi bi-globe main-color-one-color fs-3"></i>
                        <h5 class="mt-3">اینترنت نسل 5</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============ end quick select   ==============-->

<!--============ start blog-slider   ==============-->

<section class="blog-slider free-swiper">
    <div class="container-fluid position-relative">
        <div class="section-title mb-3">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="fw-900 h4">مطالب<span class="with-highlight ms-1">وبلاگ</span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn main-color-two-bg border-0" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper blog-slider-sw">
            <div class="swiper-wrapper">
                {% for blog in blogs %}
                <div class="swiper-slide">
                    <div class="blog-item border-ui">
                        <a href="">
                            <div class="image">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <div class="title">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="title-item d-flex align-items-center main-color-one-bg px-3 py-2">
                                        <span class="font-14 text-white"></span>
                                    </div>
                                    <div class="title-item d-flex align-items-center main-color-one-bg p-3 py-2 ms-5">
                                        <span class="font-14 text-white"></span>
                                    </div>
                                </div>
                                <h4 class="font-16 text-overflow-1 h4 pb-3"></h4>
                            </div>
                        </a>
                    </div>
                </div>
                {% endfor %}

            </div>
        </div>
    </div>
</section>

@endsection

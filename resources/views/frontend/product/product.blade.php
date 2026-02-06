@extends('base')
@section('title', 'صفحه محصول')



    <link rel="stylesheet" href="{{ asset('plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/tagify/tagify.css') }}">

@section('content')
<!--============ start main content ==============-->

<section class="content mt-3">
    <section class="bread-crumb py-0 mb-3">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/" class="font-14 text-muted">خانه</a></li>
                            <li class="breadcrumb-item"><a href="#" class="font-14 text-muted">فروشگاه</a></li>
                            <li class="breadcrumb-item"><a href="#" class="font-14 text-muted">{{$product->category->name}}</a></li>
                            <li class="breadcrumb-item active main-color-one-color font-14" aria-current="page">{{$product->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="content-box">
            <div class="row gy-3">
                <div class="col-lg-4">
                    <div class="amazing-timer" style="padding: 0 0 15px 0;">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="d-grid gap-1">
                                    <span class="font-14">پیشنـهاد شگفت انگیـز
                                    </span>
                                <span class="font-12 text-muted">فرصت باقی مانده</span>
                            </div>
                            <div class="flex-grow-1 text-end">
                                <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro_gallery">
                        <div class="icon-product-box">
                            <!-- <div class="icon-product-box-item hint--right" data-bs-toggle="modal"
                                 data-bs-target="#videoModal" data-hint="ویدیو معرفی">
                                <i class="bi bi-play-circle"></i>
                            </div> -->
                            <div class="icon-product-box-item hint--right" data-bs-toggle="modal"
                                 data-bs-target="#shareModal" data-hint="اشتراک گذاری">
                                <i class="bi bi-share-fill"></i>
                            </div>
                            <!-- <div class="icon-product-box-item hint--right" data-hint="افزودن به محصولات مورد علاقه">
                                <i class="bi bi-heart"></i>
                            </div> -->
                        </div>
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                             class="swiper product-gallery">
                            <div class="swiper-wrapper" title="برای بزرگنمایی تصویر دابل کلیک کنید">
                                @if($product->primary_image)
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img class="img-fluid" src="{{asset($product->primary_image)}}" alt=""/>
                                    </div>
                                </div>
                                @endif


                                    <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img class="img-fluid" src="" alt=""/>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img class="img-fluid" src="" alt=""/>
                                    </div>
                                </div>



                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img class="img-fluid" src="" alt=""/>
                                    </div>
                                </div>

                            </div>

                            <div class="swiper-button-next d-none d-lg-flex"></div>
                            <div class="swiper-button-prev d-none d-lg-flex"></div>
                            <div class="swiper-pagination d-none d-lg-block"></div>
                        </div>
                        <div class="swiper product-gallery-thumb">
                            <div class="swiper-wrapper">
                                @if($product->primary_image)
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset($product->primary_image) }}" alt=""/>
                                </div>
                                @endif


{{--                                <div class="swiper-slide">--}}
{{--                                    <img class="img-fluid" src="" alt=""/>--}}
{{--                                </div>--}}



{{--                                <div class="swiper-slide">--}}
{{--                                    <img class="img-fluid" src="" alt=""/>--}}
{{--                                </div>--}}



{{--                                <div class="swiper-slide">--}}
{{--                                    <img class="img-fluid" src="" alt=""/>--}}
{{--                                </div>--}}

                            </div>

                        </div>
                    </div>
                    <div class="d-flex my-3">
                        <a href="">
                            <i class="bi bi-info-circle me-1"></i>
                            <span class="me-1 font-14">گزارش نادرستی مشخصات</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-meta">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a class="main-color-one-color font-16" href="">
                                        {{$product->category->name}}
                                    </a>
                                </li>
                            </ol>
                        </nav>
                        <div class="title mt-md-0 mt-3">
                            <h6 class="font-16 mb-2">{{$product->name}}</h6>
                            <div class="d-flex align-items-center pb-2">
                                <div class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <div class="ms-3">
                                    <a href="" class="main-color-one-color font-14">
                                        <span>11</span>
                                        <span>دیدگاه</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-feature py-2">
                            <div class="product-meta-feature-items">
                                <h5 class="title font-16 mb-2 icon-circle">ویژگی های کالا</h5>
                                <ul class="navbar-nav">
                                    @if($product->attributes->count())
                                            @foreach($product->attributes->take(5) as $attribute)
                                    <li class="nav item"><span>{{$attribute->name}}:
                                        </span><strong>{{ $attribute->pivot->value }} </strong></li>
                                        @endforeach
                                    @else
                                    <li class="nav item">ویژگی‌ای ثبت نشده است.</li>

                                    @endif
                                </ul>
                            </div>
                            <br>
                            <div class="product-alert">
                                <i class="bi bi-info-circle-fill me-1"></i>
                                <span class="text-justify">امکان برگشت کالا با دلیل "انصراف از خرید" تنها در صورتی مورد قبول است که پلمب کالا باز نشده باشد.</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="se-cart border-ui">
                        <div class="se-cart-item pb-0">
                            <h4 class="font-18 fw-800 mb-4 icon-circle">فروشنده</h4>
                            <div class="d-flex">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                         fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                        <path
                                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-start ms-3">
                                    <h6 class="fw-bold text-muted-2 font-16">3 بیت رایانه</h6>
                                    <div class="d-flex align-items-center mt-2">
                                        <p class="font-12">
                                            <span class="text-success ms-1">89.6%</span>
                                            <span class="text-muted">رضایت از کالا</span>
                                        </p>
                                        <p class="ps-1 ms-1 border-start font-12">
                                            <span class="text-muted">عملکرد</span>
                                            <span class="text-success">عالی</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="se-cart-item">
                            <i class="bi bi-shield-check me-1 font-20"></i>
                            <h6 class="d-inline font-16 fw-normal">گارانتی اصالت و سلامت فیزیکی کالا</h6>
                        </div>
                        <div class="se-cart-item">
                            <div class="d-flex">
                                <div>
                                    <i class="bi bi-house font-20"></i>
                                </div>
                                <div class="text-start ms-3">

                                    @if($product->status)
                                    <h6 class="fw-normal font-16">موجود در انبار فروشنده</h6>
                                    @else
                                    <h6 class="fw-normal font-16">نا موجود</h6>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="se-cart-item d-lg-flex d-none justify-content-between align-items-center">
                            <div>
                                <i class="bi bi-info-circle font-18 me-2"></i>
                                <span class="font-16">
                                        قیمت فروشنده
                                    </span>
                            </div>

                            @if($product->discounted_price)
                            <div class="price d-flex flex-column justify-content-end">
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-3 def-color">{{number_format($product->discounted_price)}}</span>
{{--                                    <span class="badge main-color-one-bg rounded-pill ms-2">{{product.discount_percent}}%</span>--}}
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <span class="text-muted font-14 text-decoration-line-through">{{number_format($product->price)}}</span>
                                    <span class="text-muted font-14 ms-2">تومان</span>
                                </div>
                            </div>
                            @else
                            <div class="price d-flex flex-column justify-content-end">
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-6 def-color">{{number_format($product->price)}} تومان</span>
                                </div>
                            </div>
                            @endif

                        </div>
                        <div class="se-cart-item">
                            <form action="{{route('cart.add' , $product)}}" method="POST" class="w-100 d-flex flex-column justify-content-center align-items-center mt-3">
                                @csrf
                                <div class="counter">
                                    <label>
                                        <input type="number" name="count" class="counter text-center" value="1" min="1">
                                    </label>
                                </div>
                                <button type="submit" class="btn main-color-green w-100 text-center btn-add-to-cart text-white mt-3 d-flex justify-content-center">
                                    <i class="bi bi-basket me-3 lh-sm fs-4"></i> افزودن به سبد خرید
                                </button>
                            </form>
                        </div>

                    </div>
                    <a href="">
                        <div
                            class="d-flex border rounded-3 align-items-center justify-content-between mt-3 px-3 py-2">
                            <div>
                                <i class="bi bi-info-circle"></i>
                                <span class="font-14">فرایند قیمت گذاری و نظارت بر قیمت</span>
                            </div>
                            <div>
                                <i class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12">
                    <div class="shop-feature">
                        <div class="container-fluid">
                            <nav class="navbar">
                                <ul class="navbar-nav justify-content-md-between justify-content-center">
                                    <li class="nav-item d-flex align-items-center">
                                        <img alt="" src="{{asset('image/feature/box.png')}}">
                                        <span>امکان تحویل اکسپرس</span>
                                    </li>
                                    <li class="nav-item d-flex align-items-center">
                                        <img alt="" src="{{asset('image/feature/headphone.png')}}">
                                        <span>24 ساعته 7 روز هفته</span>
                                    </li>
                                    <li class="nav-item d-flex align-items-center">
                                        <img alt="" src="{{asset('image/feature/safe.png')}}">
                                        <span>امکان پرداخت در محل
                                        </span>
                                    </li>
                                    <li class="nav-item d-flex align-items-center">
                                        <img alt="" src="{{asset('image/feature/seven.png')}}">
                                        <span>7 روز ضمانت بازگشت کالا
                                        </span>
                                    </li>
                                    <li class="nav-item d-flex align-items-center">
                                        <img alt="" src="{{asset('image/feature/money.png')}}">
                                        <span>ضمانت اصالت کالا
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!--============ end main content ==============-->


<!--============ start product description ==============-->

<section class="product-desc">
    <div class="container-fluid">
        <div class="product-desc-tab">
            <ul class="nav justify-content-between" id="productTab" role="tablist">
                <li class="nav-item">
                    <button aria-selected="true" class="active waves-effect waves-light"
                            data-bs-target="#productDescLess-pane" data-bs-toggle="tab" id="productDescLess"
                            role="button" type="button">
                        توضیحات کالا
                    </button>
                </li>
                <li class="nav-item">
                    <button aria-selected="true" class=" waves-effect waves-light"
                            data-bs-target="#productDesc-pane" data-bs-toggle="tab" id="productDesc"
                            role="button" type="button">
                        مشخصات کالا
                    </button>
                </li>
                <li class="nav-item">
                    <button aria-selected="false" class="d-flex waves-effect waves-light"
                            data-bs-target="#productComment-pane" data-bs-toggle="tab" id="productComment"
                            role="button" type="button">
                        نظرات <span class="badge main-color-one-bg ms-2 lh-sm">17</span>
                    </button>
                </li>
                <li class="nav-item">
                    <button aria-selected="false" class="d-flex waves-effect waves-light"
                            data-bs-target="#productAnswer-pane" data-bs-toggle="tab" id="productAnswer"
                            role="button" type="button">
                        پرسش و پاسخ <span class="badge main-color-one-bg ms-2 lh-sm">8</span>
                    </button>
                </li>
            </ul>
        </div>
        <div class="row mt-4 pt-2">
            <div class="col-xl-9">
                <div class="content-box">
                    <div class="product-descs" id="prodesc">
                        <div class="product-desc">
                            <div class="product-desc-tab-content">
                                <div class="tab-content" id="productTabContent">
                                    <div class="tab-pane fade show active product-desc-less-contents"
                                         id="productDescLess-pane">
                                        <div class="product-desc-content">
                                            <h6 class="font-22 mb-2 title-font title-line-bottom">معرفی محصول</h6>

                                            <p>
                                                {{$product->description}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade product-desc-contents" id="productDesc-pane">
                                        <div class="product-desc-content">
                                            <input class="read-more-state" id="readMore2" type="checkbox"/>
                                            <!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
                                            <div class="read-more-wrap">
                                                <h6 class="font-26 mb-2 title-font title-line-bottom"> ویژگی های کالا
                                                </h6>
                                                @if($product->attributes->count())
                                                @foreach($product->attributes as $attribute)
                                                <li class="nav item"><strong>{{$attribute->name}}:</strong><span>{{ $attribute->pivot->value }} </span></li>
                                                    @endforeach
                                                        @else
                                                <li class="nav item">ویژگی‌ای ثبت نشده است.</li>

                                                        @endif
                                            </div>
                                            <!-- پایان والد بیشتر کمتر -->
                                            <label class="read-more-trigger" for="readMore2"></label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade product-comment-content" id="productComment-pane">

                                        <div class="comment-form">
                                            <h6 class="font-26 mb-2 title-font title-line-bottom">نظرت در مورد این
                                                محصول
                                                چیه؟</h6>
                                            <p class="font-14 text-muted mt-2">برای ثبت نظر، از طریق دکمه افزودن
                                                دیدگاه جدید
                                                نمایید. اگر این محصول را قبلا خریده باشید، نظر شما به عنوان خریدار
                                                ثبت خواهد
                                                شد.</p>
                                            <form action="">
                                                <div class="row gy-4">
                                                    <div class="col-md-4">
                                                        <div class="product-rateing position-sticky top-0">
                                                            <div class="row gy-2 align-items-center">
                                                                <div class="number">
                                                                    <h4 class="fw-light">متوسط امتیاز ها</h4>
                                                                    <h2>3.00</h2>
                                                                    <div class="star">
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="prog-rating">
                                                                    <div class="item w-100 mb-2">
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <span class="font-14">5 ستاره</span>
                                                                            <div class="progress flex-grow-1 mx-2"
                                                                                 style="height: 7px;">
                                                                                <div aria-valuemax="100"
                                                                                     aria-valuemin="0"
                                                                                     aria-valuenow="25"
                                                                                     class="progress-bar"
                                                                                     role="progressbar"
                                                                                     style="width: 25%"></div>
                                                                            </div>
                                                                            <span class="font-14">5</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item w-100 mb-2">
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <span class="font-14">4 ستاره</span>
                                                                            <div class="progress flex-grow-1 mx-2"
                                                                                 style="height: 7px;">
                                                                                <div aria-valuemax="100"
                                                                                     aria-valuemin="0"
                                                                                     aria-valuenow="60"
                                                                                     class="progress-bar"
                                                                                     role="progressbar"
                                                                                     style="width: 60%"></div>
                                                                            </div>
                                                                            <span class="font-14">17</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item w-100 mb-2">
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <span class="font-14">3 ستاره</span>
                                                                            <div class="progress flex-grow-1 mx-2"
                                                                                 style="height: 7px;">
                                                                                <div aria-valuemax="100"
                                                                                     aria-valuemin="0"
                                                                                     aria-valuenow="78"
                                                                                     class="progress-bar"
                                                                                     role="progressbar"
                                                                                     style="width: 78%"></div>
                                                                            </div>
                                                                            <span class="font-14">85</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item w-100 mb-2">
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <span class="font-14">2 ستاره</span>
                                                                            <div class="progress flex-grow-1 mx-2"
                                                                                 style="height: 7px;">
                                                                                <div aria-valuemax="100"
                                                                                     aria-valuemin="0"
                                                                                     aria-valuenow="4"
                                                                                     class="progress-bar"
                                                                                     role="progressbar"
                                                                                     style="width: 4%"></div>
                                                                            </div>
                                                                            <span class="font-14">3</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item w-100">
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <span class="font-14">1 ستاره</span>
                                                                            <div class="progress flex-grow-1 mx-2"
                                                                                 style="height: 7px;">
                                                                                <div aria-valuemax="100"
                                                                                     aria-valuemin="0"
                                                                                     aria-valuenow="82"
                                                                                     class="progress-bar"
                                                                                     role="progressbar"
                                                                                     style="width: 82%"></div>
                                                                            </div>
                                                                            <span class="font-14">652</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-floating mb-3 form-group">
                                                    <input class="form-control"
                                                           id="floatingInputEmail1"
                                                           placeholder="ایمیل خود را وارد کنید"
                                                           type="email">
                                                    <label for="floatingInputEmail1">ایمیل خود را
                                                        وارد
                                                        کنید</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-floating mb-3 form-group">
                                                    <input class="form-control"
                                                           id="floatingInputName"
                                                           placeholder="نام خود را وارد کنید"
                                                           type="text">
                                                    <label for="floatingInputName">نام خود را وارد
                                                        کنید</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group form-check">
                                                    <input class="form-check-input"
                                                           id="rememberComment"
                                                           type="checkbox">
                                                    <label class="form-check-label d-block"
                                                           for="rememberComment">
                                                        ذخیره
                                                        نام، ایمیل و وبسایت من در مرورگر برای زمانی
                                                        که دوباره
                                                        دیدگاهی می‌نویسم.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="my-3" for="commentRating">امتیاز
                                                        شما</label>
                                                    <fieldset class="rating" id="commentRating">
                                                        <input id="star5" name="rating" required
                                                               type="radio"
                                                               value="5"/>
                                                        <label for="star5">5 stars</label>
                                                        <input id="star4" name="rating" required
                                                               type="radio"
                                                               value="4"/>
                                                        <label for="star4">4 stars</label>
                                                        <input id="star3" name="rating" required
                                                               type="radio"
                                                               value="3"/>
                                                        <label for="star3">3 stars</label>
                                                        <input id="star2" name="rating" required
                                                               type="radio"
                                                               value="2"/>
                                                        <label for="star2">2 stars</label>
                                                        <input id="star1" name="rating" required
                                                               type="radio"
                                                               value="1"/>
                                                        <label for="star1">1 star</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                            <textarea class="form-control"
                                                      id="floatingTextarea2"
                                                      placeholder="Leave a comment here"
                                                      style="height: 150px"></textarea>
                                                    <label for="floatingTextarea2">متن نظر!</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-3">
                                                    <label class="text-success mb-2 fw-bold font-16"
                                                           for="tags-pos">نقاط
                                                        قوت</label>
                                                    <input class="commentTags form-control"
                                                           id="tags-pos"
                                                           name="tags-pos"
                                                           placeholder="با کلید اینتر اضافه کنید">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-3">
                                                    <label class="text-danger fw-bold mb-2 font-16"
                                                           for="tags-neg">نقاط
                                                        ضعف</label>
                                                    <input class="commentTags form-control"
                                                           id="tags-neg"
                                                           name="tags-neg"
                                                           placeholder="با کلید اینتر اضافه کنید">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn main-color-two-bg px-5 btn-lg border-0">
                                                    ثبت نظر
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="box_filter mt-5 pb-3">
                            <div class="row align-items-end">
                                <div class="col-md-4 bf1">
                                    <h4 class="title-font title-line-bottom">نظرات کاربران</h4>
                                </div>
                                <div class="col-md-8 bf2">
                                    <ul class="list-inline text-end mb-0">
                                        <li class="list-inline-item title-font">مرتب سازی بر اساس
                                            :
                                        </li>
                                        <li class="list-inline-item"><a href="#">نظر خریداران</a>
                                        </li>
                                        <li class="list-inline-item"><a class="active_custom"
                                                                        href="#">مفیدترین
                                            نظرات</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">جدیدترین نظرات</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="box_users_comment mt-3 p-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="box_message_light">
                                        <svg class="bi bi-cart3" fill="currentColor" height="16"
                                             viewBox="0 0 16 16" width="16"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                        </svg>
                                        خریدار این محصول
                                    </div>
                                    <div class="box_shopping mt-lg-5 mt-3">
                                        <span>خریداری شده از :</span>
                                        <p>
                                            <i class="bi bi-shop"></i>
                                            <a href="#">اسمارت الکترونیک</a>
                                        </p>
                                    </div>
                                    <div class="box_message_dislike mt-2">
                                        <i class="bi bi-hand-thumbs-down"></i>
                                        خرید این محصول را توصیه نمی
                                        کنم
                                    </div>
                                </div>
                                <div class="col-lg-9 pr-5" style="margin-top:-10px">
                                    <div class="box_comment_header mt-4 mt-lg-0">
                                        <span class="span1">نخرید</span>
                                        <br>
                                        <span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
                                </span>
                                    </div>
                                    <div class="border-bottom mt-3"></div>
                                    <div class="row mt-4">
                                        <div class="col-md-6 evaluation-positive">
                                            <div class="list-inline">
                                                <span>نقاط قوت</span>
                                                <div class="list-inline-item ml-3">هیچی</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 evaluation-negative">
                                            <div class="list-inline">
                                                <span>نقاط ضعف</span>
                                                <div class="list-inline-item ml-3">کیفیت صدا , موقع
                                                    زنگ اصلا
                                                    صدا
                                                    نمیره
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <p class="box_text_comment">
                                                دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره
                                                اونایی
                                                که
                                                میگن خوبه
                                                همشون
                                                فروشنده این بسته هستن با اکانت هایی که ساختن میام
                                                الکی نظر
                                                میدن
                                                نخرید به خدا
                                                نخرید اصلا خوب نیست
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-12">
                                            <div class="comments_likes">
                                        <span class="mr-4 mt-1">
                                            ایا این نظر برایتان مفید بود ؟
                                        </span>
                                                <a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
                                                   href="#"><i
                                                        class="bi bi-hand-thumbs-up"></i> 70</a>
                                                <a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
                                                   href="#"> <i
                                                        class="bi bi-hand-thumbs-down"></i> 7</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_users_comment mt-3 p-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="box_message_light">
                                        <svg class="bi bi-cart3" fill="currentColor" height="16"
                                             viewBox="0 0 16 16" width="16"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                        </svg>
                                        خریدار این محصول
                                    </div>
                                    <div class="box_shopping mt-lg-5 mt-3">
                                        <span>خریداری شده از :</span>
                                        <p>
                                            <i class="bi bi-shop"></i>
                                            <a href="#">اسمارت الکترونیک</a>
                                        </p>
                                    </div>
                                    <div class="box_message_dislike text-success mt-2">
                                        <i class="bi bi-hand-thumbs-up"></i>
                                        خرید این محصول را توصیه می
                                        کنم
                                    </div>
                                </div>
                                <div class="col-lg-9 pr-5" style="margin-top:-10px">
                                    <div class="box_comment_header mt-4 mt-lg-0">
                                        <span class="span1">نخرید</span>
                                        <br>
                                        <span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
                                </span>
                                    </div>
                                    <div class="border-bottom mt-3"></div>
                                    <div class="row mt-4">
                                        <div class="col-md-6 evaluation-positive">
                                            <div class="list-inline">
                                                <span>نقاط قوت</span>
                                                <div class="list-inline-item ml-3">هیچی</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 evaluation-negative">
                                            <div class="list-inline">
                                                <span>نقاط ضعف</span>
                                                <div class="list-inline-item ml-3">کیفیت صدا , موقع
                                                    زنگ اصلا
                                                    صدا
                                                    نمیره
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <p class="box_text_comment">
                                                دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره
                                                اونایی
                                                که
                                                میگن خوبه
                                                همشون
                                                فروشنده این بسته هستن با اکانت هایی که ساختن میام
                                                الکی نظر
                                                میدن
                                                نخرید به خدا
                                                نخرید اصلا خوب نیست
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-12">
                                            <div class="comments_likes">
                                        <span class="mr-4 mt-1">
                                            ایا این نظر برایتان مفید بود ؟
                                        </span>
                                                <a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
                                                   href="#"><i
                                                        class="bi bi-hand-thumbs-up"></i> 70</a>
                                                <a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
                                                   href="#"> <i
                                                        class="bi bi-hand-thumbs-down"></i> 7</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="text-center">
                                <a class="btn main-color-one-bg border-0" href="">بارگذاری کامنت
                                    ها</a>
                            </div>
                        </div>
                    </div>
                    <div aria-labelledby="#productAnswer" class="tab-pane fade"
                         id="productAnswer-pane"
                         role="tabpanel">
                        <h4 class="title-font title-line-bottom">پرسش و پاسخ</h4>
                        <span class="fw-bold d-block mt-2 text-muted font-12">پرسش خود را در مورد محصول مطرح
                نمایید</span>

                                    <div class="box_questions mt-4">
                                        <form>
                                            <div class="form-group">
                                                <label class="d-block">
                                                        <textarea class="form-control"
                                                                  placeholder="هر سوالی در مورد این محصول به ذهنتان میرسید بپرسید!"
                                                                  rows="7"></textarea>
                                                </label>
                                                <button class="btn main-color-three-bg mt-3 btn-lg"
                                                        type="submit">ثبت پرسش
                                                </button>
                                            </div>
                                        </form>

                                    <div class="box_filter mt-5 pb-3">
                                        <div class="row align-items-end">
                                            <div class="col-md-4 bf1">
                                                <h4 class="title-font title-line-bottom">پرسش های
                                                    کاربران</h4>
                                            </div>
                                            <div class="col-md-8 bf2">
                                                <ul class="list-inline text-end mb-0">
                                                    <li class="list-inline-item title-font">مرتب سازی بر
                                                        اساس :
                                                    </li>
                                                    <li class="list-inline-item"><a href="#">نظر
                                                        خریداران</a></li>
                                                    <li class="list-inline-item"><a class="active_custom"
                                                                                    href="#">مفیدترین
                                                        نظرات</a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#">جدیدترین
                                                        نظرات</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="box_questions mt-4">
                                        <div class="row bs-qu">
                                            <div class="col-lg-2 bq1 text-center">
                                                <i class="bi bi-question-circle-fill"></i>
                                                <br>
                                                <span class="span1">پرسش</span>
                                                <br>
                                                <span class="span2">فرزاد عباسقلی زاده</span>
                                            </div>
                                            <div class="col-lg-10 bq2">
                                                <p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

                                                <div class="row bq-footer">
                                                    <div class="col-md-5 col-6 my-flex-align-end">
                                            <span class="date"> ۱۶ مهر ۱۳۹۷
                                            </span>
                                                    </div>
                                                    <div class="col-md-7 col-6 text-end pe-0">
                                                        <a class="d-none d-sm-block" href="#">
                                                            <span class="main-color-one-color">به این پرسش پاسخ دهید (۱ پاسخ)</span>
                                                        </a><a class="d-sm-none d-block" href="#">پاسخ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row bs-qu">
                                            <div class="col-lg-2 bq1 text-center">
                                                <i class="bi bi-chat-dots-fill"></i>
                                                <br>
                                                <span class="span1">پاسخ</span>
                                                <br>
                                                <span class="span2">حسین زارع</span>
                                            </div>
                                            <div class="col-lg-10 bq2 bg-transparent">
                                                <p>درباره راه اندازی: (خیلی دربارش پرسیده بودند): اول:
                                                    بلوتوث گوشی خود
                                                    را
                                                    خاموش کنید.
                                                    دوم: لطفا
                                                    کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
                                                </p>
                                                <div class="row align-items-center bq-footer">
                                                    <div class="col-lg-5 col-12 my-flex-align-end">
                                            <span class="date">۲۲ مهر ۱۳۹۷
                                            </span>
                                                    </div>
                                                    <div class="col-lg-7 col-12 text-start p-0 ">
                                                        <div class="comments_likes">
                                                                    <span class="mr-4 mt-1">
                                                                        ایا این نظر برایتان مفید بود ؟
                                                                    </span>
                                                            <a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
                                                               href="#"><i
                                                                    class="bi bi-hand-thumbs-up"></i> 70</a>
                                                            <a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
                                                               href="#">
                                                                <i class="bi bi-hand-thumbs-down"></i> 7</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_questions mt-4">
                                        <div class="row bs-qu">
                                            <div class="col-lg-2 bq1 text-center">
                                                <i class="bi bi-question-circle-fill"></i>
                                                <br>
                                                <span class="span1">پرسش</span>
                                                <br>
                                                <span class="span2">فرزاد عباسقلی زاده</span>
                                            </div>
                                            <div class="col-lg-10 bq2">
                                                <p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

                                                <div class="row bq-footer">
                                                    <div class="col-md-5 col-6 my-flex-align-end">
                                            <span class="date"> ۱۶ مهر ۱۳۹۷
                                            </span>
                                                    </div>
                                                    <div class="col-md-7 col-6 text-end pe-0">
                                                        <a class="d-none d-sm-block" href="#">
                                                            <span class="main-color-one-color">به این پرسش پاسخ دهید (۱ پاسخ)</span>
                                                        </a><a class="d-sm-none d-block" href="#">پاسخ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row bs-qu">
                                            <div class="col-lg-2 bq1 text-center">
                                                <i class="bi bi-chat-dots-fill"></i>
                                                <br>
                                                <span class="span1">پاسخ</span>
                                                <br>
                                                <span class="span2">حسین زارع</span>
                                            </div>
                                            <div class="col-lg-10 bq2 bg-transparent">
                                                <p>درباره راه اندازی: (خیلی دربارش پرسیده بودند): اول:
                                                    بلوتوث گوشی خود
                                                    را
                                                    خاموش کنید.
                                                    دوم: لطفا
                                                    کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
                                                </p>
                                                <div class="row align-items-center bq-footer">
                                                    <div class="col-lg-5 col-12 my-flex-align-end">
                                            <span class="date">۲۲ مهر ۱۳۹۷
                                            </span>
                                                    </div>
                                                    <div class="col-lg-7 col-12 text-start p-0 ">
                                                        <div class="comments_likes">
                                                                    <span class="mr-4 mt-1">
                                                                        ایا این نظر برایتان مفید بود ؟
                                                                    </span>
                                                            <a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
                                                               href="#"><i
                                                                    class="bi bi-hand-thumbs-up"></i> 70</a>
                                                            <a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
                                                               href="#">
                                                                <i class="bi bi-hand-thumbs-down"></i> 7</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container mt-4">
                                        <div class="text-center">
                                            <a class="btn main-color-one-bg border-0" href="">بارگذاری کامنت
                                                ها</a>
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
                                    <div class="col-xl-3 d-xl-block d-none">
                                        <div class="position-sticky top-0">

                                        </div>
                                    </div>
                                </div>
                     </div>
</section>

<!--============ start floatings button ==============-->

<section class="float-btn fw-light fw-bolder py-0">
    <div class="container-fluid">
        <!-- go to top -->
        <div class="progress-wrap d-lg-block d-none">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <!-- end go to top -->

        <!-- contact us floating -->
        <div id="btncollapzion" class="btn_collapzion"></div>
        <div class="" id="contactOverlay"></div>
        <!-- end contact us floating -->
    </div>
</section>

<!--============ end floatings button ==============-->

<!--============ start mobile menu ==============-->

<div class="mobile-footer d-lg-none d-table justify-content-center shadow-box bg-white position-fixed bottom-0 p-2 w-100"
     style="z-index: 100;table-layout: fixed;">
    <ul class="d-table-row">
        <li class="d-table-cell pointer" onclick="topFunction()">
            <div class="mf-link nav-link text-center">
                <span class="d-block mf-link-icon"><i class="bi bi-chevron-up font-20"></i></span>
                <span class="mt-1 font-12 fw-bold mf-link-title">بالا</span>
            </div>
        </li>
        <li class="d-table-cell"><a href="" class="mf-link nav-link text-center">
                <div class="mf-link-icon position-relative d-table mx-auto">
                    <i class="bi bi-heart font-20"></i>
                    <span class="position-absolute main-color-one-bg rounded-pill font-10 text-white badge"
                          style="right:-40%;bottom:-5px;">0</span>
                </div>
                <span class="mt-1 font-12 fw-bold mf-link-title">علاقه مندی ها</span>
            </a></li>
        <li class="d-table-cell"><a href="" class="mf-link nav-link text-center">
                <span class="d-block mf-link-icon"><i class="bi bi-house font-20"></i></span>
                <span class="mt-1 font-12 fw-bold mf-link-title">صفحه اصلی</span>
            </a></li>
        <li class="d-table-cell"><a href="" class="mf-link nav-link text-center">
                <div class="position-relative mf-link-icon d-table mx-auto">
                    <span class="d-block mf-link-icon"><i class="bi bi-arrow-left-right font-20"></i></span>
                    <span class="position-absolute main-color-one-bg rounded-pill font-10 text-white badge"
                          style="right:-60%;bottom:-5px;">0</span>
                </div>
                <span class="mt-1 font-12 fw-bold mf-link-title">مقایسه</span>
            </a></li>
        <li class="d-table-cell"><a class="mf-link nav-link text-center" data-bs-toggle="offcanvas"
                                    href="#offcanvasCart" role="button" aria-controls="offcanvasCart">
                <div class="position-relative mf-link-icon d-table mx-auto">
                    <span class="d-block mf-link-icon"><i class="bi bi-bag font-20"></i></span>
                    <span class="position-absolute main-color-one-bg rounded-pill font-10 text-white badge"
                          style="right:-60%;bottom:-5px;">0</span>
                </div>
                <span class="mt-1 font-12 fw-bold mf-link-title">سبد خرید</span>
            </a></li>
    </ul>
</div>

<!--============ end mobile menu ==============-->


<!--============ start share modal ==============-->

<section class="share-modal py-0">
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">اشتراک گذاری</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="font-14 my-3">این کالا را با دوستان خود به اشتراک بگذارید!</h4>
                    <button type="button" class="btn my-3 btnCopy d-block text-center main-color-one-bg w-100"
                            id="liveToastBtn">
                        <i class="bi bi-clipboard text-white me-1"></i>
                        کپی کردن لینک
                    </button>
                    <div class=" mt-4N social-link justify-content-md-end justify-content-center">
                        <a href="" class="bi bi-instagram"></a>
                        <a href="" class="bi bi-twitter"></a>
                        <a href="" class="bi bi-whatsapp"></a>
                        <a href="" class="bi bi-youtube"></a>
                        <a href="" class="bi bi-linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--============ end share modal ==============-->

<!--============ start chart modal ==============-->

<section class="modal fade" id="chartModal" tabindex="-1" aria-labelledby="chartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-comment-title">
                    <h5 class="modal-title fw-bold text-muted-2">نمودار قیمت فروش
                    </h5>
                    <p class="text-muted mt-1 font-14">گوشی موبایل اپل مدل iPhone 11 تک سیم‌ کارت ظرفیت 128 گیگابایت
                        و رم 4 گیگابایت - هند
                    </p>
                </div>
                <button type="button" class="btn-close waves-effect waves-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect waves-light"
                        data-bs-dismiss="modal">بستن
                </button>
            </div>
        </div>
    </div>
</section>


<!--============ end chart modal ==============-->

@endsection



{% block js %}
<!-- These scripts are specific to this page   -->
<script src="assets/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/plugin/tagify/jQuery.tagify.min.js"></script>
<script src="assets/plugin/chartjs/chart.js"></script>

<!-- initial chart -->
<script>
    const ctx = document.getElementById('myChart');
    Chart.defaults.font.family = "payda";
    Chart.defaults.font.size = 16;


    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['23 مهر 1401', '11 آبان 1401', '4 آذر 1401', '11 دی 1401', '5 بهمن 1401',
                '19 اسفند 1401'
            ],
            datasets: [{
                label: 'iphone 12 promax 256',
                data: [1500000, 1700000, 1900000, 1400000, 1600000, 3200000],
                borderWidth: 4,
                borderColor: '#007fee',
                pointBackgroundColor: '#fff',
                pointRadius: 10,
                pointHoverRadius: 15,
                tension: 0.1,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: false,
                    text: () => 'نمودار فروش محصول: ' + 'ایفون 12 pro max',
                },
            }
        }
    });
</script>

<!-- initial tag for comment section -->
<script>
    $(document).ready(function () {
        $('.commentTags').tagify();
    });
</script>
{% endblock js %}

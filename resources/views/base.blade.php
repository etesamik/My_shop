
<!DOCTYPE html>
<html lang="fa_IR" dir="rtl">
<head>
    <meta charset="UTF-8">

    {{-- title block --}}
    @yield('title')

    <script src="{{ asset('js/script.js') }}"></script>

{{--    جنگوووووو--}}
{{--    <script src="{% static 'js/script.js' %}"></script>--}}

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('plugin/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/timer/timer.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{ asset('plugin/go-to-top/style.css') }}}">
    <link rel="stylesheet" href="{{ asset('plugin/rasta-contact/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">



    {{-- extra css --}}
    @yield('css')


</head>
<body>

<!--============ start header ==============-->

<header class="header">
    <div class="container-fluid">
        <div class="top-header">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-2 col-xl-2 col-6 order-lg-1 order-1">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center me-2">
                            <div class="responsive-menu d-lg-none d-block">
                                <button aria-controls="responsive menu" class="btn border-0 p-0 btn-responsive-menu"
                                        data-bs-target="#responsiveMenu" data-bs-toggle="offcanvas" type="button">
                                    <i class="bi bi-list font-30"></i>
                                </button>
                                <div aria-labelledby="responsive menu" class="offcanvas offcanvas-start"
                                     id="responsiveMenu" tabindex="-1">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasRightLabel">فروشگاه 3 بیت</h5>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas"
                                                type="button"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <a class="text-center top-header-logo d-block mb-3" href="">
                                            <img alt="" class="img-fluid" src="assets/image/logo.png">
                                        </a>
                                        <div class="header-bottom-form mb-4 w-100">
                                            <div class="search-form">
                                                <form action="" method="get">
                                                    <div class="search-filed">
                                                        <label class="d-block">
                                                            <input class="form-control search-input" name="q"
                                                                   placeholder="جستجوی محصولات ..." type="text">
                                                        </label>
                                                        <button class="btn search-btn main-color-two-bg rounded-pill"
                                                                type="submit"><i class="bi bi-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <ul class="rm-item-menu navbar-nav">
                                            <li class="nav-item bg-ul-f7"><a class="nav-link" href="/">صفحه
                                                    اصلی</a>
                                            </li>
                                            <li class="nav-item bg-ul-f7">
                                                <a class="nav-link" href="">گوشی موبایل</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="">برند</a>
                                                        <span class="showSubMenu"><i
                                                                class="bi bi-chevron-left"></i></span>
                                                        <ul class="navbar-nav h-0 bg-ul-f7">
                                                            <li class="nav-item"><a class="nav-link" href="">سامسونگ</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">هوآوی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">شیائومی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">الجی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">سونی</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="">بر اساس رده بندی</a>
                                                        <span class="showSubMenu"><i
                                                                class="bi bi-chevron-left"></i></span>
                                                        <ul class="navbar-nav h-0 bg-ul-f7">
                                                            <li class="nav-item"><a class="nav-link" href="">لمسی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">دکمه ای</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">نظامی</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item bg-ul-f7">
                                                <a class="nav-link" href="">تبلت</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="">کشور</a>
                                                        <span class="showSubMenu"><i
                                                                class="bi bi-chevron-left"></i></span>
                                                        <ul class="navbar-nav h-0 bg-ul-f7">
                                                            <li class="nav-item"><a class="nav-link" href="">ژاپن</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">کره
                                                                    جنوبی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="">آمریکایی</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="">بر اساس رده بندی</a>
                                                        <span class="showSubMenu"><i
                                                                class="bi bi-chevron-left"></i></span>
                                                        <ul class="navbar-nav h-0 bg-ul-f7">
                                                            <li class="nav-item"><a class="nav-link" href="">لمسی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">دانش
                                                                    آموزی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">مخصوص
                                                                    بازی</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item bg-ul-f7">
                                                <a class="nav-link" href="">لپتاپ</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="">برند</a>
                                                        <span class="showSubMenu"><i
                                                                class="bi bi-chevron-left"></i></span>
                                                        <ul class="navbar-nav h-0 bg-ul-f7">
                                                            <li class="nav-item"><a class="nav-link" href="">ایسر</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="">مایکروسافت</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">ایسوس</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">اپل</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">سونی</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="">بر اساس قیمت</a>
                                                        <span class="showSubMenu"><i
                                                                class="bi bi-chevron-left"></i></span>
                                                        <ul class="navbar-nav h-0 bg-ul-f7">
                                                            <li class="nav-item"><a class="nav-link" href="">ارزان</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">اقتصادی</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" href="">گران</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item bg-ul-f7">
                                                <a class="nav-link" href="">صفحات</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0">
                                                    <li><a href="/">صفحه اصلی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            محصول</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            دسته
                                                            بندی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه سبد
                                                            خرید</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            جستجو</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">دسته بندی
                                                            محصولات خطی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            404</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            ورود</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            ثبت
                                                            نام</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            فراموشی
                                                            رمز
                                                            عبور</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            وبلاگ</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            جزییات
                                                            وبلاگ</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">صفحه
                                                            مقایسه
                                                            محصول</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">پرداخت
                                                            مرحله
                                                            ای</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">پرداخت
                                                            موفق</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">پرداخت
                                                            ناموفق</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">محصول
                                                            ناموجود</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">سبد
                                                            خرید
                                                            خالی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">
                                                            داشبورد
                                                            کاربری</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">سفارشات</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">محصولات
                                                            مورد
                                                            علاقه</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">اطلاعیه</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">نظرات</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">آدرس
                                                            ها</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">آخرین
                                                            بازدید
                                                            ها</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top-header-logo">
                            <a href="/">
                                <img alt="" src="{{ asset('image/logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 order-lg-3 order-3 d-lg-block d-none">
                    <div class="search-form">
                        <form action="" method="get">
                            <div class="search-filed">
                                <label class="d-block">
                                    <input class="form-control search-input" placeholder="جستجوی محصولات ..."
                                           name="q" value="" type="text">
                                </label>
                                <button class="btn search-btn main-color-two-bg rounded-circle" type="submit"><i
                                        class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 col-6 order-lg-4 order-2">
                    <div class="top-header-link justify-content-end flex-wrap">
                        <div class="d-flex align-items-center top-header-call d-xl-flex d-none">
                            <div class="top-header-call-icon">
                                <i class="bi bi-telephone-forward text-white fs-5"></i>
                            </div>
                            <div class="top-header-call-title ms-3">
                                <p class="text-muted">پشتیبانی 24 ساعته</p>
                                <h6 class="text-center h5 pt-2">021-12345678</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center d-xl-none justify-content-end">
                            <div class="d-flex align-items-center justify-content-between top-header-call">
                                <div class="auth-link">

                                    @if(Auth::check())

                                    <div class="dropdown text-end">
                                        <a href="" data-bs-toggle="dropdown" aria-expanded="false" role="button"
                                           class="btn btn-white auth-dropdown header-register border-0">
                                            <div class="d-flex align-items-center">
                                                <figure class="avatar">
                                                    <img src="" alt="user profile_img">
                                                </figure>
                                                <span class="ms-3 d-md-block d-none font-18"><i
                                                        class="bi bi-chevron-down arrow-auth font-12 ms-2"></i></span>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu flex-column" style="min-width: 250px;">
                                            <li class="w-100"><a href="" class="dropdown-item fs-6"><i
                                                        class="bi bi-house-door me-2"></i>پروفایل</a>
                                            </li>
                                            <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                        class="bi bi-cart-check me-2"></i>سفارش های
                                                    من</a></li>
                                            <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                        class="bi bi-pin-map me-2"></i>آدرس های
                                                    من</a></li>
                                            <!-- <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                    class="bi bi-bell me-2"></i>پیام ها و
                                                اطلاعیه ها</a></li>
                                            <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                    class="bi bi-chat-dots me-2"></i>نظرات
                                                من</a></li>
                                            <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                    class="bi bi-question-circle me-2"></i>درخواست
                                                پشتیبانی</a></li>
                                            <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                    class="bi bi-heart me-2"></i>محصولات مورد
                                                علاقه</a></li>
                                            <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                    class="bi bi-gift me-2"></i>کد های تخفیف
                                                من</a></li> -->
                                            <li class="w-100"><a href="{{route('logout')}}" class="dropdown-item fs-6 py-2 mct-hover"><i
                                                        class="bi bi-arrow-right-square me-2"></i>خروج از حساب کاربری</a>
                                            </li>
                                        </ul>
                                    </div>
                                    @else
                                    <a href="{{route('show.login')}}" class="auth-btn">
                                        <i class="bi bi-person"></i>
                                        <span class="fw-bold d-sm-inline-block d-none">ورود / عضویت</span>
                                    </a>

                                    @endif

                                </div>
                                <div class="cart-button ms-3">
                                    <a class="d-flex align-items-center h-100" data-bs-toggle="offcanvas"
                                       href="#offcanvasCart" role="button" aria-controls="offcanvasCart">
                                        <i class="bi bi-cart w-40-px h-40-px lh-40-px main-color-one-bg no-hover d-inline-block rounded-start cart-btn text-center"></i>
                                        <span class="d-sm-block d-none main-color-two-bg h-40-px lh-40-px px-2 no-hover rounded-end">20 میلیون تومان</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--============ end header ==============-->


<!--============ start mega menu ==============-->

<div class="mega-menu menu mega-menu-top pt-1 d-lg-block d-none">
    <div class="container-fluid">
        <div class="top-menu-parent">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-8">
                    <div class="top-menu-menu">
                        <ul class="navbar-nav align-items-center">
                            <li class="position-relative m-0"></li>
                            <li class="nav-item main-menu-head"><a
                                    class="nav-link border-animate fromCenter btn nav-active fw-bold" href="">
                                    <i class="bi bi-grid"></i>
                                    مگا تب منو
                                </a>
                                <ul class="main-menu mega-container">
                                    <li class=""><a href=""><i class="bi bi-phone"></i>
                                            کابل ها</a>
                                        <ul class="main-menu-sub back-menu"
                                            style=" background: #fff url('{{ asset('image/mobiles.png') }}') no-repeat;">
                                            <-- <li><a class="title my-flex-baseline" href="">انواع کابل</a> -->
                                            </li>
                                            <li><a href="">تایپ C</a></li>
                                            <li><a href="">کابل POS</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href=""><i class="bi bi-tablet"></i> تجهیزات شبکه</a>
                                        <ul class="main-menu-sub back-menu"
                                            style=" background: #fff url('{{asset('image/mobiles.png')}}') no-repeat;">
                                            <li class=""><a class="title my-flex-baseline" href="">برند های مختلف
                                                    مودم</a>
                                            </li>
                                            <li><a href="">HUAWEI</a></li>
                                        </ul>
                                    </li>


                                    <!-- <li class=""><a href=""><i class="bi bi-tag"></i>پر فروش ترین ها</a>
                                        <ul class="main-menu-sub back-menu"
                                            style=" background: #fff url('assets/image/top-sales.jpeg') no-repeat;">
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 </a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 </a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 </a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 </a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link border-animate fromCenter" href="">
                                    <i class="bi bi-tablet"></i>
                                    مگا لیست منو
                                </a>
                                <ul class="list-unstyled shadow-lg back-menu sub-menu mega-container"
                                    style="background: #fff url('{{asset('image/banner-11.jpg')}}') no-repeat;background-size: 400px !important;">
                                    <li><a class="title" href="">بـرند</a></li>
                                    <li><a href="">سامـسونگ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link border-animate fromCenter" href=""><i
                                        class="bi bi-menu-app"></i>منو ساده</a>
                                <ul class="level-one">
                                    <li><a href="">کابل</a></li>
                                    <li><a href="">مودم</a></li>
                                    <li class="position-relative"><a href=""> موبایل <i
                                                class="bi bi-chevron-left"></i></a>
                                        <ul class="level-two">
                                            <li><a href="">سامسونگ</a></li>
                                            <li><a href="">اپل </a></li>
                                            <li><a href="">شیائومی</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">لپ تاپ</a></li>
                                    <li><a href="">سوییچ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-animate fromCenter" href="">
                                    <i class="bi bi-tag"></i>تخفیف ها و پیشنهاد ها
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link border-animate fromCenter" href="">
                                    <i class="bi bi-question-octagon"></i>
                                    سوالی
                                    دارید</a>
                            </li>
                            <li class="nav-item"><a class="nav-link border-animate fromCenter" href="">
                                    <i class="bi bi-bag-heart"></i>
                                    در 3 بیت
                                    بفروشید</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="d-flex align-items-center justify-content-between top-header-call d-xl-flex d-none">


                            @if(Auth::check())
                            <div class="dropdown text-end">
                                <a href="" data-bs-toggle="dropdown" aria-expanded="false" role="button"
                                   class="btn btn-white auth-dropdown header-register border-0">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar">
                                            <img src="" alt="amirRezae">
                                        </figure>
                                        <span class="ms-3 font-18 ms-3 d-md-block d-none font-18"> <i
                                                class="bi bi-chevron-down arrow-auth font-12 ms-2"></i></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu flex-column" style="min-width: 250px;">
                                    <li class="w-100"><a href="" class="dropdown-item fs-6"><i
                                                class="bi bi-house-door me-2"></i>پروفایل</a>
                                    </li>
                                    <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                class="bi bi-cart-check me-2"></i>سفارش های
                                            من</a></li>
                                    <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                                class="bi bi-pin-map me-2"></i>آدرس های
                                            من</a></li>
                                    <!-- <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                            class="bi bi-bell me-2"></i>پیام ها و
                                        اطلاعیه ها</a></li>
                                    <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                            class="bi bi-chat-dots me-2"></i>نظرات
                                        من</a></li> -->
                                    <!-- <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                            class="bi bi-question-circle me-2"></i>درخواست
                                        پشتیبانی</a></li> -->
                                    <!-- <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                            class="bi bi-heart me-2"></i>محصولات مورد
                                        علاقه</a></li> -->
                                    <!-- <li class="w-100"><a href="" class="dropdown-item fs-6 py-2"><i
                                            class="bi bi-gift me-2"></i>کد های تخفیف
                                        من</a></li> -->
                                    <li class="w-100"><a href="{{route('logout')}}" class="dropdown-item fs-6 py-2 mct-hover"><i
                                                class="bi bi-arrow-right-square me-2"></i>خروج از حساب کاربری</a></li>
                                </ul>
                            </div>
                            @else
                            <div class="auth-link">
                                <a href="{{route('show.login')}}">
                                    <i class="bi bi-person"></i>
                                    <span class="fw-bold">ورود / عضویت</span>
                                </a>
                            </div>
                            @endif

                            <div class="cart-button ms-3">
                                <a class="d-flex align-items-center h-100" data-bs-toggle="offcanvas"
                                   href="#offcanvasCart" role="button" aria-controls="offcanvasCart">
                                    <i class="bi bi-cart w-40-px h-40-px lh-40-px main-color-one-bg no-hover d-inline-block rounded-start text-center"></i>
                                    <span class="d-block main-color-two-bg h-40-px lh-40-px px-2 no-hover rounded-end">
                                        {{ number_format(array_sum(array_map(function($item) {
                        return $item['price'] * $item['quantity'];
                    }, $cart_items))) }} تومان
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--============ end mega menu ==============-->

<!--============ start main content ==============-->


@yield('content')


<!--============ end main content ==============-->


<!--============ start footer   ==============-->

<footer class="footer">
    <div class="container-fluid">
        <div class="footer-contact">
            <div class="row gy-2">
                <div class="col-4">
                    <div class="footer-contact-image">
                        <a href="">
                            <img src="{{asset('image/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="text-end">
                        <a href="#" class="go-to-top btn border border-dark" onclick="topFunction()">بازگشت به بالا <i
                                class="bi bi-chevron-up font-14 ms-2"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="footer-contact-call">
                        <nav class="navbar navbar-expand">
                            <ul class="navbar-nav flex-wrap">
                                <li class="nav-item"><a href="" class="nav-link"><span
                                            class="fw-bold">شماره  تماس:</span> 12345678-021</a></li>
                                <li class="nav-item"><a href="" class="nav-link"><span class="fw-bold">ایمیل : </span>
                                        site@gmail.com</a></li>
                                <li class="nav-item"><span class="nav-link"> هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.</span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-col">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6 w-100-in-400">
                    <div class="footer-col-item">
                        <nav class="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item"><span class="nav-link font-16 f-800">راهنمای خرید</span></li>
                                <li class="nav-item"><a href="" class="nav-link">نحوه ثبت سفارش</a></li>
                                <li class="nav-item"><a href="" class="nav-link">رویه ارسال سفارش</a></li>
                                <li class="nav-item"><a href="" class="nav-link">شیوه های پرداخت</a></li>
                                <li class="nav-item"><a href="" class="nav-link">رویه های بازگرداندن کالا</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 w-100-in-400">
                    <div class="footer-col-item">
                        <nav class="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item"><span class="nav-link font-16 f-800">با 3 بیت</span></li>
                                <li class="nav-item"><a href="" class="nav-link">حریم خصوصی</a></li>
                                <li class="nav-item"><a href="" class="nav-link">شرایط استفاده</a></li>
                                <li class="nav-item"><a href="" class="nav-link">رویه های بازگردندان کالا</a></li>
                                <li class="nav-item"><a href="" class="nav-link">پاسخ به پرسش های متداول</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 w-100-in-400">
                    <div class="footer-col-item">
                        <nav class="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item"><span class="nav-link font-16 f-800">باشگاه مشتریان</span></li>
                                <li class="nav-item"><a href="" class="nav-link">اتاق خبر</a></li>
                                <li class="nav-item"><a href="" class="nav-link">فروش در 3 بیت</a></li>
                                <li class="nav-item"><a href="" class="nav-link">فرصت های شغلی</a></li>
                                <li class="nav-item"><a href="" class="nav-link">تماس با ما</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 w-100-in-400">
                    <div class="footer-col-item">
                        <span class="nav-link font-16 f-800 title-col-social">رسانه های خبری ما</span>
                        <div class="social-link">
                            <a href="" class="bi bi-instagram"></a>
                            <a href="" class="bi bi-twitter"></a>
                            <a href="" class="bi bi-whatsapp"></a>
                            <a href="" class="bi bi-youtube"></a>
                            <a href="" class="bi bi-linkedin"></a>
                        </div>
                        <div class="footer-form title-col-social">
                            <h6 class="my-4">در خبرنامه پر تخفیف ما عضو شوید</h6>
                            <form action="">
                                <div class="d-flex">
                                    <label>
                                        <input type="email" name="rss" class="form-control text-start"
                                               placeholder="آدرس ایمیل خود را وارد کنید">
                                    </label>
                                    <button class="btn main-color-one-bg border-0 ms-1" type="submit">ثبت</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-description">
            <div class="row align-items-center gy-3">
                <div class="col-lg-8">
                    <h5 class="mb-3">فروشگاه اینترنتی 3 بیت ، بررسی انتخاب و خرید آنلاین</h5>
                    <p class="text-muted font-14">یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع،
                        باکیفیت و دارای قیمت مناسب را در مدت زمانی کوتاه به دست مشتریان خود برساند و ضمانت بازگشت کالا
                        هم داشته باشد؛ ویژگی‌هایی که فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کرده و توانسته
                        از این طریق مشتریان ثابت خود را داشته باشد</p>
                </div>
                <div class="col-lg-4">
                    <nav class="navbar navbar-expand justify-content-lg-end justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="" class="nav-link"><img src="{{asset('image/namad/rezi.png')}}"
                                                                                  class="img-thumbnail" alt=""></a></li>
                            <li class="nav-item"><a href="" class="nav-link"><img src="{{asset('image/namad/enamad.png')}}"
                                                                                  class="img-thumbnail" alt=""></a></li>
                        </ul>
                    </nav>1
                </div>
            </div>
        </div>
        <div class="footer-copyright mt-3">
            <div class="row gy-3">
                <div class="col-lg-9">
                    <p class="text-muted font-14"> استفاده از مطالب فروشگاه اینترنتی 3 بیت برای مقاصد غیرتجاری و با
                        ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به 3 بیت می‌باشد. </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-muted font-14 text-end">Copyright © 2024 - 2025 alireza mhraban</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--============ end footer   ==============-->

<!--============ start cart drawer ==============-->

<section class="offcanvas offcanvas-end py-2" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header shadow-md">
        <h5 class="offcanvas-title fw-bold" id="offcanvasCartLabel">سبد خرید <small
                class="text-muted fw-bold font-14 ms-1"></small></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav cart-canvas-parent">
            @if(count($cart_items))
                @foreach($cart_items as $id => $item)
            <li class="nav-item">
                <div class="cart-canvas">
                    <div class="row align-items-center">
                        <div class="col-4 ps-0">
                            <img src="{{ isset($item['image']) ? asset( $item['image']) : asset('images/default.png') }}" alt="{{ $item['name'] }}">

                        </div>
                        <div class="col-8">
                            <h3 class="text-overflow-3 font-16">{{ $item['name'] }}</h3>
                            <div class="product-box-suggest-price my-2 d-flex align-items-center justify-content-between">
                                <ins class="font-25 w-100 text-end">
                                    <span>{{ number_format($item['price']) }} تومان</span></ins>
                            </div>
                            <div class="cart-canvas-foot d-flex align-items-center justify-content-between">
                                <div class="cart-canvas-count">
                                    <span>تعداد:</span>
                                    <span class="fw-bold">{{ $item['quantity'] }}</span>
                                </div>
                                <div class="cart-canvas-delete">
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" title="Remove from cart">
                                            <i class="bi bi-x"></i>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
                @endforeach
            @else

            <li class="nav-item">
                <div class="cart-canvas text-center">
                    <p class="font-16 text-muted">سبد خرید شما خالی است</p>
                </div>
            </li>
            @endif
        </ul>


        <div class="cart-canvas-foots bg-white shadow-md">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="cart-canvas-foot-sum">
                        <p class="text-muted mb-2">جمع کل</p>
                        <h5>{{ number_format(array_sum(array_map(function($item) {
                        return $item['price'] * $item['quantity'];
                    }, $cart_items))) }} تومان</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="cart-canvas-foot-link text-end">
                        <a href="{{ route('success') }}" class="btn border-0 main-color-green "><i
                                class="bi bi-arrow-left me-1"></i> تکمیل خرید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--============ end cart drawer ==============-->

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
        <li class="d-table-cell"><a href="/" class="mf-link nav-link text-center">
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
                          style="right:-60%;bottom:-5px;"></span>

                </div>
                <span class="mt-1 font-12 fw-bold mf-link-title">سبد خرید</span>
            </a></li>
    </ul>
</div>

<!--============ end mobile menu ==============-->

<script src="{{asset('js/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle-5.3.2.min.js')}}"></script>
<script src="{{asset('plugin/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('plugin/timer/timer.js')}}"></script>
<script src="{{asset('plugin/go-to-top/script.js')}}"></script>
<script src="{{asset('plugin/rasta-contact/script.js')}}"></script>
<script src="{{asset('js/swiperInit.js')}}"></script>
<script src="{{asset('js/megaMenu.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="{{asset('js/app.js')}}"></script>

<!-- These scripts are specific to this page   -->
<script src="{{asset('plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

<!-- initial counter product for product add to cart section -->
<!-- TouchSpin initialization -->
<script>
    $(document).ready(function () {
        $("input[name='count']").TouchSpin({
            min: 1,
            max: '1000000000000000',
            buttondown_class: "btn-counter waves-effect waves-light",
            buttonup_class: "btn-counter waves-effect waves-light"
        });
    });
</script>

<!-- Toast notifications -->
<script>
    function showToast(message, type) {
        Toastify({
            text: message,
            duration: 4000,
            close: true,
            gravity: "top",
            position: 'right',
            backgroundColor: type === 'success' ? '#198754' : '#dc3545',
            stopOnFocus: true
        }).showToast();
    }

    // Render messages from Laravel session
    @php
        $allMessages = [];
        if(session('success')) $allMessages[] = ['message' => session('success'), 'tags' => 'success'];
        if(session('error')) $allMessages[] = ['message' => session('error'), 'tags' => 'error'];
    @endphp

    const messages = @json($allMessages);

    messages.forEach(msg => {
        showToast(msg.message, msg.tags);
    });
</script>

{{-- Section for page-specific JS --}}
@yield('js')

{{-- Section for extra JS if needed --}}
@yield('extra_js')

</body>
</html>

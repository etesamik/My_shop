@extends('base')

@section('title', "order")
@section('content')
<!--============ start main content ==============-->

<section class="content">
    <div class="container-fluid">
        <div class="payment_navigtions">
            <div class="checkout-headers">
                <nav class="navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('cart.show')}}" class="nav-link">
                                <span>1</span>
                                <p>سبد خرید</p>
                            </a>
                        </li>
                        <li class="nav-item active">
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
        </div>
    </div>

    <form action="{{route('cart.checkout.save')}}" method="post">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="content-box">
                        <div class="detail-order mb-4">
                            <div class="detail-order-item d-flex align-items-center">
                                <h6><i class="bi bi-pin-map-fill me-1"></i> آدرس تحویل:</h6>
                                <span class="ms-2 text-muted">  {{ $selectedAddress->address ?? $firstAddress->address ?? 'آدرس ثبت نشده' }}
</span>
                                <input type="hidden" name="address" value="{{ $firstAddress->id ?? null }}">

                            </div>
                            <div class="detail-order-item mt-3 d-flex align-items-center">
                                <h6><i class="bi bi-person-fill me-1"></i>تحویل گیرنده:</h6>
                                <span class="ms-2 text-muted">{{$fullName}}</span>
                            </div>
                            <div class="detail-order-item mt-3 d-flex align-items-center">
                                <h6><i class="bi bi-telephone-fill me-1"></i>شماره تماس:</h6>
                                <span class="ms-2 text-muted">{{$selectedAddress->phone ?? $firstAddress->name ?? null}}</span>
                            </div>
                            <a href="{{route('show.addresses')}}" class="btn mt-3 btn-dark btn-sm">ویرایش</a>
                        </div>
                        <div class="cart-product-item my-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="cart-items border-end">

                                        <div class="item">
                                            @foreach($cartItems as $cart_pro)
                                            <div class="image text-start">
                                                <img src="{{asset($cart_pro->product->primary_image)}}" alt=""
                                                     class="img-fluid d-inline-block w-100-px">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-md-start align-items-end flex-wrap">
                                                <div class="d-flex align-items-start flex-column me-2">
                                                    <div class="cart-item-feature d-flex flex-column align-items-start flex-wrap mt-3">
                                                        <!-- <div class="item d-flex align-items-center">
                                                            <div class="icon"><i class="bi bi-palette"></i></div>
                                                            <div class="saller-name mx-2">رنگ:</div>
                                                            <div class="saller-name text-muted">قرمز</div>
                                                        </div> -->
                                                        <div class="item d-flex align-items-center">

                                                            <div class="saller-name mx-2">"{{$cart_pro->product->slug}}"</div>

                                                        </div>
                                                        <div class="item d-flex align-items-center mt-2">

                                                            <div class="icon"><i class="bi bi-shield-check"></i>
                                                            </div>

                                                            <div class="saller-name mx-2">گارانتی:</div>
                                                            <div class="saller-name text-muted">ایران موبایل</div>
                                                        </div>
                                                        <div class="item d-flex align-items-center mt-3">
                                                            <div class="counter">
                                                                <label>
                                                                    <input type="text" name="count" class="counter"
                                                                           value="{{$cart_pro->quantity}}">
                                                                </label>
                                                            </div>
                                                            <div class="remove danger-label ms-3">
                                                                <a href="" class="">
                                                                    <i class="bi bi-trash-fill"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="slider-title-desc mb-4">
                            <div class="slider-title-title">
                                <h2 class="h4 icon-circle">تاریخ<span class="main-color-one-color fw-bold"> ارسال </span>
                                </h2>
                            </div>
                        </div>
                        <div class="text-start">
                            <div class="image-selector">
                                <nav class="navbar navbar-expand">
                                    <ul class="navbar-nav">
                                        @foreach($deliveryDates as $day)
                                        <li class="nav-item">
                                            <input type="radio" name="delivery_date" id="{{ $day['id'] }}" value="{{ $day['value'] }}" {{ $loop->first ? 'checked' : '' }}>

                                            <label for="{{ $day['id'] }}" class="d-inline-block border border-2">
                                                <span class="send-item  {{ $loop->first ? 'active' : '' }}">
                                                <span class="d-block fw-bold h6 text-center">{{ $day['label'] }}</span>
                                                <span class="font-14 d-block text-center mt-1 mb-0 text-muted">{{ $day['full_date'] }}</span>
                                                </span>
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="show-discount-modal pointer py-3 my-3" data-bs-toggle="modal"
                             data-bs-target="#discountModal">
                            <div class="slider-title-desc mb-4">
                                <div class="slider-title-title">
                                    <h2 class="h4 icon-circle">کد<span class="main-color-one-color fw-bold"> تخفیف </span>
                                    </h2>
                                </div>
                            </div>
                            <i class="bi bi-patch-exclamation main-color-one-color me-2" style="font-size: 40px;"></i>
                            کوپن تخفیف دارید برای نوشتن کد اینجا کلیک
                            کنید
                        </div>
                        <div class="text-start">
                            <div class="slider-title-desc mb-4">
                                <div class="slider-title-title">
                                    <h2 class="h4 icon-circle">شیوه<span
                                            class="main-color-one-color fw-bold"> پرداخت </span></h2>
                                </div>
                            </div>
                            <div class="image-selector">
                                <nav class="navbar navbar-expand">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><input type="radio" name="payment_method" value="online" checked id="cb22">
                                            <label for="cb22" class="d-inline-block border border-2">
                                                        <span class="send-item active">
                                                            <span class=" d-block fw-bold h6 text-center">پرداخت مستقیم</span>
                                                        </span>
                                            </label>
                                        </li>
                                        <li class="nav-item"><input type="radio" name="payment_method" value="cod" id="cb33">
                                            <label for="cb33" class="d-inline-block border border-2">
                                                        <span class="send-item">
                                                            <span class=" d-block fw-bold h6 text-center">پرداخت هنگام دریافت</span>
                                                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="slider-title-desc mb-4">
                            <div class="slider-title-title">
                                <h2 class="h4 icon-circle">
                                    انتخاب<span class="main-color-one-color fw-bold"> درگاه </span>
                                </h2>
                            </div>
                        </div>

                        <div class="delivary-payment-bank mt-3 flex-wrap d-flex align-items-center">
                            <div class="image-selector">
                                <nav class="navbar navbar-expand">
                                    <ul class="navbar-nav">

                                        <li class="nav-item">
                                            <input type="radio" name="payment_gateway" id="meli" value="meli">
                                            <label for="meli">
                                                <img src="{{asset('image/bank/bank-meli.png')}}" alt="بانک ملی">
                                            </label>
                                        </li>

                                        <li class="nav-item">
                                            <input type="radio" name="payment_gateway" id="mellat" value="mellat">
                                            <label for="mellat">
                                                <img src="{{asset('image/bank/bank-mellat.png')}}" alt="بانک ملت">
                                            </label>
                                        </li>

                                        <li class="nav-item">
                                            <input type="radio" name="payment_gateway" id="saderat" value="saderat">
                                            <label for="saderat">
                                                <img src="{{asset('image/bank/bank-saderat.png')}}" alt="بانک صادرات">
                                            </label>
                                        </li>

                                        <li class="nav-item">
                                            <input type="radio" name="payment_gateway" id="saman" value="saman">
                                            <label for="saman">
                                                <img src="{{asset('image/bank/bank-saman.png')}}" alt="بانک سامان">
                                            </label>
                                        </li>

                                        <li class="nav-item">
                                            <input type="radio" name="payment_gateway" id="sepah" value="sepah">
                                            <label for="sepah">
                                                <img src="{{asset('image/bank/bank-sepah.png')}}" alt="بانک سپه">
                                            </label>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cart-canvases position-sticky top-0">
                        <div class="item">
                            <div class="factor">
                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">قیمت کالا ها</h5>
                                    <p class="mb-0 font-17">{{number_format($real_price)}} تومان</p>
                                </div>

                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">تخفیف کالا ها</h5>
                                    <p class="mb-0 font-18">{{number_format($discounted_price)}} تومان</p>
                                </div>

                                <div class="d-flex factor-item flex-column mb-3 align-items-start justify-content-between">
                                    <h5 class="title-font mb-0 h6">حمل و نقل</h5>

                                    <div class="form-check mt-3">
                                        <input type="radio" checked class="form-check-input" name="delivery_type" value="private"
                                               id="post-1">
                                        <label for="post-1" class="form-check-label">
                                            پیک موتوری اختصاصی (کمتر از 5 ساعت): 80,000 تومان
                                        </label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input type="radio" class="form-check-input" name="delivery_type" value="public" id="post-2">
                                        <label for="post-2" class="form-check-label">
                                            پیک عمومی مهیار (2 تا 3 روز کاری): 50,000 تومان

                                        </label>
                                    </div>

                                </div>

                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">مجموع</h5>
                                    <p class="mb-0 font-18">{{number_format($totalPrice)}}  تومان</p>
                                </div>

                                <div class="action mt-3 d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn main-color-one-bg py-2 rounded-pill rounded-3 d-block w-100">
                                        پرداخت
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<!--============ end main content ==============-->




<!--============ start modal discount ==============-->


<div class="discount-modal">
    <div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">کد تخفیف</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="font-16 mb-3">
                        اگر شما کد تخفیف دارید ، برای ثبت آن از طریق زیر اقدام کنید.
                    </h4>
                    <form action="">
                        <div class="form-group">
                            <label for="discount" class="form-label">کد تخفیف:</label>
                            <input type="text" class="form-control" placeholder="برای مثال eyd1402"
                                   id="discount">
                        </div>
                        <button class="btn main-color-two-bg">ثبت کد
                            تخفیف
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--============ end modal discount ==============-->


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

<script src="assets/js/modernizr-3.11.2.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle-5.3.2.min.js"></script>
<script src="assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="assets/plugin/timer/timer.js"></script>
<script src="assets/plugin/go-to-top/script.js"></script>
<script src="assets/plugin/rasta-contact/script.js"></script>
<script src="assets/js/swiperInit.js"></script>
<script src="assets/js/megaMenu.js"></script>
<script src="assets/js/app.js"></script>

<!-- initial config contact button  -->
<script>
    $('#btncollapzion').Collapzion({
        _child_attribute: [{
            'label': 'پشتیبانی تلفنی',
            'url': 'tel:0930555555555',
            'icon': 'bi bi-telephone'
        },
            {
                'label': 'پشتیبانی تلگرام',
                'url': 'https://tlgrm.me',
                'icon': 'bi bi-telegram'
            },
            {
                'label': 'پشتیبانی واتس آپ',
                'url': 'https://wa.me/444444444',
                'icon': 'bi-whatsapp'
            },

        ],
    });
</script>

<!-- These scripts are specific to this page   -->
<script src="assets/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

<!-- initial counter product for product add to cart section -->
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

@endsection

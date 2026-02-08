@extends('base')

@section('title', "کارت خالی")


@section('contect')
<!DOCTYPE html>
<body>

<!--============ start main content ==============-->

<section class="content">
    <div class="container-fluid">
        <div class="content-box">
            <div class="text-center">
                <img src="{{asset('image/cart/empty.svg')}}" class="cart-empty-image" alt="">
                <h5 class="text-center mt-5 h2 mt-3">سبد خرید شما خالی است</h5>
                <a href="/" class="btn mt-3 main-color-one-bg">رفتن به فروشگاه</a>
            </div>
        </div>
    </div>
</section>

<!--============ end main content ==============-->

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

<script src="{{asset('js/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle-5.3.2.min.js')}}"></script>
<script src="{{asset('plugin/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('plugin/timer/timer.js')}}"></script>
<script src="{{asset('plugin/go-to-top/script.js')}}"></script>
<script src="{{asset('plugin/rasta-contact/script.js')}}"></script>
<script src="{{asset('js/swiperInit.js')}}"></script>
<script src="{{asset('js/megaMenu.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

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

</body>

@endsection

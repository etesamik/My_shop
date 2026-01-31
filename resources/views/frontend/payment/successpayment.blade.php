@extends('base')
@section('title', 'صفحه پرداخت موفق')


@section('content')
<!--============ start main content ==============-->

<section class="content">
    <div class="container-fluid">
        <div class="payment_navigtions">
            <div class="checkout-headers">
                <nav class="navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>1</span>
                                <p>سبد خرید</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <span>2</span>
                                <p>صورتحساب</p>
                            </a>
                        </li>
                        <li class="nav-item active">
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
    <div class="container-fluid">
        <div class="content-box">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="payment">
                        <div class="payment-icon">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div class="payment-title">
                            <h5 class="title-font">پرداخت با موفقیت انجام شد</h5>
                            <p class="text-muted font-18 my-3">جزییات تراکنش</p>
                        </div>
                        <div class="payment-detail">
                            <div class="payment-detail-item">
                                <h6 class="text-muted h5 fw-light">تاریخ و زمان</h6>
                                <h5>        </h5>
                            </div>
                            <div class="payment-detail-item">
                                <h6 class="text-muted h5 fw-light">وضعیت</h6>
                                <h5 class="success-label">پرداخت موفق</h5>
                            </div>
                            <div class="payment-detail-item">
                                <h6 class="text-muted h5 fw-light">شماره پیگیری</h6>
                                <h5>          </h5>
                            </div>
                            <div class="payment-detail-item">
                                <h6 class="text-muted h5 fw-light">نوع عملیات</h6>
                                <h5>         </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============ end main content ==============-->

@endsection

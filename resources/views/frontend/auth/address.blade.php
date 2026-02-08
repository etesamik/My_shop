@extends('base')

@section('title', 'آدرس ها')

@section('content')
<!--============ start main content ==============-->

<section class="content">
    <div class="container-fluid">
        <div class="content">
            <div class="row">
{{--                <div class="col-xl-3">--}}
{{--                    <!--   start dashboard menu mobile  -->--}}
{{--                    <div class="custom-filter d-xl-none d-block">--}}
{{--                        <button class="btn btn-filter-float border-0 btn-dark shadow-box px-4 rounded-3 position-fixed"--}}
{{--                                style="z-index: 999;bottom:75px;" type="button" data-bs-toggle="offcanvas"--}}
{{--                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">--}}
{{--                            <i class="bi bi-funnel font-20 fw-bold text-white"></i>--}}
{{--                            <span class="d-block font-14 text-white">منو</span>--}}
{{--                        </button>--}}
{{--                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"--}}
{{--                             aria-labelledby="offcanvasRightLabel">--}}
{{--                            <div class="offcanvas-header">--}}
{{--                                <h5 class="offcanvas-title" id="offcanvasRightLabel1">منو</h5>--}}
{{--                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"--}}
{{--                                        aria-label="Close"></button>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
                <div class="col-xl-9">
                    <div class="row gy-4 align-items-center">
                        <div class="col-6">
                            <div class="section-title-title">
                                <h2 class="fw-900 h4">آدرس های<span class="with-highlight ms-1">ثبت شده</span>
                                </h2>
                                <div class="Dottedsquare"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <a data-bs-toggle="modal" data-bs-target="#editModal" href=""
                                   class="btn main-color-one-bg rounded-3 btn-action-panel"><i
                                        class="bi bi-pencil-square me-2"></i>ثبت آدرس</a>
                            </div>
                        </div>
                    </div>
                    <div class="content mt-4">
                        <div class="slider-parent rounded-4 border-ui content-box">
                            <div class="container-fluid">

                                <div class="orders">

                                    @foreach($user_addresses as $user_address)
                                    <div class="order-item mb-4 border-bottom pb-3">
                                        <div class="order-item-status flex-nowrap">
                                            <div class="order-item-status-item">
                                                <p>{{ $user_address->address }}
                                                </p>
                                            </div>
                                            <div class="order-item-status-item dropd-status">
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink-2"
                                                       data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical text-dark fs-5"></i>
                                                    </a>

                                                    <ul class="dropdown-menu flex-column"
                                                        aria-labelledby="dropdownMenuLink-2" >
                                                        <li>
                                                            <a class="dropdown-item edit-address-btn" href="#"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#editModal"
                                                               data-id="{{ $user_address->id}}"
                                                               data-full_name="{{ $user_address->name}}"
                                                               data-postalcode="{{ $user_address->postal_code }}"
                                                               data-address_line="{{ $user_address->address }}"
                                                               data-province="{{$user_address->province}}"
                                                               data-city="{{$user_address->city}}"
                                                               data-phone="{{$user_address->phone}}">
                                                                <i class="bi bi-pencil"></i>
                                                                ویرایش
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form method="post" action="{{route("remove.addresses" , $user_address->id )}}"
                                                                  onsubmit="return confirm('آیا از حذف این آدرس مطمئن هستید؟');" style="display: inline;">
                                                                @csrf
                                                                <input type="hidden" name="address_id" value="{{ $user_address->id}}">
                                                                <button type="submit" class="dropdown-item bg-transparent border-0 text-start w-100" style="font-size: 14px;">
                                                                    <i class="bi bi-trash text-danger"></i> حذف
                                                                </button>
                                                            </form>
                                                        </li>
                                                        <form method="post" action="{{route('select.address')}}" style="display: inline;">
                                                            @csrf
                                                            <input type="hidden" name="selected_address_id" value="{{ $user_address->id}}" style="font-size: 14px;">
                                                            <button type="submit" class="dropdown-item bg-transparent border-0 text-start w-100">
                                                                <i class="bi bi-check-circle text-success"></i>
                                                                انتخاب این آدرس
                                                            </button>
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-item-detail border-0">
                                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="d-flex flex-column">
                                                    <div class="text-muted d-flex align-items-center mb-2">
                                                        <i class="bi bi-pin-map me-2"></i>
                                                        <p>{{$user_address->city}}</p>
                                                    </div>
                                                    <div class="text-muted d-flex align-items-center mb-2">
                                                        <i class="bi bi-envelope me-2"></i>
                                                        <p>{{$user_address->postal_code}}</p>
                                                    </div>
                                                    <div class="text-muted d-flex align-items-center mb-2">
                                                        <i class="bi bi-phone me-2"></i>
                                                        <p>{{$user_address->phone}}</p>
                                                    </div>
                                                    <div class="text-muted d-flex align-items-center mb-2">
                                                        <i class="bi bi-person me-2"></i>
                                                        <p>{{$user_address->name}}</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('image/map.jpg')}}" alt=""
                                                     class="img-thumbnail w-150-px h-150-px object-fit-cover"
                                                     style="pointer-events: none;">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!--============ end main content ==============-->

<!--============ start floatings button ==============-->

<section class="float-btn fw-light fw-bolder py-0">
    <div class="container-fluid">
        <!-- go to top -->
        <div class="progress-wrap d-lg-block d-none">
{{--            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">--}}
{{--                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>--}}
{{--            </svg>--}}
        </div>
        <!-- end go to top -->

        <!-- contact us floating -->
        <div id="btncollapzion" class="btn_collapzion"></div>
        <div class="" id="contactOverlay"></div>
        <!-- end contact us floating -->
    </div>
</section>

<!--============ end floatings button ==============-->

<!--============ start edit profile modal ==============-->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ویرایش پروفایل</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('add.address')}}" method="post">
                    @csrf

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="comment-item">
                                <input type="hidden" name="address_id" id="edit-address-id">
                                <input type="text"  name="name" class="form-control" id="floatingInputName"
                                       placeholder= "نام خود را وارد کنید...">
                                <label for="floatingInputName" class="form-label label-float fw-bold font-16">نام
                                    <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="comment-item">
                                <input type="text" name="postal_code" class="form-control" id="edit-postalcode"
                                       placeholder="کد پستی خود را وارد کنید...">
                                <label for="edit-postalcode" class="form-label label-float fw-bold">کد پستی <span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="comment-item">
                                <input type="text" name="address" class="form-control" id="edit-address-line"
                                       placeholder="آدرس خود را وارد کنید...">
                                <label for="edit-address-line" class="form-label label-float fw-bold">آدرس</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="comment-item">
                                <input type="text" name="province" class="form-control" id="edit-province"
                                       placeholder="استان خود را وارد کنید...">
                                <label for="edit-province" class="form-label label-float fw-bold">استان</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="comment-item">
                                <input type="text" name="city" class="form-control" id="edit-city"
                                       placeholder="شهر خود را وارد کنید...">
                                <label for="edit-city" class="form-label label-float fw-bold">شهر</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="comment-item">
                                <input type="text" name="phone" class="form-control" id="edit-phone"
                                       placeholder="شماره تلفن خود را وارد کنید ...">
                                <label for="edit-phone" class="form-label label-float fw-bold">شماره تلفن</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn main-color-one-bg border-0">
                                    ثبت آدرس
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const editButtons = document.querySelectorAll(".edit-address-btn");

    editButtons.forEach(button => {
        button.addEventListener("click", () => {
            document.getElementById("edit-address-id").value = button.dataset.id;
            document.getElementById("floatingInputName").value = button.dataset.full_name;
            document.getElementById("edit-postalcode").value = button.dataset.postalcode;
            document.getElementById("edit-address-line").value = button.dataset.address_line;
            document.getElementById("edit-province").value = button.dataset.province;
            document.getElementById("edit-city").value = button.dataset.city;
            document.getElementById("edit-phone").value = button.dataset.phone;
        });
    });
</script>

<!--============ end edit profile modal ==============-->

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
@endsection

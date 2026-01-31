
<!DOCTYPE html>
<html lang="FA-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'ثبت نام')
    <script src="{{ asset('js/script.js') }}"></script>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('plugin/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{asset('plugin/timer/timer.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{asset('plugin/go-to-top/style.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/rasta-contact/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</head>
<body class="bg-auth">

<section class="content vh-100">
    <div class="container-fluid h-100">
        <div class="auth h-100 d-flex align-items-center">
            <div class="container-fluid">
                <div class="auth-items">
                    @if(session('success'))
                        <div aria-live="polite" aria-atomic="true" class="position-relative">
                            <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
                                <div class="toast align-items-center text-bg-success border-0 show fade" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                            <div class="toast-body">
                                                {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>

    </div>
                        </div>@endif


                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="auth-form shadow-xl rounded-3  mt-5 bg-white">
                                <div class="auth-form-title header-logo d-flex align-items-center justify-content-between title-panel mb-4 slider-title-desc-center">
                                    <h2 class="text-center h4 text-muted title-font"> ثبت نام</h2>
                                    <a href="">
                                        <img src="{{asset("assets/image/logo.png")}}" class="auth-logo" alt="">
                                    </a>
                                </div>

                                <div class="container mt-3">

                                </div>
                                <form action="{{route('register')}}" id="form-auth" class="py-3"  method="post" >
                                    @csrf

                                    <div class="comment-item mb-4">
                                        <input type="text" class="form-control" id="name" name="name">
                                        <label for="name" class="form-label label-float">نام خود را وارد کنید</label>
                                    </div>

                                    <div class="comment-item mb-4">
                                        <input type="text" class="form-control" id="email_or_phone"  name="email">
                                        <label for="username" class="form-label label-float">   ایمیل خود را
                                            وارد
                                            کنید</label>
                                    </div>

                                    <div class="comment-item mb-4">
                                        <input type="text" class="form-control" id="email_or_phone"  name="phone_number">
                                        <label for="username" class="form-label label-float">   شماره خود را وارد کنید</label>
                                    </div>

                                    <div class="comment-item mb-4">
                                        <input type="password" class="form-control" id="password" name="password">
                                        <label for="password" class="form-label label-float">رمز عبور خود را وارد
                                            کنید</label>
                                    </div>
                                    <div class="comment-item mb-3 step-username">
                                        <input type="password" class="form-control" id="repeat_password" name="password_confirmation">
                                        <label for="repeat_password" class="form-label label-float">رمز عبور خود را تکرار
                                            کنید</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn main-color-one-bg w-100 py-3">ثبت نام</button>
                                    </div>
                                </form>


                            </div>
                            <p class="loginTermsDesc lh-lg mt-3">از قبل اکانت دارید؟<a
                                    class="underlined main-color-one-color fw-bold" href="{{route('show.login')}}">
                                    وارد شوید</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset("js/modernizr-3.11.2.min.js")}}"></script>
<script src="{{asset("js/jquery-3.7.1.min.js")}}"></script>
<script src="{{asset("js/bootstrap.bundle-5.3.2.min.js")}}"></script>
<script src="{{asset("js/app.js")}}"></script>

<script>

    //chat gbt:
    // Function to show toast notifications
    function showToast(message, type) {
        Toastify({
            text: message,
            duration: 4000, // Duration in milliseconds
            close: true, // Show close button
            gravity: "top", // `top` or `bottom`
            position: 'right', // `left`, `center` or `right`
            backgroundColor: type === 'success' ? '#198754' : '#dc3545 ', // Change color based on type
            stopOnFocus: true // Prevents dismissing of toast on hover
        }).showToast();
    }


    @if(session('success'))
    showToast("{{ session('success') }}", "success");
    @endif

    @if(session('error'))
    showToast("{{ session('error') }}", "error");
    @endif
</script>



</body>
</html>

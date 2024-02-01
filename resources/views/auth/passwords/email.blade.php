@extends('layouts.app')
@section('content')
    <!-- back-to-top-start  -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <!-- back-to-top-end  -->

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo text-center">
                <a href="index.html">
                    <img src="{{ asset('/img/logo/logo-white.png') }}" alt="">
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="tpoffcanvas__instagram text-center">
                <div class="tpoffcanvas__instagram-title">
                    <h4>instagram</h4>
                </div>
                <a href="#"><img src="{{ asset('/img/project/project-inner-4.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('/img/project/project-inner-5.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('/img/project/project-inner-6.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('/img/project/project-inner-7.jpg') }}" alt=""></a>
            </div>
            <div class="tpoffcanvas__info text-center">
                <h4 class="offcanva-title">we are here</h4>
                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z" target="_blank">
                    27 Division St, New York, <br>
                    NY 10002, USA
                </a>
            </div>
            <div class="tpoffcanvas__social">
                <div class="social-icon text-center">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <header>
        <!-- tp-header-area-start -->
        <div class="header-signin-area header-bottom__transparent header-signin-ptb z-index-5">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="header-signin-logo">
                            <a href="index.html"><img src="{{ asset('/img/logo/logo-inner.html') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>



    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- tp-banner-area-start -->
                <div class="signin-banner-area signin-banner-main-wrap d-flex align-items-center">
                    <div class="signin-banner-left-box signin-banner-bg p-relative"
                        data-background="{{ asset('/img/login/login-bg-shape.png') }}">
                        <div class="signin-banner-bottom-shape">
                            <img src="{{ asset('/img/login/login-shape-1.png') }}" alt="">
                        </div>
                        <div class="text-start">
                            <a style="position:relative; top:-100px;" href="/"
                                class="btn btn-outline-light rounded-4"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="signin-banner-left-wrap">
                            <div class="signin-banner-title-box mb-100">
                                <h4 class="signin-banner-title tp-char-animation">Hai, Selamat<br>
                                    Datang Di KanePict.</h4>
                            </div>
                            <div class="signin-banner-img-box position-relative">
                                <div class="signin-banner-img signin-img-1 d-none d-md-block z-index-3">
                                    <img src="{{ asset('/img/login/login-2.png"') }}" alt="">
                                </div>
                                <div class="signin-banner-img signin-img-2 d-none d-md-block">
                                    <img src="{{ asset('/images/3d-login.png') }}" alt="">
                                </div>
                                <div class="signin-banner-img signin-img-3 d-none d-md-block z-index-5">
                                    <img src="{{ asset('/images/secure.png') }}" alt="">
                                </div>
                                <div class="signin-banner-img signin-img-4 d-none d-sm-block">
                                    <img src="{{ asset('/img/login/login-4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="signin-banner-from d-flex justify-content-center align-items-center">
                        <div class="signin-banner-from-wrap">
                            <div class="signin-banner-title-box">
                                <h4 class="signin-banner-from-title">Reset Password</h4>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="signin-banner-from-box">
                                <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-30">
                                            <input type="email" name="email" class="inputText"
                                                @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                            <span class="floating-label">Email</span>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="signin-banner-from-btn mb-20">
                                <button type="submit" class="signin-btn ">Kirim Link</button>
                            </div>
                            </form>
                            <div class="signin-banner-from-register">
                                <a href="/login">Kembali ke <span>halaman login</span></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- tp-banner-area-end -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var passwordInput = document.getElementById("passwordInput");
                var eyeIcon = document.getElementById("eyeIcon");
                var isPasswordVisible = false;

                eyeIcon.addEventListener("click", function() {
                    isPasswordVisible = !isPasswordVisible;

                    if (isPasswordVisible) {
                        passwordInput.type = "text";
                        eyeIcon.querySelector(".eye-on").style.display = "none";
                        eyeIcon.querySelector(".eye-off").style.display = "block";
                    } else {
                        passwordInput.type = "password";
                        eyeIcon.querySelector(".eye-on").style.display = "block";
                        eyeIcon.querySelector(".eye-off").style.display = "none";
                    }
                });
            });
            document.addEventListener("DOMContentLoaded", function() {
                var passwordInput = document.getElementById("confirmationPassword");
                var eyeIcon = document.getElementById("eyeIconConfirmation");
                var isPasswordVisible = false;

                eyeIcon.addEventListener("click", function() {
                    isPasswordVisible = !isPasswordVisible;

                    if (isPasswordVisible) {
                        passwordInput.type = "text";
                        eyeIcon.querySelector(".eye-on-confirmation").style.display = "none";
                        eyeIcon.querySelector(".eye-off-confirmation").style.display = "block";
                    } else {
                        passwordInput.type = "password";
                        eyeIcon.querySelector(".eye-on-confirmation").style.display = "block";
                        eyeIcon.querySelector(".eye-off-confirmation").style.display = "none";
                    }
                });
            });
        </script>

        </main>

    </div>
    </div>
@endsection

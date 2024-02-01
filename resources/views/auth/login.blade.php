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
                    <div class="signin-banner-left-box signin-banner-bg p-relative" data-background="{{ asset('/img/login/login-bg-shape.png') }}">
                        <div class="signin-banner-bottom-shape">
                            <img src="{{ asset('/img/login/login-shape-1.png') }}" alt="">
                        </div>
                        <div class="text-start">
                            <a style="position:relative; top:-100px;" href="/" class="btn btn-outline-light rounded-4"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
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
                                <h4 class="signin-banner-from-title">Masuk ke KanePict</h4>
                            </div>
                            <div class="signin-banner-login-browser">
                                <a href="{{route('redirect.google')}}">
                                    <svg class="mr-10" width="23" height="23" viewBox="0 0 23 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.5642 11.7235C21.5642 10.8961 21.4957 10.2924 21.3474 9.66626H11.707V13.4005H17.3657C17.2517 14.3285 16.6356 15.7261 15.2665 16.6652L15.2473 16.7902L18.2954 19.1044L18.5066 19.125C20.4461 17.3696 21.5642 14.7869 21.5642 11.7235"
                                            fill="#4285F4" />
                                        <path
                                            d="M11.7039 21.5625C14.4761 21.5625 16.8035 20.668 18.5034 19.1251L15.2633 16.6653C14.3963 17.2579 13.2326 17.6716 11.7039 17.6716C8.98861 17.6716 6.68407 15.9163 5.86257 13.4901L5.74215 13.5001L2.5727 15.9039L2.53125 16.0168C4.21972 19.3039 7.68797 21.5625 11.7039 21.5625Z"
                                            fill="#34A853" />
                                        <path
                                            d="M5.86404 13.4901C5.64728 12.864 5.52183 12.1931 5.52183 11.5C5.52183 10.8067 5.64728 10.1359 5.85263 9.50984L5.84689 9.37649L2.63771 6.93405L2.53271 6.983C1.83681 8.34704 1.4375 9.87881 1.4375 11.5C1.4375 13.1212 1.83681 14.6528 2.53271 16.0169L5.86404 13.4901"
                                            fill="#FBBC05" />
                                        <path
                                            d="M11.7039 5.32831C13.632 5.32831 14.9325 6.14448 15.6741 6.82654L18.5719 4.05375C16.7922 2.43257 14.4762 1.4375 11.7039 1.4375C7.688 1.4375 4.21973 3.69595 2.53125 6.98301L5.85118 9.50985C6.6841 7.08367 8.98865 5.32831 11.7039 5.32831"
                                            fill="#EB4335" />
                                    </svg>
                                    Lanjutkan dengan Google
                                </a>
                            </div>
                            <div class="signin-banner-from-box">
                                <h5 class="signin-banner-from-subtitle">Atau</h5>
                                <form method="POST" action="{{ route('loginAction') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="postbox__comment-input mb-30">
                                                <input type="text" name="email" class="inputText" required>
                                                <span class="floating-label">Email</span>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="postbox__comment-input mb-30">
                                                <input id="passwordInput" name="password" class="inputText password"
                                                    type="password" required>
                                                <span class="floating-label">Password</span>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <span id="eyeIcon" class="eye-btn">
                                                    <span class="eye-on">
                                                        <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 6.5a9.77 9.77 0 0 1 8.82 5.5c-1.65 3.37-5.02 5.5-8.82 5.5S4.83 15.37 3.18 12A9.77 9.77 0 0 1 12 6.5m0-2C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5m0 5a2.5 2.5 0 0 1 0 5a2.5 2.5 0 0 1 0-5m0-2c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5s4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5"/></svg>
                                                    </span>
                                                    <span class="eye-off" style="display: none;">
                                                        <svg width="18" height="18" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_2547_24206)">
                                                                <path
                                                                    d="M18.813 18.9113C17.1036 20.2143 15.0222 20.9362 12.873 20.9713C5.87305 20.9713 1.87305 12.9713 1.87305 12.9713C3.11694 10.6532 4.84218 8.62795 6.93305 7.03134M10.773 5.21134C11.4614 5.05022 12.1661 4.96968 12.873 4.97134C19.873 4.97134 23.873 12.9713 23.873 12.9713C23.266 14.1069 22.5421 15.1761 21.713 16.1613M14.993 15.0913C14.7184 15.3861 14.3872 15.6225 14.0192 15.7865C13.6512 15.9504 13.2539 16.0386 12.8511 16.0457C12.4483 16.0528 12.0482 15.9787 11.6747 15.8278C11.3011 15.6769 10.9618 15.4524 10.6769 15.1675C10.392 14.8826 10.1674 14.5433 10.0166 14.1697C9.86567 13.7962 9.79157 13.3961 9.79868 12.9932C9.80579 12.5904 9.89396 12.1932 10.0579 11.8252C10.2219 11.4572 10.4583 11.126 10.753 10.8513"
                                                                    stroke="black" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M1.87305 1.97131L23.873 23.9713" stroke="black"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_2547_24206">
                                                                    <rect width="24" height="24" fill="white"
                                                                        transform="translate(0.873047 0.971313)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="signin-banner-form-remember">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="postbox__comment-agree">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="remember" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Ingat saya
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="postbox__forget text-end">
                                             @if (Route::has('password.request'))
                                                <a href="{{route('password.request')}}">Lupa Kata Sandi?</a>
                                             @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="signin-banner-from-btn mb-20">
                                    <button type="submit" class="signin-btn ">Masuk</button>
                                </div>
                              </form>
                                <div class="signin-banner-from-register">
                                    <a href="/register">Belum Punya Akun? <span>Register Disini</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp-banner-area-end -->
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var passwordInput = document.getElementById("passwordInput");
                        var eyeIcon = document.getElementById("eyeIcon");
                        var isPasswordVisible = false;
                
                        eyeIcon.addEventListener("click", function () {
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
                </script>
                
            </main>

        </div>
    </div>
@endsection

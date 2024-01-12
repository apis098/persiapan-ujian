@extends('layouts.app')
@section('content')
<section class="banner_section">
    <!-- container start -->
    <div class="container">
        <!-- vertical animation line -->
      <div class="anim_line">
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
      </div>
      <!-- row start -->
      <div class="row">
        <div class="col-lg-6 col-md-12"  data-aos="fade-right" data-aos-duration="1500">
            <!-- banner text -->
          <div class="banner_text">
            <!-- h1 -->
            <p class="welcome-text">Selamat datang di  <span> Kane Pict</span></p>
            <!-- p -->
            <p>Kami sangat senang Anda telah memilih untuk mengunjungi galeri foto kami. Di sini, kami mengundang Anda untuk menjelajahi dunia gambar yang menginspirasi, penuh warna, dan sarat dengan cerita.
            </p>
          </div>
          <!-- app buttons -->
          {{-- <ul class="app_btn">
            <li>
              <a href="#">
                <img class="blue_img" src="{{asset('images/appstore_blue.png')}}" alt="image" >
                <img class="white_img" src="{{asset('images/appstore_white.png')}}" alt="image" >
              </a>
            </li>
            <li>
              <a href="#">
                <img class="blue_img" src="{{asset('images/googleplay_blue.png')}}" alt="image" >
                <img class="white_img" src="{{asset('images/googleplay_white.png')}}" alt="image" >
              </a>
            </li>
          </ul> --}}

          <!-- users -->
          {{-- <div class="used_app">
            <ul>
              <li><img src="{{asset('images/used01.png')}}" alt="image" ></li>
              <li><img src="{{asset('images/used02.png')}}" alt="image" ></li>
              <li><img src="{{asset('images/used03.png')}}" alt="image" ></li>
              <li><img src="{{asset('images/used04.png')}}" alt="image" ></li>
            </ul>
            <p>12M + <br> used this app</p>
          </div> --}}
        </div>

        <!-- banner slides start -->
        <div class="col-lg-6 col-md-12 right-hero"  data-aos="fade-in" data-aos-duration="1500">
          <div class="banner_slider moving_animation ">
            <img class="img-fluid" style="margin-left: 12%" width="75%" src="{{asset('images/hero.png')}}" alt="">
            <div class="left_icon">
              <img src="{{asset('images/message_icon.png')}}" alt="image" >
            </div>
            <div class="right_icon">
              <img src="{{asset('images/shield_icon.png')}}" alt="image" >
            </div>
           
          </div>
        </div>
        <!-- banner slides end -->

      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Banner-Section-end -->

  <!-- Trusted Section start -->
  <section class="row_am trusted_section">
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
        <!-- h2 -->
        <h2>Trusted by <span>150+</span> companies</h2>
        <!-- p -->
        <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
          standard dummy.</p>
      </div>

      <!-- logos slider start -->
      <div class="company_logos" >
        <div id="company_slider" class="owl-carousel owl-theme">
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/paypal.png')}}" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/spoty.png')}}" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/shopboat.png')}}" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/slack.png')}}" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/envato.png')}}" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/paypal.png')}}" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/spoty.png')}}" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="{{asset('images/shopboat.png')}}" alt="image" >
            </div>
          </div>
        </div>
      </div>
      <!-- logos slider end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Trusted Section ends -->


  <!-- Features-Section-Start -->
  <section class="row_am features_section" id="features">
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
        <!-- h2 -->
        <h2><span>Fitur</span> Yang Bisa Di Nikmati!</h2>
        <!-- p -->
        <p>Kami menyediakan pengalaman pencarian yang fantastis untuk anda coba!</p>
      </div>
      <div class="feature_detail">
        <!-- feature box left -->
        <div class="left_data feature_box">

            <!-- feature box -->
          <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
            <div class="text">
              <h4>Pencarian Gambar</h4>
              <p>Fitur pencarian memungkinkan pengguna untuk mencari gambar berdasarkan kata kunci, topik, atau kategori tertentu.</p>
            </div>
          </div>

          <!-- feature box -->
          <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
            <div class="text">
              <h4>Unduhan Gambar</h4>
              <p>Fitur ini memungkinkan pengguna mengunduh gambar secara langsung ke perangkat mereka.</p>
            </div>
          </div>
        </div>

        <!-- feature box right -->
        <div class="right_data feature_box">

            <!-- feature box -->
          <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
            <div class="text">
              <h4>Interaksi Pengguna</h4>
              <p>Mungkin termasuk komentar, penilaian, atau kemampuan untuk menyukai gambar untuk interaksi pengguna.</p>
            </div>
          </div>

          <!-- feature box -->
          <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
            <div class="text">
              <h4>Informasi dan Atribusi</h4>
              <p>Menyediakan informasi tentang gambar, dan instruksi terkait penggunaan gambar.</p>
            </div>
          </div>

        </div>
        <!-- feature image -->
        <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <img src="{{asset('images/about-frame.png')}}" alt="image" >
        </div>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- Features-Section-end -->

  <!-- About-App-Section-Start -->
  {{-- <section class="row_am about_app_section">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
      <div class="row">
        <div class="col-lg-6">

            <!-- about images -->
          <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
            <div class="frame_img">
              <img class="moving_position_animatin" src="{{asset('images/about-frame.png')}}" alt="image" >
            </div>
            <div class="screen_img">
              <img class="moving_animation" src="{{asset('images/about-screen.png')}}" alt="image" >
            </div>
          </div>
        </div>
        <div class="col-lg-6">

            <!-- about text -->
          <div class="about_text">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

                <!-- h2 -->
              <h2>Some awesome words <span>about app.</span></h2>

              <!-- p -->
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the
                industrys standard dummy text ever since the when an unknown printer took a galley of type and. Lorem
                ipsum dolor sit amet.
              </p>
            </div>

            <!-- UL -->
            <ul class="app_statstic" id="counter" data-aos="fade-in" data-aos-duration="1500">
              <li>
                <div class="icon">
                  <img src="{{asset('images/download.png')}}" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="17">0</span><span>M+</span></p>
                  <p>Download</p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <img src="{{asset('images/followers.png')}}" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="08">0 </span><span>M+</span></p>
                  <p>Followers</p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <img src="{{asset('images/reviews.png')}}" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="2300">1500</span><span>+</span></p>
                  <p>Reviews</p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <img src="{{asset('images/countries.png')}}" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="150">0</span><span>+</span></p>
                  <p>Countries</p>
                </div>
              </li>
            </ul>
            <!-- UL end -->
            <a href="contact.html" class="btn puprple_btn" data-aos="fade-in" data-aos-duration="1500">START FREE TRIAL</a>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section> --}}
  <!-- About-App-Section-end -->

  <!-- ModernUI-Section-Start -->
  <section class="row_am modern_ui_section">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
      <div class="row">
        <div class="col-lg-6">
            <!-- UI content -->
          <div class="ui_text">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
              <h2>Beautiful design with <span>modern UI</span></h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the
                industrys standard dummy text ever since the when an unknown printer took a galley of type and.
              </p>
            </div>
            <ul class="design_block">
              <li data-aos="fade-up" data-aos-duration="1500">
                <h4>Carefully designed</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and type esetting industry lorem Ipsum has.</p>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <h4>Seamless Sync</h4>
                <p>Simply dummy text of the printing and typesetting inustry lorem Ipsum has Lorem dollar summit.</p>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <h4>Access Drive</h4>
                <p>Printing and typesetting industry lorem Ipsum has been the industrys standard dummy text of type
                  setting.</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
            <!-- UI Image -->
          <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
            <div class="left_img">
              <img class="moving_position_animatin" src="{{asset('images/modern01.png')}}" alt="image" >
            </div>
            <!-- UI Image -->
            <div class="right_img">
              <img class="moving_position_animatin" src="{{asset('images/secure_data.png')}}" alt="image" >
              <img class="moving_position_animatin" src="{{asset('images/modern02.png')}}" alt="image" >
              <img class="moving_position_animatin" src="{{asset('images/modern03.png')}}" alt="image" >
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- ModernUI-Section-end -->

  <!-- How-It-Workes-Section-Start -->
  <section class="row_am how_it_works" id="how_it_work">
    <!-- container start -->
    <div class="container">
      <div class="how_it_inner">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
          <h2><span>How it works</span> - 3 easy steps</h2>
          <!-- p -->
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
            standard dummy.</p>
        </div>
        <div class="step_block">
            <!-- UL -->
          <ul>
            <!-- step -->
            <li>
              <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                <h4>Download app</h4>
                <div class="app_icon">
                  <a href="#"><i class="icofont-brand-android-robot"></i></a>
                  <a href="#"><i class="icofont-brand-apple"></i></a>
                  <a href="#"><i class="icofont-brand-windows"></i></a>
                </div>
                <p>Download App either for Windows, Mac or Android</p>
              </div>
              <div class="step_number">
                <h3>01</h3>
              </div>
              <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                <img src="{{asset('images/download_app.jpg')}}" alt="image" >
              </div>
            </li>

            <!-- step -->
            <li>
              <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                <h4>Create account</h4>
                <span>14 days free trial</span>
                <p>Sign up free for App account. One account for all devices.</p>
              </div>
              <div class="step_number"> 
                <h3>02</h3>
              </div>
              <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                <img src="{{asset('images/create_account.jpg')}}" alt="image" >
              </div>
            </li>

            <!-- step -->
            <li>
              <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                <h4>It’s done, enjoy the app</h4>
                <span>Have any questions check our <a href="#">FAQs</a></span>
                <p>Get most amazing app experience,Explore and share the app</p>
              </div>
              <div class="step_number">
                <h3>03</h3>
              </div>
              <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                <img src="{{asset('images/enjoy_app.jpg')}}" alt="image" >
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- video section start -->
      <div class="yt_video" data-aos="fade-in" data-aos-duration="1500">
       <!-- animation line -->
        <div class="anim_line dark_bg">
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
        </div>
        <div class="thumbnil">
          <img src="{{asset('images/yt_thumb.png')}}" alt="image" >
          <a class="popup-youtube play-button" data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal" data-target="#myModal" title="XJj2PbenIsU">
            <span class="play_btn">
              <img src="{{asset('images/play_icon.png')}}" alt="image" >
              <div class="waves-block">
                <div class="waves wave-1"></div>
                <div class="waves wave-2"></div>
                <div class="waves wave-3"></div>
              </div>
            </span>
            Let’s see virtually how it works
            <span>Watch video</span>
          </a>
        </div>
      </div>
      <!-- video section end -->
    </div>
    <!-- container end -->
  </section>
  <!-- How-It-Workes-Section-end -->

  <!-- Testimonial-Section start -->
  <section class="row_am testimonial_section"> 
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <!-- h2 -->
        <h2>What our <span>customer say</span></h2>
        <!-- p -->
        <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
          standard dummy.</p>
      </div>
      <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">
        <div id="testimonial_slider" class="owl-carousel owl-theme">
            <!-- user 1 -->
          <div class="item">
            <div class="testimonial_slide_box">
              <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
              </div>
              <p class="review">
                “ Lorem Ipsum is simply dummy text of the printing and typese tting us orem Ipsum has been lorem
                beenthe standar dummy. ”
              </p>
              <div class="testimonial_img">
                <img src="{{asset('images/testimonial_user1.png')}}" alt="image" >
              </div>
              <h3>Shayna John</h3>
              <span class="designation">Careative inc</span>
            </div>
          </div>

          <!-- user 2 -->
          <div class="item">
            <div class="testimonial_slide_box">
              <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
              </div>
              <p class="review">
                “ Lorem Ipsum is simply dummy text of the printing and typese tting us orem Ipsum has been lorem
                beenthe standar dummy. ”
              </p>
              <div class="testimonial_img">
                <img src="{{asset('images/testimonial_user2.png')}}" alt="image" >
              </div>
              <h3>Willium Den</h3>
              <span class="designation">Careative inc</span>
            </div>
          </div>
          
          <!-- user 3 -->
          <div class="item">
            <div class="testimonial_slide_box">
              <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
              </div>
              <p class="review">
                “ Lorem Ipsum is simply dummy text of the printing and typese tting us orem Ipsum has been lorem
                beenthe standar dummy. ”
              </p>
              <div class="testimonial_img">
                <img src="{{asset('images/testimonial_user3.png')}}" alt="image" >
              </div>
              <h3>Cyrus Stephen</h3>
              <span class="designation">Careative inc</span>
            </div>

          </div>
        </div>

        <!-- total review -->
        <div class="total_review">
          <div class="rating">
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
            <p>5.0 / 5.0</p>
          </div>
          <h3>2578</h3>
          <a href="reviews.html">TOTAL USER REVIEWS <i class="icofont-arrow-right"></i></a>
        </div>

        <!-- avtar faces -->
        <div class="avtar_faces">
          <img src="{{asset('images/avtar_testimonial.png')}}" alt="image" >
        </div>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- Testimonial-Section end -->

  <!-- Pricing-Section -->
  <section class="row_am pricing_section" id="pricing">
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <!-- h2 -->
        <h2>Best & simple <span>pricing</span></h2>
        <!-- p -->
        <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
          standard dummy.</p>
      </div>
      <!-- toggle button -->
      <div class="toggle_block" data-aos="fade-up" data-aos-duration="1500">
        <span class="month active">Monthly</span>
        <div class="tog_block">
          <span class="tog_btn"></span>
        </div>
        <span class="years">Yearly</span>
        <span class="offer">50% off</span>
      </div>

      <!-- pricing box  monthly start -->
      <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
        <!-- row start -->
        <div class="row">
            <!-- pricing box 1 -->
          <div class="col-md-4">
            <div class="pricing_block">
              <div class="icon">
                <img src="{{asset('images/standard.png')}}" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Standard</h3>
                <span>For the basics</span>
              </div>
              <span class="price">$15</span>
              <ul class="benifits">
                <li>
                  <p>Up to 5 Website</p>
                </li>
                <li>
                  <p>50 GB disk space</p>
                </li>
                <li>
                  <p>10 Customize sub pages</p>
                </li>
                <li>
                  <p>2 Domains access</p>
                </li>
                <li>
                  <p>Support on request</p>
                </li>
              </ul>
              <a href="contact.html" class="btn white_btn">BUY NOW</a>
            </div>
          </div>

          <!-- pricing box 2 -->
          <div class="col-md-4">
            <div class="pricing_block highlited_block">
              <div class="icon">
                <img src="{{asset('images/unlimited.png')}}" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Unlimited</h3>
                <span>For the professionals</span>
              </div>
              <span class="price">$99</span>
              <ul class="benifits">
                <li>
                  <p>Unlimited Website</p>
                </li>
                <li>
                  <p>200 GB disk space</p>
                </li>
                <li>
                  <p>20 Customize sub pages</p>
                </li>
                <li>
                  <p>10 Domains access</p>
                </li>
                <li>
                  <p>24/7 Customer support</p>
                </li>
              </ul>
              <a href="contact.html" class="btn white_btn">BUY NOW</a>
            </div>
          </div>

          <!-- pricing box 3 -->
          <div class="col-md-4">
            <div class="pricing_block">
              <div class="icon">
                <img src="{{asset('images/premium.png')}}" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Premium</h3>
                <span>For small team</span>
              </div>
              <span class="price">$55</span>
              <ul class="benifits">
                <li>
                  <p>Up to 10 Website</p>
                </li>
                <li>
                  <p>100 GB disk space</p>
                </li>
                <li>
                  <p>15 Customize sub pages</p>
                </li>
                <li>
                  <p>4 Domains access</p>
                </li>
                <li>
                  <p>24/7 Customer support</p>
                </li>
              </ul>
              <a href="contact.html" class="btn white_btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- pricing box monthly end -->

      <!-- pricing box yearly start -->
      <div class="pricing_pannel yearly_plan">
        <div class="row">

            <!-- pricing box 1 -->
          <div class="col-md-4">
            <div class="pricing_block">
              <div class="icon">
                <img src="{{asset('images/standard.png')}}" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Standard</h3>
                <span>For the basics</span>
              </div>
              <span class="price">$150</span>
              <ul class="benifits">
                <li>
                  <p>Up to 10 Website</p>
                </li>
                <li>
                  <p>100 GB disk space</p>
                </li>
                <li>
                  <p>25 Customize sub pages</p>
                </li>
                <li>
                  <p>4 Domains access</p>
                </li>
                <li>
                  <p>Support on request</p>
                </li>
              </ul>
              <a href="contact.html" class="btn white_btn">BUY NOW</a>
            </div>
          </div>

          <!-- pricing box 2 -->
          <div class="col-md-4">
            <div class="pricing_block highlited_block">
              <div class="icon">
                <img src="{{asset('images/unlimited.png')}}" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Unlimited</h3>
                <span>For the professionals</span>
              </div>
              <span class="price">$999</span>
              <ul class="benifits">
                <li>
                  <p>Unlimited Website</p>
                </li>
                <li>
                  <p>400 GB disk space</p>
                </li>
                <li>
                  <p>40 Customize sub pages</p>
                </li>
                <li>
                  <p>20 Domains access</p>
                </li>
                <li>
                  <p>24/7 Customer support</p>
                </li>
              </ul>
              <a href="contact.html" class="btn white_btn">BUY NOW</a>
            </div>
          </div>

          <!-- pricing box 3 -->
          <div class="col-md-4">
            <div class="pricing_block">
              <div class="icon">
                <img src="{{asset('images/premium.png')}}" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Premium</h3>
                <span>For small team</span>
              </div>
              <span class="price">$550</span>
              <ul class="benifits">
                <li>
                  <p>Up to 20 Website</p>
                </li>
                <li>
                  <p>200 GB disk space</p>
                </li>
                <li>
                  <p>25 Customize sub pages</p>
                </li>
                <li>
                  <p>8 Domains access</p>
                </li>
                <li>
                  <p>24/7 Customer support</p>
                </li>
              </ul>
              <a href="contact.html" class="btn white_btn">BUY NOW</a>
            </div>
          </div>

        </div>
      </div>
      <!-- pricing box yearly end -->

      <p class="contact_text" data-aos="fade-up" data-aos-duration="1500">Not sure what to choose ? <a href="contact.html">contact us</a> for custom packages</p>
    </div>
    <!-- container start end -->
  </section>
  <!-- Pricing-Section end -->

  <!-- FAQ-Section start -->
  <section class="row_am faq_section">
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <!-- h2 -->
        <h2><span>FAQ</span> - Frequently Asked Questions</h2>
        <!-- p -->
        <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
          standard dummy.</p>
      </div>
      <!-- faq data -->
      <div class="faq_panel">
        <div class="accordion" id="accordionExample">
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                    <i class="icon_faq icofont-plus"></i></i> How can i pay ?</button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> How to setup account ?</button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>What is process to get refund
                  ?</button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>What is process to get refund
                  ?</button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- FAQ-Section end -->

  <!-- Beautifull-interface-Section start -->
  <section class="row_am interface_section">
    <!-- container start -->
    <div class="container-fluid">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2>Beautifull <span>interface</span></h2>
          <!-- p -->
          <p>
            Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe standard dummy.
          </p>
      </div>

        <!-- screen slider start -->
        <div class="screen_slider" >
          <div id="screen_slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="screen_frame_img">
                  <img src="{{asset('images/screen-1.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img src="{{asset('images/screen-2.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img src="{{asset('images/screen-3.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img src="{{asset('images/screen-4.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img src="{{asset('images/screen-5.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img src="{{asset('images/screen-3.png')}}" alt="image" >
              </div>
            </div>
        </div>
        </div>
        <!-- screen slider end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Beautifull-interface-Section end -->

  <!-- Download-Free-App-section-Start  -->
  <section class="row_am free_app_section" id="getstarted">
      <!-- container start -->
      <div class="container">
          <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100"> 
            <!-- vertical line animation -->
            <div class="anim_line dark_bg">
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
              <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
            </div>
                <!-- row start -->
              <div class="row">
                  <!-- content -->
                  <div class="col-md-6">
                      <div class="free_text">
                          <div class="section_title">
                              <h2>Let’s download free from apple and play store</h2>
                              <p>Instant free download from apple and play store orem Ipsum is simply dummy text of the printing.
                                and typese tting indus orem Ipsum has beenthe standard</p>
                          </div>
                          <ul class="app_btn">
                            <li>
                              <a href="#">
                                <img src="{{asset('images/appstore_blue.png')}}" alt="image" >
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="{{asset('images/googleplay_blue.png')}}" alt="image" >
                              </a>
                            </li>
                          </ul>
                      </div>
                  </div>

                  <!-- images -->
                  <div class="col-md-6">
                      <div class="free_img">
                          <img src="{{asset('images/download-screen01.png')}}" alt="image" >
                          <img class="mobile_mockup" src="{{asset('images/download-screen02.png')}}" alt="image" >
                      </div>
                  </div>
              </div>
              <!-- row end -->
          </div>
      </div>
      <!-- container end -->
  </section>
  <!-- Download-Free-App-section-end  -->

  <!-- Story-Section-Start -->
  <section class="row_am latest_story" id="blog">
   <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <h2>Read latest <span>story</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe standard dummy.</p>
        </div>
        <!-- row start -->
        <div class="row">
            <!-- story -->
          <div class="col-md-4">
              <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                  <div class="story_img">
                    <img src="{{asset('images/story01.png')}}" alt="image" >
                    <span>45 min ago</span>
                  </div>
                  <div class="story_text">
                      <h3>Cool features added!</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting 
                        industry lorem Ipsum has.</p>
                      <a href="blog-single.html">READ MORE</a>
                  </div>
              </div>
          </div>

          <!-- story -->
          <div class="col-md-4">
              <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                  <div class="story_img">
                    <img src="{{asset('images/story02.png')}}" alt="image" >
                    <span>45 min ago</span>
                  </div>
                  <div class="story_text">
                        <h3>Top rated app! Yupp.</h3>
                      <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                      <a href="blog-single.html">READ MORE</a>
                  </div>
              </div>
          </div>

          <!-- story -->
          <div class="col-md-4">
              <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                  <div class="story_img">
                    <img src="{{asset('images/story03.png')}}" alt="image" >
                    <span>45 min ago</span>
                  </div>
                  <div class="story_text">
                        <h3>Creative ideas on app.</h3>
                      <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                      <a href="blog-single.html">READ MORE</a>
                  </div>
              </div>
          </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Story-Section-end -->

  <!-- News-Letter-Section-Start -->
  <section class="newsletter_section">
    <!-- container start -->
    <div class="container">
        <div class="newsletter_box">
            <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                  <!-- h2 -->
                <h2>Subscribe newsletter</h2>
                <!-- p -->
                <p>Be the first to recieve all latest post in your inbox</p>
            </div>
            <form action="#" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <button class="btn">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <!-- container end -->
  </section>
  <!-- News-Letter-Section-end -->

  <!-- Footer-Section start -->
  <footer>
      <div class="top_footer" id="contact">
        <!-- animation line -->
        <div class="anim_line dark_bg">
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
          <span><img src="{{asset('images/anim_line.png')}}" alt="anim_line"></span>
        </div>
            <!-- container start -->
          <div class="container">
            <!-- row start -->
            <div class="row">
                  <!-- footer link 1 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="abt_side">
                      <div class="logo"> <img src="{{asset('images/footer_logo.png')}}" alt="image" ></div>
                      <ul>
                        <li><a href="#">support@example.com</a></li>
                        <li><a href="#">+1-900-123 4567</a></li>
                      </ul>
                      <ul class="social_media">
                          <li><a href="#"><i class="icofont-facebook"></i></a></li>
                          <li><a href="#"><i class="icofont-twitter"></i></a></li>
                          <li><a href="#"><i class="icofont-instagram"></i></a></li>
                          <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                      </ul>
                    </div>
                </div>

                <!-- footer link 2 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="links">
                      <h3>Useful Links</h3>
                        <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About us</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Blog</a></li>
                          <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- footer link 3 -->
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="links">
                    <h3>Help & Suport</h3>
                      <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                      </ul>
                  </div>
                </div>

                <!-- footer link 4 -->
                <div class="col-lg-2 col-md-6 col-12">
                  <div class="try_out">
                      <h3>Let’s Try Out</h3>
                      <ul class="app_btn">
                        <li>
                          <a href="#">
                            <img src="{{asset('images/appstore_blue.png')}}" alt="image" >
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('images/googleplay_blue.png')}}" alt="image" >
                          </a>
                        </li>
                      </ul>
                  </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- last footer -->
      <div class="bottom_footer">
          <!-- container start -->
          <div class="container">
            <!-- row start -->
            <div class="row">
              <div class="col-md-6">
                  <p>© Copyrights 2022. All rights reserved.</p>
              </div>
              <div class="col-md-6">
                  <p class="developer_text">Design & developed by <a href="https://themeforest.net/user/kalanidhithemes" target="blank">Kalanidhi Themes</a></p>
              </div>
          </div>
          <!-- row end -->
          </div>
          <!-- container end -->
      </div>

      <!-- go top button -->
      <div class="go_top">
          <span><img src="{{asset('images/go_top.png')}}" alt="image" ></span>
      </div>
  </footer>
  <!-- Footer-Section end -->

<!-- VIDEO MODAL -->
<div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
          <i class="icofont-close-line-circled"></i>
        </button>
          <div class="modal-body">
              <div id="video-container" class="video-container">
                  <iframe id="youtubevideo" src="#" width="640" height="360" frameborder="0" allowfullscreen></iframe>
              </div>        
          </div>
          <div class="modal-footer">
          </div>
      </div> 
  </div>
</div>

<div class="purple_backdrop"></div>

</div>
<!-- Page-wrapper-End -->

<!-- Jquery-js-Link -->
<script src="{{asset('js/jquery.js')}}"></script>
<!-- owl-js-Link -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- bootstrap-js-Link -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- aos-js-Link -->
<script src="{{asset('js/aos.js')}}"></script>
<!-- main-js-Link -->
<script src="{{asset('js/main.js')}}"></script>
@endsection
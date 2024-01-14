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
        <div class="col-lg-6 col-md-12 container-left"  data-aos="fade-right" data-aos-duration="1500">
            <!-- banner text -->
          <div class="banner_text">
            <!-- h1 -->
            <p class="welcome-text">Selamat datang di  <span> Kane Pict</span></p>
            <!-- p -->
            <p>Kami sangat senang Anda telah memilih untuk mengunjungi galeri foto kami. Di sini, kami mengundang Anda untuk menjelajahi dunia gambar yang menginspirasi, penuh warna, dan sarat dengan cerita.
            </p>
          </div>
          <div class="home_search_bar">
            <form action="#">
                <div class="form-group group-form">
                    <input type="text" placeholder="Gambar apa yang ingin anda cari?..." class="form-control input-search">
                    <button class="btn btn-search" type="submit"><i class="icofont-search-1"></i></button>
                </div>
            </form>
          </div>
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
  <!-- Beautifull-interface-Section start -->
  <section class="row_am">
    <!-- container start -->
    <div class="container-fluid">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2>Gambar <span>Tervaforit Minggu Ini</span></h2>
          <!-- p -->
          <p>
            Temukan gambar-gambar yang sedang trending di fitur kami <br> yang selalu diperbarui.
          </p>
      </div>

        <!-- screen slider start -->
        <div class="screen_slider" >
          <div id="screen_slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="screen_frame_img">
                  <img class="frame_img" style="object-fit: cover" src="{{asset('images/story02.png')}}" alt="image">
              </div>
              <div class="text-center mt-2">
                <a href="contact.html" class="btn white_btn">Detail</a>
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img class="frame_img" style="object-fit: cover" src="{{asset('images/story03.png')}}" alt="image" >
              </div>
              <div class="text-center mt-2">
                <a href="contact.html" class="btn white_btn">Detail</a>
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img class="frame_img" style="object-fit: cover" src="{{asset('images/story04.png')}}" alt="image" >
              </div>
              <div class="text-center mt-2">
                <a href="contact.html" class="btn white_btn">Detail</a>
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img class="frame_img" style="object-fit: cover" src="{{asset('images/story05.png')}}" alt="image" >
              </div>
              <div class="text-center mt-2">
                <a href="contact.html" class="btn white_btn">Detail</a>
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img class="frame_img" style="object-fit: cover" src="{{asset('images/story07.png')}}" alt="image" >
              </div>
              <div class="text-center mt-2">
                <a href="contact.html" class="btn white_btn">Detail</a>
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                  <img class="frame_img" style="object-fit: cover" src="{{asset('images/story08.png')}}" alt="image" >
              </div>
              <div class="text-center mt-2">
                <a href="contact.html" class="btn white_btn">Detail</a>
              </div>
            </div>
        </div>
        </div>
        <!-- screen slider end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Beautifull-interface-Section end -->
  <!-- Story-Section-Start -->
  <section class="row_am latest_story" id="blog">
    <!-- container start -->
     <div class="container">
         <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
             <h2>Gambar <span>Terpopuler Minggu Ini</span></h2>
             <p>Nikmati keindahan gambar-gambar terpopuler yang dipilih khusus untukmu <br> setiap minggunya.</p>
         </div>
         <!-- row start -->
         <div class="row">
             <!-- story -->
           <div class="col-md-4">
               <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                   <div class="story_img">
                     <img src="{{asset('images/story07.png')}}" style="object-fit: cover" alt="image" width="700px" height="268px">
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
                     <img src="{{asset('images/story02.png')}}" style="object-fit: cover" alt="image" width="700px" height="268px">
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
                     <img src="{{asset('images/story03.png')}}" style="object-fit: cover" alt="image" width="700px" height="268px" >
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
    </div>
    <!-- container end -->
  </section>
  <!-- How-It-Workes-Section-end -->
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

@endsection
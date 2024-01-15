@extends('layouts.app')

@section('content')
<div class="full_bg">

    <div class="container">
       <section class="signup_section">

        <div class="top_part">
          <a href="/" class="back_btn"><i class="icofont-arrow-left"></i> Back</a>
          <a class="navbar-brand" href="#">
            <img src="images/white-logo.png" alt="image">
          </a>
        </div>

        <!-- Comment Form Section -->
        <div class="signup_form">
          <div class="section_title">
            <h2> Welcom to <span>Apper</span> </h2>
            <p>Fill all fields so we can get some info about you. <br> We'll never send you spam</p>
          </div>
          <form action="#">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn puprple_btn" type="submit">SIGN IN</button>
            </div>
          </form>
          <p class="or_block">
            <span>OR</span>
          </p>
         <div class="or_option">
            <p>Sign In with your work email</p>
            <a href="#" class="btn google_btn"><img src="images/google.png" alt="image"> <span>Sign Up with Google</span> </a>
            <p>Don't have an account? <a href="#">Sign Up here</a></p>
         </div>
        </div>
       </section>
    </div>
    
  </div>
@endsection

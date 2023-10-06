@extends('frontend.master')
@section('home')
@section('title')
Register Page | Easy Learning
@endsection

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">Sign Up</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Sign Up</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding position-relative">
    <span class="ring-shape ring-shape-1"></span>
    <span class="ring-shape ring-shape-2"></span>
    <span class="ring-shape ring-shape-3"></span>
    <span class="ring-shape ring-shape-4"></span>
    <span class="ring-shape ring-shape-5"></span>
    <span class="ring-shape ring-shape-6"></span>
    <span class="ring-shape ring-shape-7"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title text-center fs-24 lh-35 pb-4">Create an Account and <br> Start Learning!</h3>
                        <div class="section-block"></div>
    
        <form method="POST"  class="pt-4" action="{{ route('register') }}">
            @csrf

        <div class="d-flex flex-wrap align-items-center pb-4">
            <button class="btn theme-btn flex-grow-1 mx-2 mb-2"><i class="la la-google mr-2"></i>Google</button>
            <button class="btn theme-btn flex-grow-1 mx-2 mb-2"><i class="la la-facebook mr-2"></i>Facebook</button>
            <button class="btn theme-btn flex-grow-1 mx-2 mb-2"><i class="la la-twitter mr-2"></i>Twitter</button>
        </div>
        <div class="text-center pt-3 pb-4">
            <div class="icon-element icon-element-md fs-25 shadow-sm">Or</div>
        </div>
        <div class="input-box">
            <label class="label-text"> Name</label>
            <div class="form-group">
                <input class="form-control form--control" id="name" type="text" name="name" placeholder="First name">
                <span class="la la-user input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Email</label>
            <div class="form-group">
                <input class="form-control form--control" id="email" type="email" name="email" placeholder="email">
                <span class="la la-user input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Password</label>
            <div class="form-group">
                <input class="form-control form--control" id="password" type="password" name="password" placeholder="Username">
                <span class="la la-user input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Confirm Password</label>
            <div class="form-group">
                <input class="form-control form--control" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password">
                <span class="la la-envelope input-icon"></span>
            </div>
        </div><!-- end input-box -->
 
       
        <div class="btn-box">
            <div class="custom-control custom-checkbox mb-2 fs-15">
                <input type="checkbox" class="custom-control-input" id="receiveCheckbox" required>
                <label class="custom-control-label custom--control-label lh-20" for="receiveCheckbox">Yes! I want to get the most out of Aduca by receiving emails with exclusive deals, personal recommendations and learning tips!</label>
            </div><!-- end custom-control -->
            <div class="custom-control custom-checkbox mb-4 fs-15">
                <input type="checkbox" class="custom-control-input" id="agreeCheckbox" required>
                <label class="custom-control-label custom--control-label" for="agreeCheckbox">by signing i agree to the
                    <a href="terms-and-conditions.html" class="text-color hover-underline">terms and conditions</a> and
                    <a href="privacy-policy.html" class="text-color hover-underline">privacy policy</a>
                </label>
            </div><!-- end custom-control -->
            <button class="btn theme-btn" type="submit">Register Account <i class="la la-arrow-right icon ml-1"></i></button>
            <p class="fs-14 pt-2">Already have an account? <a href="{{ route('login') }}" class="text-color hover-underline">Log in</a></p>
        </div><!-- end btn-box -->
    </form>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
       END CONTACT AREA
================================= -->






@endsection
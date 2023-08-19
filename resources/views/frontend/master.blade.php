<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Easy Learning </title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon --> 
    <link rel="icon" sizes="16x16" href="{{ asset('frontend/images/favicon.png') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/tooltipster.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- end inject -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
  @include('frontend.body.header')
<!--======================================
        END HEADER AREA
======================================-->

 @yield('home')

<!-- ================================
         END FOOTER AREA
================================= -->
   @include('frontend.body.footer')
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<div class="tooltip_templates">
    <div id="tooltip_content_1">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Business Intelligence Analyst Course 2021</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_2">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">Ultimate Adobe Photoshop Training: From Beginner to Pro</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_3">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Complete WordPress Website Business Course</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_4">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Ultimate Drawing Course - Beginner to Advanced</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_5">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Complete Digital Marketing Course - 12 Courses in 1</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->


<!-- template js files -->
<script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.js') }}"></script>
<script src="{{ asset('frontend/js/waypoint.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox.js') }}"></script>
<script src="{{ asset('frontend/js/datedropper.min.js') }}"></script>
<script src="{{ asset('frontend/js/emojionearea.min.js') }}"></script>
<script src="{{ asset('frontend/js/tooltipster.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.lazy.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>



</body>
</html>
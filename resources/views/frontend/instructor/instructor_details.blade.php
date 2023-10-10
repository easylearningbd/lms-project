@extends('frontend.master')
@section('home')
@section('title')
{{ $instructor->name }} | Easy Learning
@endsection


<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area py-5 bg-white pattern-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="media media-card align-items-center pb-4">
                <div class="media-img media--img media-img-md rounded-full">
                    <img class="rounded-full" src="{{ (!empty($instructor->photo)) ? url('upload/instructor_images/'.$instructor->photo) : url('upload/no_image.jpg')}}" alt="Student thumbnail image">
                </div>
                <div class="media-body">
                    <h2 class="section__title fs-30">{{ $instructor->name }}</h2>
                    <span class="d-block lh-18 pt-1 pb-2">Joined {{ Carbon\Carbon::parse($instructor->created_at)->diffForHumans()  }}</span>
                    <p class="lh-18">{{ $instructor->email }}</p>
                </div>
            </div><!-- end media -->
 

            <ul class="social-icons social-icons-styled social--icons-styled">
                <li><a href="#"><i class="la la-facebook"></i></a></li>
                <li><a href="#"><i class="la la-twitter"></i></a></li>
                <li><a href="#"><i class="la la-instagram"></i></a></li>
                <li><a href="#"><i class="la la-linkedin"></i></a></li>
                <li><a href="#"><i class="la la-youtube"></i></a></li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START TEACHER DETAILS AREA
================================= -->
<section class="teacher-details-area pt-50px">
    <div class="container">
        <div class="student-details-wrap pb-20px">
            <div class="row">
                <div class="col-lg-4 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-1" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"></path>
                                        </g>
                                    </g>
                                <g>
                                        <g>
                                            <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                                C426.667,241.643,412.309,256,394.667,256z"></path>
                                        </g>
                                    </g>
                                <g>
                                        <g>
                                            <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                                C129.515,241.643,115.157,256,97.515,256z"></path>
                                        </g>
                                    </g>
                                <g>
                                        <g>
                                            <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"></path>
                                        </g>
                                    </g>
                                <g>
                                        <g>
                                            <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"></path>
                                        </g>
                                    </g>
                                <g>
                                        <g>
                                            <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"></path>
                                        </g>
                                    </g>
                            </svg>
                        </div>
                        <h4 class="counter__title counter text-color-2 fs-35">1,515,351</h4>
                        <p class="counter__meta">Total Students</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-2" width="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"  xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M472.208,201.712c9.271-9.037,12.544-22.3,8.544-34.613c-4.001-12.313-14.445-21.118-27.257-22.979l-112.03-16.279
                                                    c-2.199-0.319-4.1-1.7-5.084-3.694L286.28,22.632c-5.729-11.61-17.331-18.822-30.278-18.822c-12.947,0-24.549,7.212-30.278,18.822
                                                    l-50.101,101.516c-0.985,1.993-2.885,3.374-5.085,3.694L58.51,144.12c-12.812,1.861-23.255,10.666-27.257,22.979
                                                    c-4.002,12.313-0.728,25.576,8.544,34.613l81.065,79.019c1.591,1.552,2.318,3.787,1.942,5.978l-19.137,111.576
                                                    c-2.188,12.761,2.958,25.414,13.432,33.024c10.474,7.612,24.102,8.595,35.56,2.572l100.201-52.679
                                                    c1.968-1.035,4.317-1.035,6.286,0l100.202,52.679c4.984,2.62,10.377,3.915,15.744,3.914c6.97,0,13.896-2.184,19.813-6.487
                                                    c10.474-7.611,15.621-20.265,13.432-33.024l-19.137-111.576c-0.375-2.191,0.351-4.426,1.942-5.978L472.208,201.712z
                                                     M362.579,291.276l19.137,111.578c0.64,3.734-1.665,5.863-2.686,6.604c-1.022,0.74-3.76,2.277-7.112,0.513l-100.202-52.679
                                                    c-4.919-2.585-10.315-3.879-15.712-3.879c-5.397,0-10.794,1.294-15.712,3.878l-100.201,52.678
                                                    c-3.354,1.763-6.091,0.228-7.112-0.513c-1.021-0.741-3.327-2.87-2.686-6.604l19.137-111.576
                                                    c1.879-10.955-1.75-22.127-9.711-29.886l-81.065-79.019c-2.713-2.646-2.099-5.723-1.708-6.923
                                                    c0.389-1.201,1.702-4.052,5.451-4.596l112.027-16.279c10.999-1.598,20.504-8.502,25.424-18.471l50.101-101.516
                                                    c1.677-3.397,4.793-3.764,6.056-3.764c1.261,0,4.377,0.366,6.055,3.764v0.001l50.101,101.516
                                                    c4.919,9.969,14.423,16.873,25.422,18.471l112.029,16.279c3.749,0.544,5.061,3.395,5.451,4.596
                                                    c0.39,1.201,1.005,4.279-1.709,6.923l-81.065,79.019C364.329,269.149,360.7,280.321,362.579,291.276z"/>
                                            </g>
                                        </g>
                                <g>
                                            <g>
                                                <path d="M413.783,22.625c-6.036-4.384-14.481-3.046-18.865,2.988l-14.337,19.732c-4.384,6.034-3.047,14.481,2.988,18.865
                                                    c2.399,1.741,5.176,2.58,7.928,2.58c4.177,0,8.295-1.931,10.937-5.567l14.337-19.732
                                                    C421.155,35.456,419.818,27.009,413.783,22.625z"/>
                                            </g>
                                        </g>
                                <g>
                                            <g>
                                                <path d="M131.36,45.265l-14.337-19.732c-4.383-6.032-12.829-7.37-18.865-2.988c-6.034,4.384-7.372,12.831-2.988,18.865
                                                    l14.337,19.732c2.643,3.639,6.761,5.569,10.939,5.569c2.753,0,5.531-0.839,7.927-2.581C134.407,59.747,135.745,51.3,131.36,45.265
                                                    z"/>
                                            </g>
                                        </g>
                                <g>
                                            <g>
                                                <path d="M49.552,306.829c-2.305-7.093-9.924-10.976-17.019-8.671l-23.197,7.538c-7.095,2.305-10.976,9.926-8.671,17.019
                                                    c1.854,5.709,7.149,9.337,12.842,9.337c1.383,0,2.79-0.215,4.177-0.666l23.197-7.538
                                                    C47.975,321.543,51.857,313.924,49.552,306.829z"/>
                                            </g>
                                        </g>
                                <g>
                                            <g>
                                                <path d="M256.005,456.786c-7.459,0-13.506,6.047-13.506,13.506v24.392c0,7.459,6.047,13.506,13.506,13.506
                                                    c7.459,0,13.506-6.047,13.506-13.506v-24.392C269.511,462.832,263.465,456.786,256.005,456.786z"/>
                                            </g>
                                        </g>
                                <g>
                                            <g>
                                                <path d="M502.664,305.715l-23.197-7.538c-7.092-2.303-14.714,1.577-17.019,8.672c-2.305,7.095,1.576,14.714,8.671,17.019
                                                    l23.197,7.538c1.387,0.45,2.793,0.664,4.176,0.664c5.694,0,10.989-3.629,12.843-9.337
                                                    C513.64,315.639,509.758,308.02,502.664,305.715z"/>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                        <h4 class="counter__title counter text-color-3 fs-35">515,351</h4>
                        <p class="counter__meta">Reviews</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-3" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417,8.042,272.667,0,256,0
                                                        s-32.417,8.042-42.438,21.333h-32.229c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.146,42.667,64,61.802,64,85.333v384
                                                        C64,492.865,83.146,512,106.667,512h298.667C428.854,512,448,492.865,448,469.333v-384C448,61.802,428.854,42.667,405.333,42.667
                                                        z M170.667,53.333c0-5.885,4.792-10.667,10.667-10.667h37.917c3.792,0,7.313-2.021,9.208-5.302
                                                        c5.854-10.042,16.146-16.031,27.542-16.031s21.688,5.99,27.542,16.031c1.896,3.281,5.417,5.302,9.208,5.302h37.917
                                                        c5.875,0,10.667,4.781,10.667,10.667V64c0,11.76-9.563,21.333-21.333,21.333H192c-11.771,0-21.333-9.573-21.333-21.333V53.333z
                                                         M426.667,469.333c0,11.76-9.563,21.333-21.333,21.333H106.667c-11.771,0-21.333-9.573-21.333-21.333v-384
                                                        c0-11.76,9.563-21.333,21.333-21.333h42.667c0,23.531,19.146,42.667,42.667,42.667h128c23.521,0,42.667-19.135,42.667-42.667
                                                        h42.667c11.771,0,21.333,9.573,21.333,21.333V469.333z"/>
                                                    <path d="M160,170.667c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                                        C192,185.021,177.646,170.667,160,170.667z M160,213.333c-5.875,0-10.667-4.781-10.667-10.667
                                                        c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667C170.667,208.552,165.875,213.333,160,213.333z"/>
                                                    <path d="M160,277.333c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                                        C192,291.688,177.646,277.333,160,277.333z M160,320c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667
                                                        s10.667,4.781,10.667,10.667C170.667,315.219,165.875,320,160,320z"/>
                                                    <path d="M160,384c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32C192,398.354,177.646,384,160,384z
                                                         M160,426.667c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667
                                                        C170.667,421.885,165.875,426.667,160,426.667z"/>
                                                    <path d="M373.333,192h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                        c5.896,0,10.667-4.771,10.667-10.667C384,196.771,379.229,192,373.333,192z"/>
                                                    <path d="M373.333,298.667h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                        c5.896,0,10.667-4.771,10.667-10.667C384,303.438,379.229,298.667,373.333,298.667z"/>
                                                    <path d="M373.333,405.333h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                        c5.896,0,10.667-4.771,10.667-10.667C384,410.104,379.229,405.333,373.333,405.333z"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                        <h4 class="counter__title counter text-color-4 fs-35">{{ count($courses)}}</h4>
                        <p class="counter__meta">Courses</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end team-single-wrap -->
    </div><!-- end container -->
    <div class="bg-gray py-5">
        <div class="container">
            <ul class="nav nav-tabs generic-tab justify-content-center" id="myTab" role="tablist">

                @auth
                <li class="nav-item">

        <div id="app">
            <send-message :recevierid="{{ $instructor->id }}" receivername="{{ $instructor->name }}"></send-message> 
        </div> 
                </li>
                @else
                <button class="btn theme-btn d-none d-lg-inline-block">Login First</button>
                 
                @endauth
                
                
                <li class="nav-item">
                    <a class="nav-link active" id="about-me-tab" data-toggle="tab" href="#about-me" role="tab" aria-controls="about-me" aria-selected="false">
                        About Me
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">
                        Experience
                    </a>
                </li>
            </ul>
            <div class="tab-content pt-40px" id="myTabContent">
                <div class="tab-pane fade show active" id="about-me" role="tabpanel" aria-labelledby="about-me-tab">
                    <div class="card card-item">
                        <div class="card-body">
                            <p class="card-text pb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corporis est fugiat ipsa laboriosam laudantium possimus quo? Aperiam architecto laborum provident rerum, totam ullam! Accusantium eius eum perferendis quasi, repellendus suscipit voluptate voluptatem! Delectus dolorem maxime nulla numquam quasi quod.</p>
                            <p class="card-text pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque ipsa magnam, magni nobis quam ratione reiciendis totam? Accusantium aliquam aspernatur, assumenda cupiditate deleniti eius, ex fuga iusto minus, nihil perspiciatis porro provident quasi soluta ut! Consequuntur earum eos magnam?</p>
                            <div class="collapse" id="collapseReadMore">
                                <p class="card-text pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur consequuntur dolorem enim error est fuga iure magnam voluptas, voluptates.</p>
                            </div>
                            <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseReadMore" role="button" aria-expanded="false" aria-controls="collapseReadMore">
                                <span class="collapse-btn-hide">Read more<i class="la la-angle-down ml-1 fs-14"></i></span>
                                <span class="collapse-btn-show">Read less<i class="la la-angle-up ml-1 fs-14"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <div class="card card-item">
                        <div class="card-body">
                            <p>
                                There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour,
                                or randomised words which don't look even slightly believable.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                cupiditate deleniti eius, ex fuga iusto minus,
                                nihil perspiciatis porro provident quasi soluta ut! Consequuntur earum eos magnam?
                            </p>
                            <div class="skills-wrap pt-30px">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <span class="fs-16 text-black font-weight-semi-bold pr-3">HTML</span>
                                            <span>99%</span>
                                        </div>
                                        <div class="progress_bg">
                                            <div class="progress_bar"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <span class="fs-16 text-black font-weight-semi-bold pr-3">CSS</span>
                                            <span>99%</span>
                                        </div>
                                        <div class="progress_bg">
                                            <div class="progress_bar"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <span class="fs-16 text-black font-weight-semi-bold pr-3">Javascript</span>
                                            <span>95%</span>
                                        </div>
                                        <div class="progress_bg">
                                            <div class="progress_bar"></div>
                                        </div>
                                    </div>
                                </div><!-- end skills-->
                            </div>
                        </div>
                    </div>
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div>
</section><!-- end teacher-details-area -->
<!-- ================================
       START TEACHER DETAILS AREA
================================= -->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area section-padding">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between pb-3">
            <h3 class="fs-24 font-weight-semi-bold">My courses</h3>
            <span class="ribbon ribbon-lg">{{ count($courses) }}</span>
        </div>
        <div class="divider"><span></span></div>
        <div class="row pt-30px">
           
           
            @foreach ($courses as $course) 
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1{{ $course->id }}">
                    <div class="card-image">
                        <a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}" class="d-block">
                            <img class="card-img-top lazy" src="{{ asset($course->course_image) }}" data-src="{{ asset($course->course_image) }}" alt="Card image cap">
                        </a>

    @php
    $amount = $course->selling_price - $course->discount_price;
    $discount = ($amount/$course->selling_price) * 100;
    @endphp


                        <div class="course-badge-labels">
                            @if ($course->bestseller == 1)
                            <div class="course-badge">Bestseller</div>
                            @else
                            @endif

                     @if ($course->discount_price == NULL)
                    <div class="course-badge blue">New</div>
                    @else
                    <div class="course-badge blue">{{ round($discount) }}%</div>
                    @endif
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
             <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $course->label }}</h6>
                <h5 class="card-title"><a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}">{{ $course->course_name }}</a></h5>
          <p class="card-text"><a href="{{ route('instructor.details',$course->instructor_id) }}">{{ $course['user']['name'] }}</a></p>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            <div class="review-stars">
                                <span class="rating-number">4.4</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star-o"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            @if ($course->discount_price == NULL)
                            <p class="card-price text-black font-weight-bold">${{ $course->selling_price }}  </p>
                            @else
                            <p class="card-price text-black font-weight-bold">${{ $course->discount_price }} <span class="before-price font-weight-medium">${{ $course->selling_price }}</span></p> 
                            @endif

                            
                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            @endforeach

          
        </div><!-- end row -->
        <div class="text-center pt-3">
            <nav aria-label="Page navigation example" class="pagination-box">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="fs-14 pt-2">Showing 1-6 of 24 results</p>
        </div>
    </div><!-- end container -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->


@php
    $courseData = App\Models\Course::get();
@endphp

<!-- tooltip_templates -->
@foreach ($courseData as $item)
     
<div class="tooltip_templates">
    <div id="tooltip_content_1{{ $item->id }}">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">{{ $item['user']['name'] }}</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html"> {{ $item->course_name }}</a></h5>
                <div class="d-flex align-items-center pb-1">
                    @if ($item->bestseller == 1)
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    @else
                    <h6 class="ribbon fs-14 mr-2">New</h6> 
                    @endif
                   
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">{{ $item->created_at->format('M d Y') }}</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>{{ $item->duration }} total hours</li>
                    <li>{{ $item->label }}</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">{{ $item->prerequisites }}</p>

    @php
       $goals = App\Models\Course_goal::where('course_id',$item->id)->orderBy('id','DESC')->get(); 
    @endphp
                <ul class="generic-list-item fs-14 py-3">
                    @foreach ($goals as $goal)
                    <li><i class="la la-check mr-1 text-black"></i> {{ $goal->goal_name }}</li> 
                    @endforeach
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
@endforeach


@endsection
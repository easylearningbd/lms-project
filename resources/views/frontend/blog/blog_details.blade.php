@extends('frontend.master')
@section('home')
@section('title')
{{ $blog->post_title  }} | Easy Learning
@endsection

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area pt-80px pb-80px pattern-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="section-heading pb-3">
                <h2 class="section__title"> {{ $blog->post_title  }}</h2>
            </div>
            <ul class="generic-list-item generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog-no-sidebar.html">Blog</a></li>
                <li>{{ $blog->post_title  }}</li>
            </ul>
            <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center flex-wrap fs-14 pt-2">
                <li class="d-flex align-items-center">By<a href="#">Admin</a></li>
                <li class="d-flex align-items-center"> {{ $blog->created_at->format('M d Y') }} </li>
                <li class="d-flex align-items-center"><a href="#comments" class="page-scroll">4 Comments</a></li>
                <li class="d-flex align-items-center">130 Shares</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card card-item">
                    <div class="card-body">
                        <p class="card-text pb-3"> {!! $blog->long_descp !!} </p>
                       
                     

                        <div class="section-block"></div>
                        <h3 class="fs-18 font-weight-semi-bold pt-3">Tags</h3>
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3">
                            <ul class="generic-list-item generic-list-item-boxed d-flex flex-wrap fs-15">
                                @foreach ($tags_all as $tag)
                                <li class="mr-2"><a href="#">{{ ucwords($tag) }}</a></li>
                                
                                @endforeach
                            </ul>
                            <div class="share-wrap">
                                <ul class="social-icons social-icons-styled">
                                    <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                                    <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                                    <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                                </ul>
                                <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="Toggle to expand social icons"><i class="la la-share-alt"></i></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="instructor-wrap py-5">
                    <h3 class="fs-22 font-weight-semi-bold pb-4">About the author</h3>
                    <div class="media media-card">
                        <div class="media-img rounded-full avatar-lg mr-4">
                            <img src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="Avatar image" class="rounded-full lazy">
                        </div>
                        <div class="media-body">
                            <h5>Alex Smith</h5>
                            <span class="d-block lh-18 pt-2 pb-2">www.techydevs.com</span>
                            <p class="pb-3">I'm a growth-oriented digital marketer with a passion for content marketing, social media marketing wonders, conversion rate optimization, and keyword research. I strongly support permission marketing and earned media. More than anything</p>
                            <ul class="social-icons social-icons-styled social--icons-styled">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-instagram"></i></a></li>
                                <li><a href="#"><i class="la la-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end instructor-wrap -->
                <div class="section-block"></div>
                <div class="comments-wrap pt-5" id="comments">
                    <div class="d-flex align-items-center justify-content-between pb-4">
                        <h3 class="fs-22 font-weight-semi-bold">Comments</h3>
                        <span class="ribbon ribbon-lg">4</span>
                    </div>
                    <div class="comment-list">
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">Kavi arasan</h5>
                                <span class="d-block lh-18 pb-2">a month ago</span>
                                <p class="pb-3">This is one of the best courses I have taken in Udemy. It is very complete, and it has made continue learning about Java and SQL databases as well.</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">Was this review helpful?</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4 review-reply">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-2.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">Jitesh Shaw</h5>
                                <span class="d-block lh-18 pb-2">1 months ago</span>
                                <p class="pb-3">This is one of the best courses I have taken in Udemy. It is very complete, and it has made continue learning about Java and SQL databases as well.</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">Was this review helpful?</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-3.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">Miguel Sanches</h5>
                                <span class="d-block lh-18 pb-2">2 month ago</span>
                                <p class="pb-3">This is one of the best courses I have taken in Udemy. It is very complete, and it has made continue learning about Java and SQL databases as well.</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">Was this review helpful?</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                    </div>
                    <div class="load-more-btn-box text-center pt-3 pb-5">
                        <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30"><i class="la la-refresh mr-1"></i> Load More Comment</button>
                    </div>
                </div>
                <div class="section-block"></div>
                <div class="add-comment-wrap pt-5">
                    <h3 class="fs-22 font-weight-semi-bold pb-4">Add a Comment</h3>
                    <form method="post" class="row">
                        <div class="input-box col-lg-6">
                            <label class="label-text">Name</label>
                            <div class="form-group">
                                <input class="form-control form--control" type="text" name="name" placeholder="Your Name">
                                <span class="la la-user input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-6">
                            <label class="label-text">Email</label>
                            <div class="form-group">
                                <input class="form-control form--control" type="email" name="email" placeholder="Email Address">
                                <span class="la la-envelope input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-12">
                            <label class="label-text">Message</label>
                            <div class="form-group">
                                <textarea class="form-control form--control pl-3" name="message" placeholder="Write Message" rows="5"></textarea>
                            </div>
                        </div><!-- end input-box -->
                        <div class="btn-box col-lg-12">
                            <div class="custom-control custom-checkbox mb-3 fs-15">
                                <input type="checkbox" class="custom-control-input" id="saveCheckbox" required>
                                <label class="custom-control-label custom--control-label" for="saveCheckbox">
                                    Save my name, and email in this browser for the next time I comment.
                                </label>
                            </div><!-- end custom-control -->
                            <button class="btn theme-btn" type="submit">Submit Comment</button>
                        </div><!-- end btn-box -->
                    </form>
                </div><!-- end add-comment-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                 
                    
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Blog Category</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item">
                                @foreach ($bcategory as $cat)
                                <li><a href="{{ url('blog/cat/list/'.$cat->id) }}">{{ $cat->category_name }}</a></li>
                                   
                                @endforeach
                                
                            </ul>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Recent Posts</h3>
                            <div class="divider"><span></span></div>
                           
                           @foreach ($post as $dpost)
                            <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                <a href="{{ url('blog/details/'.$dpost->post_slug) }}" class="media-img">
                                    <img class="mr-3" src="{{ asset($dpost->post_image) }}" alt="Related course image">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15"><a href="{{ url('blog/details/'.$dpost->post_slug) }}">{{ $dpost->post_title }}</a></h5>
                                    <span class="d-block lh-18 py-1 fs-14">Admin </span> 
                                </div>
                            </div><!-- end media --> 
                               
                            @endforeach

                            <div class="view-all-course-btn-box">
                                <a href="blog-no-sidebar.html" class="btn theme-btn w-100">View All Posts <i class="la la-arrow-right icon ml-1"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Sidebar Form</h3>
                            <div class="divider"><span></span></div>
                            <form method="post">
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="Name">
                                    <span class="la la-user input-icon"></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" placeholder="Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form--control pl-3" name="message" rows="4" placeholder="Write message"></textarea>
                                </div>
                                <div class="btn-box">
                                    <button class="btn theme-btn w-100">Contact Author <i class="la la-arrow-right icon ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end card -->
                 
                  
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Connect & Follow</h3>
                            <div class="divider"><span></span></div>
                            <ul class="social-icons social-icons-styled social--icons-styled">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-instagram"></i></a></li>
                                <li><a href="#"><i class="la la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->








@endsection
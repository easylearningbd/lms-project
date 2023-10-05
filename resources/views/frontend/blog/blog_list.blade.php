@extends('frontend.master')
@section('home')

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">  All Blog</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
                
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
<section class="blog-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="row">
                  
                  
   @foreach ($blog as $item)
    <div class="col-lg-6">
        <div class="card card-item">
            <div class="card-image">
                <a href="blog-single.html" class="d-block">
                    <img class="card-img-top lazy" src="{{ asset($item->post_image)  }}" data-src="images/img8.jpg" alt="Card image cap">
                </a>
                <div class="course-badge-labels">
                    <div class="course-badge">{{ $item->created_at->format('M d Y') }}</div>
                </div>
            </div><!-- end card-image -->
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h5>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center flex-wrap fs-14 pt-2">
                    <li class="d-flex align-items-center">By<a href="#">Admin </a></li>
                    <li class="d-flex align-items-center"><a href="#">4 Comments</a></li>
                    <li class="d-flex align-items-center"><a href="#">130 Likes</a></li>
                </ul>
                <div class="d-flex justify-content-between align-items-center pt-3">
                    <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">Read More <i class="la la-arrow-right icon ml-1"></i></a>
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
    </div><!-- end col-lg-6 --> 
    @endforeach       


                     
                </div><!-- end row -->
                <div class="text-center pt-3">
                    <nav aria-label="Page navigation example" class="pagination-box">
                       
                  {{-- {{ $blog->links() }} --}}

                  {{ $blog->links('vendor.pagination.custom') }}

                    </nav>
                    
                </div>
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
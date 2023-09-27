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
                <h2 class="section__title text-white">Checkout</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Checkout</li>
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
<section class="cart-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-22 pb-3">Billing Details</h3>
                        <div class="divider"><span></span></div>
<form method="post" class="row" action="{{ route('payment') }}" enctype="multipart/form-data">
    @csrf

    <div class="input-box col-lg-6">
        <label class="label-text">First Name</label>
        <div class="form-group">
            <input class="form-control form--control" type="text" name="name" value="{{ Auth::user()->name }}">
            <span class="la la-user input-icon"></span>
        </div>
    </div><!-- end input-box -->
    <div class="input-box col-lg-6">
        <label class="label-text">Email</label>
        <div class="form-group">
            <input class="form-control form--control" type="email" name="email" value="{{ Auth::user()->email }}">
            <span class="la la-user input-icon"></span>
        </div>
    </div><!-- end input-box -->
    <div class="input-box col-lg-12">
        <label class="label-text">Address</label>
        <div class="form-group">
            <input class="form-control form--control" type="text" name="address" value="{{ Auth::user()->address }}">
            <span class="la la-envelope input-icon"></span>
        </div>
    </div><!-- end input-box -->
    <div class="input-box col-lg-12">
        <label class="label-text">Phone Number</label>
        <div class="form-group">
            <input id="phone" class="form-control form--control" type="tel" name="phone" value="{{ Auth::user()->phone }}">
        </div>
    </div><!-- end input-box -->
    
    
        

                    </div><!-- end card-body -->
                </div><!-- end card -->
<div class="card card-item">
    <div class="card-body">
        <h3 class="card-title fs-22 pb-3">Select Payment Method</h3>
        <div class="divider"><span></span></div>
        <div class="payment-option-wrap">
            <div class="payment-tab is-active">
                <div class="payment-tab-toggle">
                    <input checked="" id="bankTransfer" name="cash_delivery" type="radio" value="handcash">
                    <label for="bankTransfer">Direct Payment</label>
                </div>
 
                <div class="payment-tab-toggle">
                    <input checked="" id="bankTransfer" name="cash_delivery" type="radio" value="stripe">
                    <label for="bankTransfer">Stripe Payment</label>
                </div>
               
            </div><!-- end payment-tab -->
        
            
        </div>
    </div><!-- end card-body -->
</div><!-- end card -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-22 pb-3">Order Details</h3>
                        <div class="divider"><span></span></div>
                        <div class="order-details-lists">
         
      @foreach ($carts as $item) 
       
      <input type="hidden" name="sulg[]" value="{{ $item->options->slug }}">
      <input type="hidden" name="course_id[]" value="{{ $item->id }}">
      <input type="hidden" name="course_title[]" value="{{ $item->name }}">
      <input type="hidden" name="price[]" value="{{ $item->price }}">
      <input type="hidden" name="instructor_id[]" value="{{ $item->options->instructor }}">



    <div class="media media-card border-bottom border-bottom-gray pb-3 mb-3">
        <a href="{{ url('course/details/'.$item->id.'/'.$item->options->slug) }}" class="media-img">
            <img src="{{ asset($item->options->image) }}" alt="Cart image">
        </a>
        <div class="media-body">
            <h5 class="fs-15 pb-2"><a href="{{ url('course/details/'.$item->id.'/'.$item->options->slug) }}">{{ $item->name }} </a></h5>
            <p class="text-black font-weight-semi-bold lh-18">${{ $item->price }}  </p>
        </div>
    </div><!-- end media -->
    @endforeach     
                         


                        </div><!-- end order-details-lists -->
                        <a href="{{ route('mycart') }}" class="btn-text"><i class="la la-edit mr-1"></i>Edit</a>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-22 pb-3">Order Summary</h3>
                        <div class="divider"><span></span></div>

           @if (Session::has('coupon'))

           <ul class="generic-list-item generic-list-item-flash fs-15">
            <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                <span class="text-black">SubTotal:</span>
                <span>${{ $cartTotal }}</span>
            </li>
            <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                <span class="text-black">Coupon Name:</span>
                <span> {{ session()->get('coupon')['coupon_name'] }}
                ( {{ session()->get('coupon')['coupon_discount'] }} %) </span>
            </li>

            <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                <span class="text-black">Coupon Dicount:</span>
                <span> ${{ session()->get('coupon')['discount_amount'] }}
                 </span>
            </li>

            <li class="d-flex align-items-center justify-content-between font-weight-bold">
                <span class="text-black">Total:</span>
                <span>${{ session()->get('coupon')['total_amount'] }}</span>
            </li>
        </ul>
            <input type="hidden" name="total" value="{{ $cartTotal}}">
           @else

           <ul class="generic-list-item generic-list-item-flash fs-15">
            
            <li class="d-flex align-items-center justify-content-between font-weight-bold">
                <span class="text-black">Total:</span>
                <span>${{ $cartTotal }}</span>
            </li>
            <input type="hidden" name="total" value="{{ $cartTotal}}">
        </ul>
               
           @endif            
                       
                        




                        <div class="btn-box border-top border-top-gray pt-3">
                            <p class="fs-14 lh-22 mb-2">Aduca is required by law to collect applicable transaction taxes for purchases made in certain tax jurisdictions.</p>
                            <p class="fs-14 lh-22 mb-3">By completing your purchase you agree to these <a href="#" class="text-color hover-underline">Terms of Service.</a></p>
                            <button type="submit" class="btn theme-btn w-100">Proceed <i class="la la-arrow-right icon ml-1"></i></button>
                            
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->

</form>
</section>
<!-- ================================
       END CONTACT AREA
================================= -->













@endsection
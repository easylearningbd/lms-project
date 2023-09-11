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
                <h2 class="section__title text-white">Shopping Cart</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Shopping Cart</li>
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
<section class="cart-area section-padding">
    <div class="container">
        <div class="table-responsive">
            <table class="table generic-table">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Course Details</th>
                    <th scope="col">Price</th> 
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="cartPage">
               
                
                </tbody>
            </table>
            <div class="d-flex flex-wrap align-items-center justify-content-between pt-4"> 

                @if(Session::has('coupon'))

                @else 
              
                    {{-- {{ json_encode(Session::get('coupon'), JSON_PRETTY_PRINT) }} --}} 

                <form  action="#">
                    <div class="input-group mb-2" id="couponField">
                        <input class="form-control form--control pl-3" type="text"  id="coupon_name" placeholder="Coupon code">
                        <div class="input-group-append">
                            
                      <a type="submit" onclick="applyCoupon()" class="btn theme-btn">Apply Code</a>      
                        </div>
                    </div>
                </form>
               @endif

                
                
            </div>
        </div>
        <div class="col-lg-4 ml-auto">
            <div class="bg-gray p-4 rounded-rounded mt-40px">
                <h3 class="fs-18 font-weight-bold pb-3">Cart Totals</h3>
                <div class="divider"><span></span></div>
                <ul class="generic-list-item pb-4">
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Subtotal:$</span>
                        <span id="cartSubTotal"> </span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Total:$</span>
                        <span id="cartSubTotal"> </span>
                    </li>
                </ul>
                <a href="checkout.html" class="btn theme-btn w-100">Checkout <i class="la la-arrow-right icon ml-1"></i></a>
            </div>
        </div>
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->







@endsection


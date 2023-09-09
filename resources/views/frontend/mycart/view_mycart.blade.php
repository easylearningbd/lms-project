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
                    <th scope="col">Product Details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">
                        <div class="media media-card">
                            <a href="course-details.html" class="media-img mr-0">
                                <img src="images/small-img.jpg" alt="Cart image">
                            </a>
                        </div>
                    </th>
                    <td>
                        <a href="course-details.html" class="text-black font-weight-semi-bold">The Complete Financial Analyst Course 2019</a>
                        <p class="fs-14 text-gray lh-20">By <a href="teacher-detail.html" class="text-color hover-underline">Mark Hardson</a>, Master Digital Marketing: Strategy, Social Media Marketing, SEO, YouTube, Email, Facebook Marketing, Analytics &amp; More!</p>
                    </td>
                    <td>
                        <ul class="generic-list-item font-weight-semi-bold">
                            <li class="text-black lh-18">$22.99</li>
                            <li class="before-price lh-18">$55.99</li>
                        </ul>
                    </td>
                    <td>
                        <div class="quantity-item d-flex align-items-center">
                            <button class="qtyBtn qtyDec"><i class="la la-minus"></i></button>
                            <input class="qtyInput" type="text" name="qty-input" value="1">
                            <button class="qtyBtn qtyInc"><i class="la la-plus"></i></button>
                        </div>
                    </td>
                    <td>
                        <button type="button" class="icon-element icon-element-xs shadow-sm border-0" data-toggle="tooltip" data-placement="top" title="Remove">
                            <i class="la la-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="media media-card">
                            <a href="course-details.html" class="media-img mr-0">
                                <img src="images/small-img.jpg" alt="Cart image">
                            </a>
                        </div>
                    </th>
                    <td>
                        <a href="course-details.html" class="text-black font-weight-semi-bold">The Complete Financial Analyst Course 2019</a>
                        <p class="fs-14 text-gray lh-20">By <a href="teacher-detail.html" class="text-color hover-underline">Mark Hardson</a>, Master Digital Marketing: Strategy, Social Media Marketing, SEO, YouTube, Email, Facebook Marketing, Analytics &amp; More!</p>
                    </td>
                    <td>
                        <ul class="generic-list-item font-weight-semi-bold">
                            <li class="text-black lh-18">$22.99</li>
                            <li class="before-price lh-18">$55.99</li>
                        </ul>
                    </td>
                    <td>
                        <div class="quantity-item d-flex align-items-center">
                            <button class="qtyBtn qtyDec"><i class="la la-minus"></i></button>
                            <input class="qtyInput" type="text" name="qty-input" value="1">
                            <button class="qtyBtn qtyInc"><i class="la la-plus"></i></button>
                        </div>
                    </td>
                    <td>
                        <button type="button" class="icon-element icon-element-xs shadow-sm border-0" data-toggle="tooltip" data-placement="top" title="Remove">
                            <i class="la la-times"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="d-flex flex-wrap align-items-center justify-content-between pt-4">
                <form method="post">
                    <div class="input-group mb-2">
                        <input class="form-control form--control pl-3" type="text" name="search" placeholder="Coupon code">
                        <div class="input-group-append">
                            <button class="btn theme-btn">Apply Code</button>
                        </div>
                    </div>
                </form>
                <a href="#" class="btn theme-btn mb-2">Update Cart</a>
            </div>
        </div>
        <div class="col-lg-4 ml-auto">
            <div class="bg-gray p-4 rounded-rounded mt-40px">
                <h3 class="fs-18 font-weight-bold pb-3">Cart Totals</h3>
                <div class="divider"><span></span></div>
                <ul class="generic-list-item pb-4">
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Subtotal:</span>
                        <span>$44.99</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Total:</span>
                        <span>$44.99</span>
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


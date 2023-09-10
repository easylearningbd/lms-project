<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\SubCategory;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;


class CouponController extends Controller
{
    public function AdminAllCoupon(){

        $coupon = Coupon::latest()->get();
        return view('admin.backend.coupon.coupon_all',compact('coupon'));

    } /// End Method 

    public function AdminAddCoupon(){
        return view('admin.backend.coupon.coupon_add');
    }/// End Method 

    public function AdminStoreCoupon(Request $request){
        
        Coupon::insert([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Coupon Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.all.coupon')->with($notification);  


    }/// End Method 




} 

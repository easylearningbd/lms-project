@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"> 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Coupon </li>
                </ol>
            </nav>
        </div>
         
    </div>
    <!--end breadcrumb-->
 
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Coupon</h5>
            <form id="myForm" action="{{ route('admin.store.coupon') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf

                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">Coupon Name</label>
                    <input type="text" name="coupon_name" class="form-control" id="input1"  >
                </div>
 
                <div class="form-group col-md-6">
                    <label for="input2" class="form-label">Coupon Discount </label>
                    <input class="form-control" name="coupon_discount" type="text"  >
                </div>

                <div class="form-group col-md-6">
                    <label for="input2" class="form-label">Coupon Validity Date </label>
                    <input class="form-control" name="coupon_validity" type="date" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" >
                </div>

               
             
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
          <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                      
                    </div>
                </div>
            </form>
        </div>
    </div>


   
   
</div>

 
 


@endsection
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
                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
            </nav>
        </div>
         
    </div>
    <!--end breadcrumb-->
 
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Category</h5>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="input1" class="form-label">Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="input1"  >
                </div>

                <div class="col-md-6">
                </div>

                <div class="col-md-6">
                    <label for="input2" class="form-label">Category Image </label>
                    <input class="form-control" type="file" id="image">
                </div>

                <div class="col-md-6"> 
                    <img id="showImage" src="{{ url('upload/no_image.jpg')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80"> 

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
 
<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


@endsection
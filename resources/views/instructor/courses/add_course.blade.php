@extends('instructor.instructor_dashboard')
@section('instructor')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"> 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Course</li>
                </ol>
            </nav>
        </div>
         
    </div>
    <!--end breadcrumb-->
 
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Course</h5>
            
            <form id="myForm" action="{{ route('store.category') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf

                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">Course Name</label>
                    <input type="text" name="course_name" class="form-control" id="input1"  >
                </div>

                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">Course Title </label>
                    <input type="text" name="course_title" class="form-control" id="input1"  >
                </div>

                 

                <div class="form-group col-md-6">
                    <label for="input2" class="form-label">Course Image </label>
                    <input class="form-control" name="course_image" type="file" id="image">
                </div>

                <div class="col-md-6"> 
                    <img id="showImage" src="{{ url('upload/no_image.jpg')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="100">  
                </div>

                
                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">Course Intro Video </label>
                    <input type="file" name="video" class="form-control"  accept="video/mp4, video/webm" >
                </div>

                <div class="form-group col-md-6">

                </div>

            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Course Category </label>
                <select name="category_id" class="form-select mb-3" aria-label="Default select example">
                    <option selected="" disabled>Open this select menu</option>
                    @foreach ($categories as $cat) 
                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                    @endforeach
                    
                </select>
            </div>


            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Course Subcategory </label>
                <select name="category_id" class="form-select mb-3" aria-label="Default select example">
                    <option selected="" disabled>Open this select menu</option> 
                    
                </select>
            </div>


            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Certificate Available </label>
                <select name="certificate" class="form-select mb-3" aria-label="Default select example">
               <option selected="" disabled>Open this select menu</option> 
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>


            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Course Price </label>
                <input type="text" name="selling_price" class="form-control" id="input1"  >
            </div>


            <div class="form-group col-md-4">
                <label for="input1" class="form-label">Discount Price </label>
                <input type="text" name="discount_price" class="form-control" id="input1"  >
            </div>


            <div class="form-group col-md-4">
                <label for="input1" class="form-label">Duration </label>
                <input type="text" name="duration" class="form-control" id="input1"  >
            </div>


            <div class="form-group col-md-4">
                <label for="input1" class="form-label">Resources </label>
                <input type="text" name="resources" class="form-control" id="input1"  >
            </div>

            <div class="form-group col-md-12">
                <label for="input1" class="form-label">Course Prerequisites </label>
                <textarea name="prerequisites" class="form-control" id="input11" placeholder="Address ..." rows="3"></textarea>
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_name: {
                    required : true,
                }, 
                image: {
                    required : true,
                }, 
                
            },
            messages :{
                category_name: {
                    required : 'Please Enter Category Name',
                }, 
                image: {
                    required : 'Please Select Category Image',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
 
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
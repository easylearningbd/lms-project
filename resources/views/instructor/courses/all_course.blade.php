@extends('instructor.instructor_dashboard')
@section('instructor')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"> 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Course</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
           <a href="{{ route('add.course') }}" class="btn btn-primary px-5">Add Course </a>  
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
  
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image </th>
                            <th>Course Name</th> 
                            <th>Category</th> 
                            <th>Price</th> 
                            <th>Discount</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($courses as $key=> $item) 
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> <img src="{{ asset($item->course_image) }}" alt="" style="width: 70px; height:40px;"> </td>
                            <td>{{ $item->course_name }}</td> 
                            <td>{{ $item['category']['category_name'] }}</td> 
                            <td>{{ $item->selling_price }}</td> 
                            <td>{{ $item->discount_price }}</td> 
                            <td>
       <a href="{{ route('edit.course',$item->id) }}" class="btn btn-info" title="Edit"><i class="lni lni-eraser"></i> </a>   
       <a href="{{ route('delete.course',$item->id) }}" class="btn btn-danger" id="delete" title="delete"><i class="lni lni-trash"></i> </a>  
       <a href="{{ route('add.course.lecture',$item->id) }}" class="btn btn-warning" title="Lecture"><i class="lni lni-list"></i> </a>                    
                            </td>
                        </tr>
                        @endforeach
                         
                    </tbody>
                     
                </table>
            </div>
        </div>
    </div>


   
   
</div>
 



@endsection
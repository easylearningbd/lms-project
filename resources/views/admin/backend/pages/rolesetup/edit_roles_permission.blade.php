@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<style>
    .form-check-label{
        text-transform: capitalize;
    }
</style>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"> 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Role In Permission</li>
                </ol>
            </nav>
        </div>
         
    </div>
    <!--end breadcrumb-->
 
    <div class="card">
        <div class="card-body p-4">
            
            <form id="myForm" action="{{ route('admin.roles.update',$role->id) }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf
 
                <div class="form-group col-md-6">
                    <label for="input1" class="form-label"> Roles Name</label>
            <h4>{{ $role->name }}</h4>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckMain">
                    <label class="form-check-label" for="flexCheckMain">Permission All </label>
                </div>

<hr>

@foreach ($permission_groups as $group)
<div class="row">
    <div class="col-3">

        @php
            $permissions = App\Models\User::getpermissionByGroupName($group->group_name)
        @endphp

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" {{ App\Models\User::roleHasPermissions($role,$permissions) ? 'checked' : '' }} >
            <label class="form-check-label" for="flexCheckDefault"> {{ $group->group_name }}</label>
        </div>

    </div>

    <div class="col-9">
        

        @foreach ($permissions as $permission)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="checkDefault{{ $permission->id }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
            
            <label class="form-check-label" for="checkDefault{{ $permission->id }}">{{ $permission->name }}</label>
        </div> 
        @endforeach
        <br>

    </div>

</div>
 {{-- // end row --}} 
    
@endforeach

 
 
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
          <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                      
                    </div>
                </div>
            </form>
        </div>
    </div>


   
   
</div>
 

<script>
    $('#flexCheckMain').click(function(){
        if ($(this).is(':checked')) {
          $('input[ type=checkbox]').prop('checked',true)  
        }else{
            $('input[ type=checkbox]').prop('checked',false)  
        }
    });
</script>


@endsection
@extends('instructor.instructor_dashboard')
@section('instructor')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">

    <div class="row">
        <div class="col-12"> 
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset($course->course_image) }}" class="rounded-circle p-1 border" width="90" height="90" alt="...">
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mt-0">{{ $course->course_name }}</h5>
                            <p class="mb-0">{{$course->course_title}}</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Section</button>
                    </div>
                </div>
            </div>

            {{-- /// Add Section and Lecture  --}}
      @foreach ($section as $key => $item )  
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-4 d-flex justify-content-between">
                            <h6>{{ $item->section_title }} </h6>
      
         <div class="d-flex justify-content-between align-items-center">

        <form action="{{ route('delete.section', ['id' => $item->id]) }}" method="POST">
            @csrf

        <button type="submit" class="btn btn-danger px-2 ms-auto"> Delete Section</button> &nbsp;

       </form>


        <a class="btn btn-primary" onclick="addLectureDiv({{ $course->id }}, {{ $item->id }}, 'lectureContainer{{ $key }}' )" id="addLectureBtn($key)"> Add Lecture </a>

        </div>                      

               </div>


               <div class="courseHide" id="lectureContainer{{ $key }}">
                <div class="container">
                  @foreach ($item->lectures as $lecture) 
                    <div class="lectureDiv mb-3 d-flex align-items-center justify-content-between">
    <div>
        <strong> {{ $loop->iteration }}. {{ $lecture->lecture_title }}</strong>
    </div>

                        <div class="btn-group">
          <a href="{{ route('edit.lecture',['id' => $lecture->id]) }}" class="btn btn-sm btn-primary">Edit</a> &nbsp;
           <a href="{{ route('delete.lecture',['id' => $lecture->id]) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>

                        </div> 
                    </div> 
                    @endforeach 

                </div> 
               </div>






                    </div>

                </div>

            </div>
        </div>

    </div>
    @endforeach   
             
              {{-- /// End Add Section and Lecture  --}}
            
            
            
            
            
        </div>
    </div> 

</div>   


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Section </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
                
         <form action="{{ route('add.course.section') }}" method="POST">
            @csrf

            <input type="hidden" name="id" value="{{ $course->id }}">

            <div class="form-group mb-3">
                <label for="input1" class="form-label">Course Section</label>
                <input type="text" name="section_title" class="form-control" id="input1"  >
            </div>


            </div>
            <div class="modal-footer">   
       <button type="submit" class="btn btn-primary">Save changes</button> 
            </div>
        </form>

        </div>
    </div>
</div>

 

<script>
    function addLectureDiv(courseId, sectionId, containerId) {
        const lectureContainer = document.getElementById(containerId);

        const newLectureDiv = document.createElement('div');
        newLectureDiv.classList.add('lectureDiv','mb-3');

        newLectureDiv.innerHTML = `
        <div class="container">
    <h6>Lecture Title </h6>
    <input type="text" class="form-control" placeholder="Enter Lecture Title">
    <textarea class="form-control mt-2" placeholder="Enter Lecture Content"  ></textarea>

    <h6 class="mt-3">Add Video Url</h6>
    <input type="text" name="url" class="form-control" placeholder="Add URL">

    <button class="btn btn-primary mt-3" onclick="saveLecture('${courseId}',${sectionId},'${containerId}')" >Save Lecture</button>
    <button class="btn btn-secondary mt-3" onclick="hideLectureContainer('${containerId}')">Cancel</button>
</div> 
     `;

     lectureContainer.appendChild(newLectureDiv);

    }

    function hideLectureContainer(containerId) {
        const lectureContainer = document.getElementById(containerId);
        lectureContainer.style.display = 'none';
        location.reload();
    }

</script>


<script>
    function saveLecture(courseId, sectionId, containerId){
        const lectureContainer = document.getElementById(containerId);
        const lectureTitle = lectureContainer.querySelector('input[type="text"]').value;
        const lectureContent = lectureContainer.querySelector('textarea').value;
        const lectureUrl = lectureContainer.querySelector('input[name="url"]').value;

        fetch('/save-lecture', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                course_id: courseId,
                section_id: sectionId,
                lecture_title: lectureTitle,
                lecture_url: lectureUrl,
                content: lectureContent,
            }),
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);


            lectureContainer.style.display = 'none';
            location.reload();

               // Start Message 

               const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  icon: 'success', 
                  showConfirmButton: false,
                  timer: 6000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    title: data.success, 
                    })

            }else{
               
           Toast.fire({
                    type: 'error',
                    title: data.error, 
                    })
                }

              // End Message  

        })
        .catch(error => {
            console.error(error);
        });
    }
</script>

@endsection
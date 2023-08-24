<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Course;
use App\Models\Course_goal;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth; 

class CourseController extends Controller
{
    public function AllCourse(){
 
      $id = Auth::user()->id;
      $courses = Course::where('instructor_id',$id)->orderBy('id','desc')->get();
        return view('instructor.courses.all_course',compact('courses'));

    }// End Method 

    public function AddCourse(){

        $categories = Category::latest()->get();
        return view('instructor.courses.add_course',compact('categories'));

    }// End Method 


    public function GetSubCategory($category_id){

        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);

    }// End Method 

    public function StoreCourse(Request $request){

        $request->validate([
            'video' => 'required|mimes:mp4|max:10000',
        ]);

        $image = $request->file('course_image');  
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,246)->save('upload/course/thambnail/'.$name_gen);
        $save_url = 'upload/course/thambnail/'.$name_gen;

        $video = $request->file('video');  
        $videoName = time().'.'.$video->getClientOriginalExtension();
        $video->move(public_path('upload/course/video/'),$videoName);
        $save_video = 'upload/course/video/'.$videoName;

    }// End Method 




} 

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseSection;
use App\Models\Question;
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;

class QuestionController extends Controller
{
    public function UserQuestion(Request $request){

        $course_id = $request->course_id;
        $instructor_id = $request->instructor_id;

        Question::insert([
            'course_id' => $course_id,
            'user_id' => Auth::user()->id,
            'instructor_id' => $instructor_id,
            'subject' => $request->subject,
            'question' => $request->question,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Message Send Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);  

    } // End Method 





}

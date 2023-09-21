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

    public function InstructorAllQuestion(){

        $id = Auth::user()->id;
        $question = Question::where('instructor_id',$id)->where('parent_id', null)->orderBy('id','desc')->get();
        return view('instructor.question.all_question',compact('question'));

    }// End Method 

    public function QuestionDetails($id){

        $question = Question::find($id);
        return view('instructor.question.question_details',compact('question'));

    }// End Method 



}

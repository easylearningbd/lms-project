<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function InstructorDashboard(){
        return view('instructor.instructor_dashboard');
    } // End Mehtod 

}

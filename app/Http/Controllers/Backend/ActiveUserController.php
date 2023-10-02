<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ActiveUserController extends Controller
{
    public function AllUser(){
        $users = User::where('role','user')->latest()->get();
        return view('admin.backend.user.user_all',compact('users'));

    }// End Method 


    public function AllInstructor(){
        $users = User::where('role','instructor')->latest()->get();
        return view('admin.backend.user.instructor_all',compact('users'));

    }// End Method 




}
 
<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogController extends Controller
{
   public function AllBlogCategory(){

    $category = BlogCategory::latest()->get();
    return view('admin.backend.blogcategory.blog_category',compact('category'));

   }// End Method 





} 

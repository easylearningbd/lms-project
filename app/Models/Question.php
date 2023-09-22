<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function course(){
        return $this->belongsTo(Course::class, 'course_id' ,'id');
    }
 
 
    public function user(){
        return $this->belongsTo(User::class, 'user_id' ,'id');
    }

    public function instructor(){
        return $this->belongsTo(User::class, 'instructor_id' ,'id');
    }


}

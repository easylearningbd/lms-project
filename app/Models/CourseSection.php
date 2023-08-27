<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lectures(){
        return $this->hasMany(CourseLecture::class, 'section_id');
    }

}

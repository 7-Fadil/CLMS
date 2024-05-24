<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOfStudy extends Model
{
    use HasFactory;
    //protected fillable
    protected $fillable=[
        'uuid',
        'department_uuid',
        'course_of_study',
        'short_name',
        'status'
    ];
    //relationship between course of study and department
    public function couseOfStudy()
    {
        return $this->belongsTo(Department::class, 'department_uuid', 'uuid');
        return $this->hasMany(Curriculum::class, 'courseOfStudy_uuid', 'uuid');
    }

}

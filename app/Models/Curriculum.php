<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable=[
        'uuid',
        'depatment_uuid',
        'courseOfStudy_uuid',
        'course_title',
        'course_code',
        'status'
    ];
    public function curriculum()
    {
        return $this->belongsTo(CourseOfStudy::class, 'courseOfStudy_uuid', 'uuid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=[
        'uuid',
        'department_name'
    ];
    //relationship between course of study and department
    public function department()
    {
        return $this->hasMany(CourseOfStudy::class, 'department_uuid', 'uuid');
    }
}

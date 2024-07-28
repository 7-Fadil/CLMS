<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    /**
     * Get the department associated with the Department
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departments(): HasOne
    {
        return $this->hasOne(Faculty::class, 'faculty_uuid', 'uuid');
    }
}

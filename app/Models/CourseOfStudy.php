<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->hasMany(Curriculum::class, 'courseOfStudy_uuid', 'uuid');
    }

    /**
     * Get the department that owns the CourseOfStudy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_uuid', 'uuid');
    }

}

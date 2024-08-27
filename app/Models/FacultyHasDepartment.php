<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyHasDepartment extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasOne(Department::class, 'uuid', 'department_uuid');
    }
}

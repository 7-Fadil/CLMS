<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'student_login_uuid',
        'firstname',
        'surname',
        'othername',
        'matric_number',
        'gender',
        'birth_date',
        'phone_number',
        'email_address',
        'residencial_address',
        'nok_name',
        'nok_address',
        'nok_phone_number',
        'state_id',
        'lga_id',
        'faculty_uuid',
        'department_uuid',
        'photo_path',
        'is_active'
    ];

    /**
     * Get the department that owns the StudentProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_uuid', 'uuid');
    }

    /**
     * Get the faculty that owns the StudentProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class, 'faculty_uuid', 'uuid');
    }
}

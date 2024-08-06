<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'faculty_name',
        'faculty_short_code_name'
    ];

    /**
     * Get all of the department for the Faculty
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function department(): HasMany
    {
        return $this->hasMany(Department::class, 'faculty_uuid', 'uuid');
    }

}

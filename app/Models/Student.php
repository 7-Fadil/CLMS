<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guard='student';

    protected $fillable = [
        'uuid',
        'first_name',
        'surname',
        'other_name',
        'email_address',
        'matric_number',
        'password',
        'status'
    ];

    /**
     * Get all of the borrowedBooks for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function borrowedBooks(): HasMany
    {
        return $this->hasMany(BorrowBooks::class, 'student_id', 'uuid');
    }

}

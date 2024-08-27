<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'book_title',
        'author',
        'reservation_date',
        'numbers_of_copies',
        'reservation_duration',
        'student_id',
        'notes',
        'book_format',
        'status'
    ];
}

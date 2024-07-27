<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'books_category_uuid',
        'books_name',
        'isbn_number',
        'author',
        'book_img',
        'is_active'
    ];
}

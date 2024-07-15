<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'bookCategory_uuid',
        'book_name',
        'isbn_number',
        'author',
        'book_img'
    ];

    /**
     * Get the bookCategory that owns the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book(): BelongsTo
    {
        return $this->belongsTo(bookCategory::class, 'bookCategory_uuid', 'uuid');
    }
}

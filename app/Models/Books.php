<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    /**
     * Get the user that owns the Books
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function books(): BelongsTo
    {
        return $this->belongsTo(BookCategory::class, 'books_category_uuid', 'uuid');
    }
}

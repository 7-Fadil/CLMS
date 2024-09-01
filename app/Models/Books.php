<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'book_pdf',
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

    public function isAvailable()
    {
        return $this->is_active === 1;
    }

    /**
     * Get all of the borrowedBooks for the Books
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function borrowedBooks(): HasMany
    {
        return $this->hasMany(BorrowBooks::class, 'book_id', 'uuid');
    }

    /**
     * Get the borrowed that owns the Books
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function borrowed(): BelongsTo
    {
        return $this->belongsTo(BorrowBooks::class, 'book_id', 'uuid');
    }

    public function borrowedBook($studentUuid)
    {
        return BorrowBooks::whereStudentId($studentUuid)
                            ->latest()->first();
    }
    // public function borrowedBooksLastest()
    // {
    //     return $this->hasOne(BorrowBooks::class, 'book_id', 'uuid')->latestOfMany();
    // }
}

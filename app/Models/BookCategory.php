<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'book_category_name'
    ];

    /**
     * Get all of the book for the BookCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookCategory(): HasMany
    {
        return $this->hasMany(Book::class, 'bookcategory_uuid', 'uuid');
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BorrowBooks extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'book_id',
        'student_id',
        'borrow_date',
        'due_date',
        'status'
    ];

    //Route binding
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'uuid', $value)->firstOrFail();
    }

    /**
     * Get the books that owns the BorrowBooks
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function books(): BelongsTo
    {
        return $this->belongsTo(Books::class, 'book_id', 'uuid');
    }

    /**
     * Get all of the book for the BorrowBooks
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function book(): HasMany
    {
        return $this->hasMany(Books::class, 'student_id', 'uuid');
    }

    /**
     * Get the borrowedBooks that owns the BorrowBooks
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id', 'uuid');
    }

    public function scopeOverdue($query)
    {
        return $query->where('due_date', '<', Carbon::now())->where('status', 0);
    }


}

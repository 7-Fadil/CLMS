<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearRegistration extends Model
{
    use HasFactory;

    protected $fillable=[
        'uuid',
        'year_name',
        'is_active'
    ];
}

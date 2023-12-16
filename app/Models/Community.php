<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
   use HasFactory;

    protected $fillable = [
        'title',
        'map_location',
        'availability',
        'saving',
        'status',
        'credit_score',
        'description',
        '_token', 
        'user_id',
    ];
}

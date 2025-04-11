<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'location',
        'price',
        'name',
        'description',
        'specification',
    ];

    protected $casts = [
        'description' => 'array', // since it's stored as JSON
        'specification' => 'array',
    ];
}

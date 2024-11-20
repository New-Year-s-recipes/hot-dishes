<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'time_image',
        'time',
        'difficulty_image',
        'difficulty',
        'image_path',
    ];
}

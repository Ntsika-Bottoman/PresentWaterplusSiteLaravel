<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

        protected $fillable = [
        'name',
        'director',
        'director1',
        'director2',
        'director3',
        'director4',
        'director5',
        'director6',
        'poster',
        'price'
    ];
}
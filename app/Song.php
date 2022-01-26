<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    
    protected $fillable = [
        'title',
        'length',
        'single',
        'cover',
        'lyrics',
        'genre',
        'explicit',
        'release_date',
        'price',
        'ratings',
    ];
}

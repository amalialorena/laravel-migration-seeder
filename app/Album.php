<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
    'title',
    'views',
    'sells',
    'release_date',
    'cover',
    'label',
    ];
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'name', 
    'lastname', 
    'stage_name', 
    'birth_date',
    'awards',
    'bio',
    ];
    
}

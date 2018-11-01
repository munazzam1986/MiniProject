<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = [
        'Make', 'Model', 'Year',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    protected $fillable = [
        'text', 'title',
    ];
}

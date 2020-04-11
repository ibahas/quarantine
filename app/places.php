<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    //
    protected $table = 'places';

    protected $fillable = [
        'name',
        'date',
        'sick',
        'user'
    ];
}

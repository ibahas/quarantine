<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class healthstatus extends Model
{
    //
    protected $table = 'healthstatuses';

    protected $fillable = [
        'date',
        'details',
        'sick',
        'status',
        'user'
    ];
}

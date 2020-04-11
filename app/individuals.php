<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class individuals extends Model
{
    //
    protected $table = 'individuals';

    protected $fillable = [
        'sick',
        'name',
        'user'

    ];
}

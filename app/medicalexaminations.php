<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalexaminations extends Model
{
    //
    protected $table = 'medicalexaminations';

    protected $fillable = [
        'name',
        'details',
        'sick',
        'user'

    ];
}

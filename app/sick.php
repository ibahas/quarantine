<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sick extends Model
{
    //
    protected $table = 'sicks';

    protected $dates = ['deleted_at'];

    use SoftDeletes;

    protected $fillable = [
        'name',
        'bod',
        'city',
        'address',
        'personalstatus',
        'gender',
        'status',
        'user',
    ];
}

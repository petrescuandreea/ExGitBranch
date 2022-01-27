<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [

        'name',
        'surname',
        'assumption_date',
        'wage',
        'bonus'
    ];
}

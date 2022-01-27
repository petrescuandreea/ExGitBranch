<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

        'name',
        'surname', 
        'assumption_date',
        'cf',
        'wage',
        'role'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
  
    protected $table = 'informations'; 

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'objectives',
        'birthday',
        'birthplace',
        'age',
        'religion',
        'civil_status',
        'citizenship',
        'education',
        'skills',
        'awards',
    ];
}


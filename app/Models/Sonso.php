<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sonso extends Model
{
    protected $table = 'sonso';

    protected $fillable = [
        'email', 'password',
    ];

}

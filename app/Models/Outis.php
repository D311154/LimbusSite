<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outis extends Model
{
    protected $table = 'outis';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

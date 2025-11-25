<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faust extends Model
{
    protected $table = 'faust';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

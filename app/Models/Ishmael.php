<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ishmael extends Model
{
    protected $table = 'ishmael';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

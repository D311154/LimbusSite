<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meursault extends Model
{
    protected $table = 'meursault';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

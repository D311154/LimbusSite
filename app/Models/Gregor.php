<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gregor extends Model
{
    protected $table = 'gregor';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

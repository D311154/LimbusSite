<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rodion extends Model
{
    protected $table = 'rodion';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

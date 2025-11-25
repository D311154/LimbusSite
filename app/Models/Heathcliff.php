<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heathcliff extends Model
{
    protected $table = 'heathcliff';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

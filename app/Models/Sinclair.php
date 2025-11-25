<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sinclair extends Model
{
    protected $table = 'sinclair';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

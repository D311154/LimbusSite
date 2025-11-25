<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ryoshu extends Model
{
    protected $table = 'ryoshu';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

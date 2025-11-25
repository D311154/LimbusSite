<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YiSang extends Model
{
    protected $table = 'yi_sang';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HongLu extends Model
{
    protected $table = 'hong_lu';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

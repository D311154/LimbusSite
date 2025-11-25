<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonQuixote extends Model
{
    protected $table = 'don_quixote';
    public $timestamps = false;

    protected $fillable = [
        'Identity',
    ];
}

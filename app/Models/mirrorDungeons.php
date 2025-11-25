<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mirrorDungeons extends Model
{
    protected $fillable = [
        'floor',
        'difficulty',
        'adversity',
        'keyword',
        'YiSangId',
        'FaustId',
        'DonQuixoteId',
        'RyoshuId',
        'MeursaultId',
        'HongLuId',
        'HeathcliffId',
        'IshmaelId',
        'RodionId',
        'SinclairId',
        'OutisId',
        'GregorId',
    ];
}

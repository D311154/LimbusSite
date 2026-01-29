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
        'YiSangBenched',
        'FaustId',
        'FaustBenched',
        'DonQuixoteId',
        'DonQuixoteBenched',
        'RyoshuId',
        'RyoshuBenched',
        'MeursaultId',
        'MeursaultBenched',
        'HongLuId',
        'HongLuBenched',
        'HeathcliffId',
        'HeathcliffBenched',
        'IshmaelId',
        'IshmaelBenched',
        'RodionId',
        'RodionBenched',
        'SinclairId',
        'SinclairBenched',
        'OutisId',
        'OutisBenched',
        'GregorId',
        'GregorBenched',
    ];

    public function yiSang()
    {
        return $this->belongsTo(YiSang::class, 'YiSangId');
    }

    public function faust()
    {
        return $this->belongsTo(Faust::class, 'FaustId');
    }

    public function donQuixote()
    {
        return $this->belongsTo(DonQuixote::class, 'DonQuixoteId');
    }

    public function ryoshu()
    {
        return $this->belongsTo(Ryoshu::class, 'RyoshuId');
    }

    public function meursault()
    {
        return $this->belongsTo(Meursault::class, 'MeursaultId');
    }

    public function hongLu()
    {
        return $this->belongsTo(HongLu::class, 'HongLuId');
    }

    public function heathcliff()
    {
        return $this->belongsTo(Heathcliff::class, 'HeathcliffId');
    }

    public function ishmael()
    {
        return $this->belongsTo(Ishmael::class, 'IshmaelId');
    }

    public function rodion()
    {
        return $this->belongsTo(Rodion::class, 'RodionId');
    }

    public function sinclair()
    {
        return $this->belongsTo(Sinclair::class, 'SinclairId');
    }

    public function outis()
    {
        return $this->belongsTo(Outis::class, 'OutisId');
    }

    public function gregor()
    {
        return $this->belongsTo(Gregor::class, 'GregorId');
    }
}

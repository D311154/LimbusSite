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
        'Arayashiki',
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

    public function getImagePath($sinnerType)
    {
        $arayashikiIdentities = [
            'yiSang' => 'The House of Spiders - The Index Nursefather',
            'faust' => 'The House of Spiders - The Ring Apprentice',
            'donQuixote' => 'The Index Proxy - Effloresced E.G.O Procuration',
            'hongLu' => 'The House of Spiders - The Ring Nursefather',
            'ishmael' => 'The House of Spiders - The Middle Apprentice',
            'sinclair' => 'The House of Spiders - The Pinky Apprentice',
            'outis' => 'The House of Spiders - The Middle Nursefather',
        ];

        $sinner = $this->{$sinnerType};
        // only used if arayashiki is toggled aka she fucking kills everyone
        if ($this->Arayashiki && isset($arayashikiIdentities[$sinnerType]) && $sinner->Identity === $arayashikiIdentities[$sinnerType]) {
            $sinnerMap = [
                'yiSang' => 'YiSang',
                'donQuixote' => 'DonQuixote',
                'faust' => 'Faust',
                'hongLu' => 'HongLu',
                'ishmael' => 'Ishmael',
                'sinclair' => 'Sinclair',
                'outis' => 'Outis',
            ];

            $folderName = $sinnerMap[$sinnerType] ?? ucfirst($sinnerType);
            $fileName = str_replace(' ', '_', $folderName);

            return 'images/Erased/' . $fileName . '.png';
        }

        // default path
        $sinnerMap = [
            'yiSang' => 'YiSang',
            'faust' => 'Faust',
            'donQuixote' => 'DonQuixote',
            'ryoshu' => 'Ryoshu',
            'meursault' => 'Meursault',
            'hongLu' => 'HongLu',
            'heathcliff' => 'Heathcliff',
            'ishmael' => 'Ishmael',
            'rodion' => 'Rodion',
            'sinclair' => 'Sinclair',
            'outis' => 'Outis',
            'gregor' => 'Gregor',
        ];

        $folderName = $sinnerMap[$sinnerType] ?? ucfirst($sinnerType);
        return 'images/' . $folderName . '/' . $sinner->Identity . '.png';
    }
}

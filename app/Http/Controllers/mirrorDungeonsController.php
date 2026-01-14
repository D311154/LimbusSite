<?php

namespace App\Http\Controllers;

use App\Models\mirrorDungeons;
use App\Models\YiSang;
use App\Models\Faust;
use App\Models\DonQuixote;
use App\Models\Ryoshu;
use App\Models\Meursault;
use App\Models\HongLu;
use App\Models\Heathcliff;
use App\Models\Ishmael;
use App\Models\Rodion;
use App\Models\Sinclair;
use App\Models\Outis;
use App\Models\Gregor;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class mirrorDungeonsController extends Controller
{
    public function index()
    {
        $mirrorDungeons = mirrorDungeons::latest()->take(5)->get();

        // Calculate keyword statistics
        $keywordStats = mirrorDungeons::selectRaw('keyword, COUNT(*) as count')
            ->groupBy('keyword')
            ->orderBy('count', 'desc')
            ->get();

        return view('LimbusCompany.index')
            ->with('mirrorDungeons', $mirrorDungeons)
            ->with('keywordStats', $keywordStats);
    }

    public function create()
    {
        $yiSangIdentities = YiSang::all();
        $faustIdentities = Faust::all();
        $donQuixoteIdentities = DonQuixote::all();
        $ryoshuIdentities = Ryoshu::all();
        $meursaultIdentities = Meursault::all();
        $hongLuIdentities = HongLu::all();
        $heathcliffIdentities = Heathcliff::all();
        $ishmaelIdentities = Ishmael::all();
        $rodionIdentities = Rodion::all();
        $sinclairIdentities = Sinclair::all();
        $outisIdentities = Outis::all();
        $gregorIdentities = Gregor::all();

        return view('LimbusCompany.create', compact(
            'yiSangIdentities',
            'faustIdentities',
            'donQuixoteIdentities',
            'ryoshuIdentities',
            'meursaultIdentities',
            'hongLuIdentities',
            'heathcliffIdentities',
            'ishmaelIdentities',
            'rodionIdentities',
            'sinclairIdentities',
            'outisIdentities',
            'gregorIdentities'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'floor' => 'required|integer|min:1|max:15',
            'difficulty' => 'required',
            'keyword' => 'required',
            'adversity' => 'nullable|min:0|max:50',
            'YiSangId' => 'required',
            'FaustId' => 'required',
            'DonQuixoteId' => 'required',
            'RyoshuId' => 'required',
            'MeursaultId' => 'required',
            'HongLuId' => 'required',
            'HeathcliffId' => 'required',
            'IshmaelId' => 'required',
            'RodionId' => 'required',
            'SinclairId' => 'required',
            'OutisId' => 'required',
            'GregorId' => 'required',
        ]);

        mirrorDungeons::create($request->all());

        return redirect()->route('LimbusCompany.index');
    }
}

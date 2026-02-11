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
use App\Models\Comment;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class mirrorDungeonsController extends Controller
{
    public function index()
    {
        $mirrorDungeons = mirrorDungeons::latest()->take(5)->get();

        $keywordStats = mirrorDungeons::selectRaw('keyword, COUNT(*) as count')
            ->groupBy('keyword')
            ->orderBy('count', 'desc')
            ->get();

        $identityUsage = [];

        $yiSangUsage = mirrorDungeons::where('YiSangBenched', false)
            ->join('yi_sang', 'mirror_Dungeons.YiSangId', '=', 'yi_sang.id')
            ->selectRaw('yi_sang.Identity, COUNT(*) as count')
            ->groupBy('yi_sang.Identity')
            ->get();
        foreach ($yiSangUsage as $usage) {
            $key = 'Yi Sang - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $faustUsage = mirrorDungeons::where('FaustBenched', false)
            ->join('faust', 'mirror_Dungeons.FaustId', '=', 'faust.id')
            ->selectRaw('faust.Identity, COUNT(*) as count')
            ->groupBy('faust.Identity')
            ->get();
        foreach ($faustUsage as $usage) {
            $key = 'Faust - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $donQuixoteUsage = mirrorDungeons::where('DonQuixoteBenched', false)
            ->join('don_quixote', 'mirror_Dungeons.DonQuixoteId', '=', 'don_quixote.id')
            ->selectRaw('don_quixote.Identity, COUNT(*) as count')
            ->groupBy('don_quixote.Identity')
            ->get();
        foreach ($donQuixoteUsage as $usage) {
            $key = 'Don Quixote - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $ryoshuUsage = mirrorDungeons::where('RyoshuBenched', false)
            ->join('ryoshu', 'mirror_Dungeons.RyoshuId', '=', 'ryoshu.id')
            ->selectRaw('ryoshu.Identity, COUNT(*) as count')
            ->groupBy('ryoshu.Identity')
            ->get();
        foreach ($ryoshuUsage as $usage) {
            $key = 'Ryoshu - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $meursaultUsage = mirrorDungeons::where('MeursaultBenched', false)
            ->join('meursault', 'mirror_Dungeons.MeursaultId', '=', 'meursault.id')
            ->selectRaw('meursault.Identity, COUNT(*) as count')
            ->groupBy('meursault.Identity')
            ->get();
        foreach ($meursaultUsage as $usage) {
            $key = 'Meursault - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $hongLuUsage = mirrorDungeons::where('HongLuBenched', false)
            ->join('hong_lu', 'mirror_Dungeons.HongLuId', '=', 'hong_lu.id')
            ->selectRaw('hong_lu.Identity, COUNT(*) as count')
            ->groupBy('hong_lu.Identity')
            ->get();
        foreach ($hongLuUsage as $usage) {
            $key = 'Hong Lu - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $heathcliffUsage = mirrorDungeons::where('HeathcliffBenched', false)
            ->join('heathcliff', 'mirror_Dungeons.HeathcliffId', '=', 'heathcliff.id')
            ->selectRaw('heathcliff.Identity, COUNT(*) as count')
            ->groupBy('heathcliff.Identity')
            ->get();
        foreach ($heathcliffUsage as $usage) {
            $key = 'Heathcliff - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $ishmaelUsage = mirrorDungeons::where('IshmaelBenched', false)
            ->join('ishmael', 'mirror_Dungeons.IshmaelId', '=', 'ishmael.id')
            ->selectRaw('ishmael.Identity, COUNT(*) as count')
            ->groupBy('ishmael.Identity')
            ->get();
        foreach ($ishmaelUsage as $usage) {
            $key = 'Ishmael - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $rodionUsage = mirrorDungeons::where('RodionBenched', false)
            ->join('rodion', 'mirror_Dungeons.RodionId', '=', 'rodion.id')
            ->selectRaw('rodion.Identity, COUNT(*) as count')
            ->groupBy('rodion.Identity')
            ->get();
        foreach ($rodionUsage as $usage) {
            $key = 'Rodion - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $sinclairUsage = mirrorDungeons::where('SinclairBenched', false)
            ->join('sinclair', 'mirror_Dungeons.SinclairId', '=', 'sinclair.id')
            ->selectRaw('sinclair.Identity, COUNT(*) as count')
            ->groupBy('sinclair.Identity')
            ->get();
        foreach ($sinclairUsage as $usage) {
            $key = 'Sinclair - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $outisUsage = mirrorDungeons::where('OutisBenched', false)
            ->join('outis', 'mirror_Dungeons.OutisId', '=', 'outis.id')
            ->selectRaw('outis.Identity, COUNT(*) as count')
            ->groupBy('outis.Identity')
            ->get();
        foreach ($outisUsage as $usage) {
            $key = 'Outis - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        $gregorUsage = mirrorDungeons::where('GregorBenched', false)
            ->join('gregor', 'mirror_Dungeons.GregorId', '=', 'gregor.id')
            ->selectRaw('gregor.Identity, COUNT(*) as count')
            ->groupBy('gregor.Identity')
            ->get();
        foreach ($gregorUsage as $usage) {
            $key = 'Gregor - ' . $usage->Identity;
            $identityUsage[$key] = ($identityUsage[$key] ?? 0) + $usage->count;
        }

        arsort($identityUsage);
        $topIdentities = array_slice($identityUsage, 0, 5, true);

        // Calculate most neglected (benched) sinner
        $benchedCounts = [
            'Yi Sang' => mirrorDungeons::where('YiSangBenched', true)->count(),
            'Faust' => mirrorDungeons::where('FaustBenched', true)->count(),
            'Don Quixote' => mirrorDungeons::where('DonQuixoteBenched', true)->count(),
            'Ryoshu' => mirrorDungeons::where('RyoshuBenched', true)->count(),
            'Meursault' => mirrorDungeons::where('MeursaultBenched', true)->count(),
            'Hong Lu' => mirrorDungeons::where('HongLuBenched', true)->count(),
            'Heathcliff' => mirrorDungeons::where('HeathcliffBenched', true)->count(),
            'Ishmael' => mirrorDungeons::where('IshmaelBenched', true)->count(),
            'Rodion' => mirrorDungeons::where('RodionBenched', true)->count(),
            'Sinclair' => mirrorDungeons::where('SinclairBenched', true)->count(),
            'Outis' => mirrorDungeons::where('OutisBenched', true)->count(),
            'Gregor' => mirrorDungeons::where('GregorBenched', true)->count(),
        ];

        arsort($benchedCounts);
        $maxBenchedCount = max($benchedCounts);

        // Handle cases: no one benched, or multiple sinners tied for most benched
        if ($maxBenchedCount === 0) {
            // No one has been benched
            $mostNeglectedSinners = [];
            $mostNeglectedCount = 0;
        } else {
            // Get all sinners with the maximum benched count (handles ties)
            $mostNeglectedSinners = array_filter($benchedCounts, function($count) use ($maxBenchedCount) {
                return $count === $maxBenchedCount;
            });
            $mostNeglectedSinners = array_keys($mostNeglectedSinners);
            $mostNeglectedCount = $maxBenchedCount;
        }

        $comments = Comment::with('user')->latest()->take(20)->get();

        return view('LimbusCompany.index')
            ->with('mirrorDungeons', $mirrorDungeons)
            ->with('keywordStats', $keywordStats)
            ->with('topIdentities', $topIdentities)
            ->with('mostNeglectedSinners', $mostNeglectedSinners)
            ->with('mostNeglectedCount', $mostNeglectedCount)
            ->with('comments', $comments);
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

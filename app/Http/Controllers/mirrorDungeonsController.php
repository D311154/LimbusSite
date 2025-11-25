<?php

namespace App\Http\Controllers;

use App\Models\mirrorDungeons;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class mirrorDungeonsController extends Controller
{
    public function index()
    {
        $mirrorDungeons = mirrorDungeons::all();
        return view('LimbusCompany.index')->with('mirrorDungeons', $mirrorDungeons);
    }

    public function create()
    {
        return view('LimbusCompany.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'floor' => 'required|integer',
            'difficulty' => 'required',
            'adversity' => 'required|integer',
            'keyword' => 'required',
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

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ingatlanok;
use App\Models\kategoriak;
use Illuminate\Http\Request;

class IngatlanokController extends Controller
{
    public function index()
    {   
        return response()->json(Ingatlanok::with('kategoria')->get());
    }
    public function store(Request $request)
    {
        $ingatlan = new ingatlanok();
        $ingatlan->kategoria = $request->kategoria;//az adatbázis tábla rekord neve kell
        $ingatlan->leiras = $request->leiras;
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepURL = $request->kepURL;
        $ingatlan->save();
        $response = array(
            'kategoria' => $request->kategoriaSelect,
            'ingatlan' => $request->ingatlanLeiras,
            'datum' => $request->HirdetesDatum,
            'tehermentes' => $request->tehermentes,
            'tagokneve' => $request->ar,
            'fenykep' => $request->fenykepURL,
            'msg'    => 'Setting created successfully',
        );

        return ($response);
    }
    public function ingatlanokMgejelenitRezponzivban(){
        $ingatlanok = ingatlanok::all();
        $kategoriakNev = kategoriak::all();
        return view('welcome', compact('ingatlanok','kategoriakNev'));
    }
}

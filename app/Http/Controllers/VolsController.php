<?php

namespace App\Http\Controllers;

use App\Models\Vols;
use Illuminate\Http\Request;

class VolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vols/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        $simplon = $request->validate([
            'code_vol'=>'required',
            'date_depart'=>'required',
            'heure_depart'=>'required',
            'destination'=>'required',
            'nbre_placeA'=>'required',
            'nbre_placeB'=>'required',
            'prix_placeA'=>'required',
            'prix_placeB'=>'required',
        ]);
        Vols::create($simplon);
        return redirect('/vols');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function show(Vols $vols)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function edit(Vols $vols)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vols $vols)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vols $vols)
    {
        //
    }
}

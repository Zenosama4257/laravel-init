<?php

namespace App\Http\Controllers;

use App\Models\Servicecup;
use App\Http\Requests\StoreServicecupRequest;
use App\Http\Requests\UpdateServicecupRequest;
use App\Models\Cup;
use App\Models\Service;
use App\Models\Unitprice;

class ServicecupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicecups=Servicecup::with(['cup','service','unitprice'])->get();
        return view('admin.servicecups.index',compact('servicecups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cups=Cup::all();
        $unitprices=Unitprice::all();
         $services=Service::all();
        return view('admin.servicecups.index',compact('cups','unitprices','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServicecupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicecupRequest $request)
    {
        Servicecup::create($request->validated());
        return redirect()->route('admin.servicecups.index')->with('success', 'Servicio_Casa creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicecup  $servicecup
     * @return \Illuminate\Http\Response
     */
    public function show(Servicecup $servicecup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicecup  $servicecup
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicecup $servicecup)
    {
        $cups=Cup::all();
        $unitprices=Unitprice::all();
        $services=Service::all();
        return view('admin.cups.index',compact('clients','cup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicecupRequest  $request
     * @param  \App\Models\Servicecup  $servicecup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicecupRequest $request, Servicecup $servicecup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicecup  $servicecup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicecup $servicecup)
    {
        //
    }
}

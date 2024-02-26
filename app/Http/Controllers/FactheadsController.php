<?php

namespace App\Http\Controllers;

use App\Models\Facthead;
use App\Http\Requests\StoreFactheadRequest;
use App\Http\Requests\UpdateFactheadRequest;
use App\Models\Servicecup;

class FactheadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factheads=Facthead::with(['servicecup'])->get();
        return view('admin.factheads.index',compact('factheads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $servicecups=Servicecup::all();
        return view('admin.factheads.index',compact('servicecups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFactheadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFactheadRequest $request)
    {
        Facthead::create($request->validated());
        return redirect()->route('admin.factheads.index')->with('success', 'Factura creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facthead  $facthead
     * @return \Illuminate\Http\Response
     */
    public function show(Facthead $facthead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facthead  $facthead
     * @return \Illuminate\Http\Response
     */
    public function edit(Facthead $facthead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFactheadRequest  $request
     * @param  \App\Models\Facthead  $facthead
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFactheadRequest $request, Facthead $facthead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facthead  $facthead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facthead $facthead)
    {
       $facthead->delete();
       return back();
    }
}

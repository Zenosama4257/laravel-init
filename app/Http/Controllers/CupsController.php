<?php

namespace App\Http\Controllers;

use App\Models\Cup;
use App\Http\Requests\StoreCupRequest;
use App\Http\Requests\UpdateCupRequest;
use App\Models\Client;

class CupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cups=Cup::with(['client'])->get();
        return view('admin.cups.index',compact('cups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=Client::all();
        return view('admin.cups.index',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCupRequest $request)
    {
        Cup::create($request->validated());
        return redirect()->route('admin.cups.index')->with('success', 'Casa creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function show(Cup $cup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function edit(Cup $cup)
    {
        $clients=Client::all();
        return view('admin.cups.index',compact('clients','cup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCupRequest  $request
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCupRequest $request, Cup $cup)
    {
       $cup->update($request->validated());
        return redirect()->route('admin.cups.index')->with('success', 'Casa editada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cup $cup)
    {
       $cup->delete();
       return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Unitprice;
use App\Http\Requests\StoreUnitpriceRequest;
use App\Http\Requests\UpdateUnitpriceRequest;

class UnitpricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Unitprice::all();
        return view('admin.unitprices.index',compact('unitprices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unitprices.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUnitpriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnitpriceRequest $request)
    {
        Unitprice::create($request->validated());
        return redirect('admin.unitprice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unitprice  $unitprice
     * @return \Illuminate\Http\Response
     */
    public function show(Unitprice $unitprice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unitprice  $unitprice
     * @return \Illuminate\Http\Response
     */
    public function edit(Unitprice $unitprice)
    {
        return view('admin.unitprice.edit', compact('unitprice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitpriceRequest  $request
     * @param  \App\Models\Unitprice  $unitprice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnitpriceRequest $request, Unitprice $unitprice)
    {
        $unitprice->update($request->validated());
        return redirect()->route('admin.unitprice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unitprice  $unitprice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unitprice $unitprice)
    {
        $unitprice->delete();
        return back();
    }
}

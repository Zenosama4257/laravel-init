<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clients = Client::all();
        return $Clients;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'contact_name'=>['required'],
          'nif'=>['required','unique:clients,nif'],
          'simel',
          'license',
          'rate',
          'social_reason',
          'all_cups',
          'url',
        ]);
        $Client = new Client();
        $Client->name = $request->name;
        $Client->last_name = $request->last_name;
        $Client->job = $request->job;
        $Client->phone = $request->phone;
        $Client->address = $request->address;
        $Client->age = $request->age;

        $Client->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Client = Client::find($id);
        return $Client;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Client = Client::findOrFail($request->id);
        $Client->name = $request->name;
        $Client->last_name = $request->last_name;
        $Client->job = $request->job;
        $Client->phone = $request->phone;
        $Client->address = $request->address;
        $Client->age = $request->age;

        $Client->save();
        return $Client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Client = Client::destroy($id);
        return $Client;
    }
}

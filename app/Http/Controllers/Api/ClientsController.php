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
    // En el método index del controlador ClientsController
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
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
            'contact_name' => ['required'],
            'nif' => ['required', 'unique:clients,nif'],
            'simel',
            'license',
            'rate',
            'social_reason',
            'all_cups',
            'url',
        ]);
        $client = new Client();
        $client->contact_name = $request->contact_name;
        $client->nif = $request->nif;
        $client->simel = $request->simel;
        $client->license = $request->license;
        $client->rate = $request->rate;
        $client->social_reason = $request->social_reason;
        $client->all_cups = $request->all_cups;
        $client->url = $request->url;

        $client->save();
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
        $request->validate([
            'contact_name' => ['required'],
            'nif' => ['required', 'unique:clients,nif'],
            'simel',
            'license',
            'rate',
            'social_reason',
            'all_cups',
            'url',
        ]);
    
        $client = Client::findOrFail($id);
        $client->contact_name = $request->contact_name;
        $client->nif = $request->nif;
        $client->simel = $request->simel;
        $client->license = $request->license;
        $client->rate = $request->rate;
        $client->social_reason = $request->social_reason;
        $client->all_cups = $request->all_cups;
        $client->url = $request->url;
    
        $client->save();
    
        return $client;
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

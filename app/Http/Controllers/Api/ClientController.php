<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
    
        return Inertia::render('Client/index' , ['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create([
            'nom' =>$request->input('nom'),
            'mtva' =>$request->input('mtva'),
            'email' => $request->input('email'),
            'emailSs' => $request->input('emailSs'),

            'emailFact'=>$request->input('emailFact'),
    'adresse'=>$request->input('adresse'),
    'adresseSs'=>$request->input('adresseSs'),
    'tele'=>$request->input('tele'),
    'observation'=>$request->input('observation'),
    'siteInternet'=>$request->input('siteInternet'),]
            
        );

        return Redirect::route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
       
        return Inertia::render('Client/Show' , compact('client'));
        
    }
    public function create()
    {
       
        return Inertia::render('Client/Create' );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        
        $client->update([
                'nom' =>$request->input('nom'),
                'mtva' =>$request->input('mtva'),
                'email' => $request->input('email'),
                'emailSs' => $request->input('emailSs'),

                'emailFact'=>$request->input('emailFact'),
                'adresse'=>$request->input('adresse'),
                'adresseSs'=>$request->input('adresseSs'),
                'tele'=>$request->input('tele'),
                'observation'=>$request->input('observation'),
                'siteInternet'=>$request->input('siteInternet'),]
            
        );

        return Redirect::route('clients.index');
        
    }
    public function edit( Client $client)
    {
        
        return Inertia::render('Client/Edit' , compact('client'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
       
    
        return redirect()->route('clients.index')->with('message', 'Post Delete Successfully');
    }
}

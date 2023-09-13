<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clients()
    {
        $clients = Clients::all();
        return view('Clients.clients' , compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajout_client()
    {
        return view('Clients.ajout_client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request->validate([
        //     'nom'=>'required',
        //      'prenoms'=>'required',
        //      'telephone'=>'required',
        //      'sexe'=>'required',
       //// ]);

        $clients = new Clients();
        $clients->nom = $request->nom;
        $clients->prenoms = $request->prenoms;
        $clients->telephone = $request->telephone;
        $clients->sexe = $request->sexe;
        $clients->save();

        return redirect()->route('ajout_client')->with('status', 'Le client a bien été ajouté.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

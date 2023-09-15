<?php

namespace App\Http\Controllers;
use App\Models\Coutures;
use App\Models\Models;
use App\Models\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function coutures()
    {
        $coutures = Coutures::all();
        return view('Coutures.coutures' , compact('coutures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajout_coutures()

    {
        $models = Models::all();
        $clients = Clients::all();
        return view('Coutures.ajout_coutures', compact('models', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $request->validate([
        //     'montant' => 'required',
        //     'date_depot' => 'required',
        //     'date_recuperation' => 'required',
        //     'id_clients' => 'required',
        //     'models_id' => 'required',
        // ]);

        $coutures = new coutures();
        $coutures->libelle = $request->libelle;
        $coutures->date_depot = $request->date_depot;
        $coutures->date_recuperation = $request->date_recuperation;
        $coutures->models_id = $request->models_id;
        $coutures->clients_id = $request->clients_id;


        $coutures->save();

        return redirect()->route('ajout_coutures')->with('status', 'la couture a bien été ajouter avec succès');

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

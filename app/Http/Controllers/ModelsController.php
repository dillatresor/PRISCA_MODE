<?php

namespace App\Http\Controllers;
use App\Models\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function models()
    {
        $models=Models::all();
        return view('Models.models' , compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajout_models()
    {
        return view('Models.ajout_models');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //    'nom_modele'=>'required',
        //    'type_modele'=>'required',
        //    'image'=>'required',
      //  ]);

       $models = new Models();
       $models->nom_modele = $request->nom_modele;
       $models->type_modele = $request->type_modele;
       $models->image = $request->image->store('photo' , 'public');
       $models->save();

       return redirect()->route('ajout_models')->with('status', 'Le model a bien été ajouté.');
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

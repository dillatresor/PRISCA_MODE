<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personnels;

class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function personnels()
    {
        $personnels = Personnels::all();
        return view('Personnels.personnels' , compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajout_personnels()
    {
        return view('Personnels.ajout_personnels');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //$request->validate([
        //     'nom'=>'required',
        //      'prenom'=>'required',
         //      'adresse'=>'required',
        //      'telephone'=>'required',
        //      'type_personnel'=>'required',
       //// ]);

       $personnels = new Personnels();
       $personnels->nom = $request->nom;
       $personnels->prenom = $request->prenom;
       $personnels->adresse = $request->adresse;
       $personnels->telephone = $request->telephone;
       $personnels->type_personnel = $request->type_personnel;
       $personnels->save();

       return redirect()->route('ajout_personnels')->with('status', 'Le personnel a bien été ajouté.');

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

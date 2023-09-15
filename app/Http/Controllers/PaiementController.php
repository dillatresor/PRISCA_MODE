<?php

namespace App\Http\Controllers;
use App\Models\paiements;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\coutures;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function paiement()
    {
        $paiement=Paiements::all();
        return view('Paiement.paiement' , compact('paiement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajout_paiement()
    {
        $coutures = coutures::all();
        return view('Paiement.ajout_paiement' , compact('coutures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //    'montant_payer'=>'required',
        //    'avance'=>'required',
        //    'reste'=>'required',
        //    'date_paiement'=>'required',
        //    'coutures_id'=>'required',
      //  ]);

       $paiement = new Paiements();
       $paiement->montant_payer = $request->montant_payer;
       $paiement->avance = $request->avance;
       $paiement->reste = $request->reste;
       $paiement->date_paiement = $request->date_paiement;
       $paiement->coutures_id = $request->coutures_id;
       $paiement->save();

       return redirect()->route('ajout_paiement')->with('status', 'Le model a bien été ajouté.');
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

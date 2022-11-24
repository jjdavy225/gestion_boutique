<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nom'=> 'required|max:25',
            'type_marchandise'=> 'required|max:25',
            'adresse'=> 'required|max:25',
            'localisation'=> 'required|max:25',
            ]
        );
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $request ->nom;
        $fournisseur->type_marchandise = $request ->type_marchandise;
        $fournisseur->adresse= $request ->adresse;
        $fournisseur->localisation = $request ->localisation;
        $fournisseur->save();
        if( $fournisseur){
            $msg = "Le fournisseur $request->libelle a été ajouté avec succès!";
            $etat = 'success';
        }else{
            $msg = 'Erreur! Veuillez réesayer SVP et verifier votre connexion';
            $etat = 'warning';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('fournisseur.show', compact('fournisseur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('fournisseur.edit', compact('fournisseur'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();
        return back()->with('toast_success','Fournisseur supprimé avec succès !');
    }
}

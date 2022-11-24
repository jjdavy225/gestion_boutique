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
        $fournisseur= Fournisseur::all();
        return view('article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
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
            return redirect()->route('article.index')->with('toast_success', 'Founisseur enregistré avec succès !');
        }else{
            return redirect()->back()->with('toast_error', 'une erreur est survenue !');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $fournisseur= Fournisseur::find($id);
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
            return redirect()->route('fournisseur.index')->with('toast_success', 'Article enrgistré avec succès !');
        }else{
            return redirect()->back()->with('toast_error', 'une erreur est survenue !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

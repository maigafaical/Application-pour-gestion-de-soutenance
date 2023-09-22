<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = etudiant::all();
        return view('Etudiants.liste', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Etudiants.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom_prenom'=>'required',
            'email'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',

        ]);

        $etudiants = new etudiant();
        $etudiants->nom = $request->nom;
        $etudiants->prenom = $request->prenom;
        $etudiants->adresse = $request->adresse;
        $etudiants->telephone = $request->telephone;
        $etudiants->save();

        return redirect('Etudiants.liste')->with('status', 'L/etudiant a  été ajouté avec succes.');

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

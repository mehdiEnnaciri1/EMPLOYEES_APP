<?php

namespace App\Http\Controllers;

use App\Models\Emplye;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Emplye::all();
        return view('employes.index')->with([
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'CIN' => 'required',
            'birthdate' => 'required',
            'hiredate' => 'required',
            'phone' => 'required',
            'genre' => 'required',
            'grade' => 'required',
            'echelle' => 'required',
            'echelon' => 'required',
            'indice' => 'required',
            'arrondisement' => 'required',
            'division' => 'required',
            'service' => 'required',
            'poste' => 'required',
            'niveau' => 'required',
            'specialite' => 'required',
            'nature' => 'required',
            'nometablissement' => 'required',
            'villeetablissement' => 'required',
            'commentaire' => 'required',
            'autrediplome' => 'required',
            'NAA' => 'required',
            'NAO' => 'required',
            'roteurdate' => 'required',
            'voiture' => 'required',
            'model' => 'required',
            'dotation' => 'required',
            'longement' => 'required',
            'note' => 'required',
        ]);
        Emplye::create($request->except('_token'));
        return redirect()->route('employes.index')->with([
            'success' => 'employé ajouté avec succès'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = Emplye::where('phone',$id)->first();
        return view('employes.show')->with([
            'employe'=> $employe
        ]);
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
        $employe = Emplye::where('phone',$id)->first();
        return view('employes.edit')->with([
            'employe'=> $employe
        ]);
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
        $employe = Emplye::where('phone',$id)->first();
        $this->validate($request, [
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'CIN' => 'required',
            'birthdate' => 'required',
            'hiredate' => 'required',
            'phone' => 'required',
            'genre' => 'required',
            'grade' => 'required',
            'echelle' => 'required',
            'echelon' => 'required',
            'indice' => 'required',
            'arrondisement' => 'required',
            'division' => 'required',
            'service' => 'required',
            'poste' => 'required',
            'niveau' => 'required',
            'specialite' => 'required',
            'nature' => 'required',
            'nometablissement' => 'required',
            'villeetablissement' => 'required',
            'commentaire' => 'required',
            'autrediplome' => 'required',
            'NAA' => 'required',
            'NAO' => 'required',
            'roteurdate' => 'required',
            'voiture' => 'required',
            'model' => 'required',
            'dotation' => 'required',
            'longement' => 'required',
            'note' => 'required',
        ]);
        $employe->update($request->except('_token', '_method'));
        return redirect()->route('employes.index')->with([
            'success' => 'Employé mis à jour avec succès'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = Emplye::where('phone',$id)->first();
        $employe->delete();
        return redirect()->route('employes.index')->with([
            'success' => 'Employé supprimé avec succès'
        ]);
    }

    public function vacationRequest($id){
        $employe = Emplye::where('phone',$id)->first();
        return view('employes.vacation-request')->with([
            'employe'=> $employe
        ]);
    }
}

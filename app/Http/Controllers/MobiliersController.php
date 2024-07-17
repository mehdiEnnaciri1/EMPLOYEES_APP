<?php

namespace App\Http\Controllers;

use App\Models\Mobilier;
use Illuminate\Http\Request;

class MobiliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiliers = Mobilier::all();
        return view('mobiliers.index')->with([
            'mobiliers' => $mobiliers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobiliers.create');
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
            'code' => 'required',
            'nom' => 'required',
            'quantite' => 'required',
            'valeur' => 'required',
            'locale' => 'required',
            'etat' => 'required',
        ]);
        Mobilier::create($request->except('_token'));
        return redirect()->route('mobiliers.index')->with([
            'success' => 'Mobilier ajouté avec succès'
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
        $mobilier = Mobilier::where('code',$id)->first();
        return view('mobiliers.show')->with([
            'mobilier'=> $mobilier
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
        $mobilier = Mobilier::where('code',$id)->first();
        return view('mobiliers.edit')->with([
            'mobilier'=> $mobilier
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
        $mobilier = Mobilier::where('code',$id)->first();
        $this->validate($request, [
            'code' => 'required',
            'nom' => 'required',
            'quantite' => 'required',
            'valeur' => 'required',
            'locale' => 'required',
            'etat' => 'required',
        ]);
        $mobilier->update($request->except('_token', '_method'));
        return redirect()->route('mobiliers.index')->with([
            'success' => 'Mobilier mis à jour avec succès'
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
        $mobilier = Mobilier::where('code',$id)->first();
        $mobilier->delete();
        return redirect()->route('mobiliers.index')->with([
            'success' => 'Mobilier supprimé avec succès'
        ]);
    }
}

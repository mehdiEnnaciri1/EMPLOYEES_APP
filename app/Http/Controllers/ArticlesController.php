<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index')->with([
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            'date_entrer' => 'required',
            'date_sortie' => 'required',
        ]);
        Article::create($request->except('_token'));
        return redirect()->route('articles.index')->with([
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
        $article = Article::where('code',$id)->first();
        return view('articles.show')->with([
            'article'=> $article
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
        $article = Article::where('code',$id)->first();
        return view('articles.edit')->with([
            'article'=> $article
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
        $article = Article::where('code',$id)->first();
        $this->validate($request, [
            'code' => 'required',
            'nom' => 'required',
            'quantite' => 'required',
            'valeur' => 'required',
            'date_entrer' => 'required',
            'date_sortie' => 'required',
        ]);
        $article->update($request->except('_token', '_method'));
        return redirect()->route('articles.index')->with([
            'success' => 'Article mis à jour avec succès'
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
        $article = Article::where('code',$id)->first();
        $article->delete();
        return redirect()->route('articles.index')->with([
            'success' => 'Article supprimé avec succès'
        ]);
    }
}


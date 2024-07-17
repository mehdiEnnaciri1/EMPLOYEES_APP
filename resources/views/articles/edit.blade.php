@extends('adminlte::page')

@section('title')
    Update Article
@endsection

@section('content-header')
    <h2>Update Article</h2>
@endsection

@section('content')
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Modifier article</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('articles.update',$article->code)}}" method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="code">Code</label>
                                    <input type="text" class="form-control" 
                                    name="code" placeholder="code" value="{{old('code',$article->code)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom',$article->nom)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="quantite">Quantite</label>
                                    <input type="text" class="form-control" 
                                    name="quantite" placeholder="quantite" value="{{old('quantite',$article->quantite)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="valeur">Valeur</label>
                                    <input type="text" class="form-control" 
                                    name="valeur" placeholder="valeur" value="{{old('valeur',$article->valeur)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_entrer">Date entrer</label>
                                    <input type="date" class="form-control" 
                                    name="date_entrer" placeholder="date_entrer" value="{{old('date_entrer',$article->date_entrer)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_sortie">Date sortie</label>
                                    <input type="date" class="form-control" 
                                    name="date_sortie" placeholder="date_sortie" value="{{old('date_sortie',$article->date_sortie)}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
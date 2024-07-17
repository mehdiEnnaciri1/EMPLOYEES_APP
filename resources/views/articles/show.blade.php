@extends('adminlte::page')

@section('title')
    Show Article
@endsection

@section('content-header')
    <h2>Show Article</h2>
@endsection

@section('content')
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>les infos de <h2>{{$article->nom}}</h2></h4>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="code">Code</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="code" placeholder="code" value="{{$article->code}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="nom" placeholder="nom" value="{{$article->nom}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="quantite">Quantite</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="quantite" placeholder="quantite" value="{{$article->quantite}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="valeur">Valeur</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="valeur" placeholder="valeur" value="{{$article->valeur}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_entrer">Date entrer</label>
                                    <input type="date" disabled class="form-control rounded-0" 
                                    name="date_entrer" placeholder="date_entrer" value="{{$article->date_entrer}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_sortie">Date sortie</label>
                                    <input type="date" disabled class="form-control rounded-0" 
                                    name="date_sortie" placeholder="date_sortie" value="{{$article->date_sortie}}">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
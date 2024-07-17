@extends('adminlte::page')

@section('title')
    Show Mobilier
@endsection

@section('content-header')
    <h2>Show Mobilier</h2>
@endsection

@section('content')
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>les infos de <h2>{{$mobilier->nom}}</h2></h4>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="code">Code</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="code" placeholder="code" value="{{$mobilier->code}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="nom" placeholder="nom" value="{{$mobilier->nom}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="quantite">Quantite</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="quantite" placeholder="quantite" value="{{$mobilier->quantite}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="valeur">Valeur</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="valeur" placeholder="valeur" value="{{$mobilier->valeur}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="locale">Local</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="locale" placeholder="locale" value="{{$mobilier->locale}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="etat">Etat</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="etat" placeholder="etat" value="{{$mobilier->etat}}">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
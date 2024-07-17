@extends('adminlte::page')

@section('title')
    Add Mobilier
@endsection

@section('content-header')
    <h2>Add Mobilier</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Ajouter un mobilier</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('mobiliers.store')}}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="code">Code</label>
                                    <input type="text" class="form-control" 
                                    name="code" placeholder="code" value="{{old('code')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="quantite">Quantite</label>
                                    <input type="text" class="form-control" 
                                    name="quantite" placeholder="quantite" value="{{old('quantite')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="valeur">Valeur</label>
                                    <input type="text" class="form-control" 
                                    name="valeur" placeholder="valeur" value="{{old('valeur')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="locale">Locale</label>
                                    <input type="text" class="form-control" 
                                    name="locale" placeholder="locale" value="{{old('locale')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="etat">Etat</label>
                                    <input type="text" class="form-control" 
                                    name="etat" placeholder="etat" value="{{old('etat')}}">
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
@endif

@if(auth()->user()->hasRole('magasinier'))
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Ajouter un mobilier</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('mobiliers.store')}}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="code">Code</label>
                                    <input type="text" class="form-control" 
                                    name="code" placeholder="code" value="{{old('code')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="quantite">Quantite</label>
                                    <input type="text" class="form-control" 
                                    name="quantite" placeholder="quantite" value="{{old('quantite')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="valeur">Valeur</label>
                                    <input type="text" class="form-control" 
                                    name="valeur" placeholder="valeur" value="{{old('valeur')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="locale">Locale</label>
                                    <input type="text" class="form-control" 
                                    name="locale" placeholder="locale" value="{{old('locale')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="etat">Etat</label>
                                    <input type="text" class="form-control" 
                                    name="etat" placeholder="etat" value="{{old('etat')}}">
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
@endif
@endsection
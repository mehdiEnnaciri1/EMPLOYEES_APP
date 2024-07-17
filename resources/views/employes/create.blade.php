@extends('adminlte::page')

@section('title')
    Add Employes
@endsection

@section('content-header')
    <h2>Add Employes</h2>
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
                             <h4>Ajouter un employe</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employes.store')}}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="matricule">Matricule</label>
                                    <input type="text" class="form-control" 
                                    name="matricule" placeholder="matricule" value="{{old('matricule')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">Prenom</label>
                                    <input type="text" class="form-control" 
                                    name="prenom" placeholder="prenom" value="{{old('prenom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="CIN">CIN</label>
                                    <input type="text" class="form-control" 
                                    name="CIN" placeholder="CIN" value="{{old('CIN')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="birthdate">Date de naissance</label>
                                    <input type="date" class="form-control" 
                                    name="birthdate" placeholder="birthdate" value="{{old('birthdate')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="hiredate">Date de recrutement</label>
                                    <input type="date" class="form-control" 
                                    name="hiredate" placeholder="hiredate" value="{{old('hiredate')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" 
                                    name="phone" placeholder="phone" value="{{old('phone')}}">
                            </div>

                            <label for="genre">Genre</label>
			                <select id="genre" class="form-control" name="genre" value="{{old('genre')}}">
				                <option value="homme">homme</option>
				                <option value="femme">femme</option>
			                </select>
                            <div class="form-group mb-3">
                                <label for="grade">Grade actuel</label>
                                    <input type="text" class="form-control" 
                                    name="grade" placeholder="grade" value="{{old('grade')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="echelle">Echelle</label>
                                    <input type="text" class="form-control" 
                                    name="echelle" placeholder="echelle" value="{{old('echelle')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="echelon">Echelon</label>
                                    <input type="text" class="form-control" 
                                    name="echelon" placeholder="echelon" value="{{old('echelon')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="indice">Indice</label>
                                    <input type="text" class="form-control" 
                                    name="indice" placeholder="indice" value="{{old('indice')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="arrondisement">Arrondisement d'affectation</label>
                                    <input type="text" class="form-control" 
                                    name="arrondisement" placeholder="arrondisement" value="{{old('arrondisement')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="division">division d'affectation</label>
                                    <input type="text" class="form-control" 
                                    name="division" placeholder="division" value="{{old('division')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="service">service d'affectation</label>
                                    <input type="text" class="form-control" 
                                    name="service" placeholder="service" value="{{old('service')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="poste">Poste</label>
                                    <input type="text" class="form-control" 
                                    name="poste" placeholder="poste" value="{{old('poste')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="niveau">Niveau d'etude</label>
                                    <input type="text" class="form-control" 
                                    name="niveau" placeholder="niveau" value="{{old('niveau')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="specialite">specialite du diplome</label>
                                    <input type="text" class="form-control" 
                                    name="specialite" placeholder="specialite" value="{{old('specialite')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nature">nature du diplome</label>
                                    <input type="text" class="form-control" 
                                    name="nature" placeholder="nature" value="{{old('nature')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nometablissement">nom etablissement du delivration</label>
                                    <input type="text" class="form-control" 
                                    name="nometablissement" placeholder="nometablissement" value="{{old('nometablissement')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="villeetablissement">ville etablissement du delivration</label>
                                    <input type="text" class="form-control" 
                                    name="villeetablissement" placeholder="villeetablissement" value="{{old('villeetablissement')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="commentaire">commentaire</label>
                                    <input type="text" class="form-control" 
                                    name="commentaire" placeholder="commentaire" value="{{old('commentaire')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="autrediplome">Autre diplome</label>
                                    <input type="text" class="form-control" 
                                    name="autrediplome" placeholder="autrediplome" value="{{old('autrediplome')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NAA">Nom Administation Acceil</label>
                                    <input type="text" class="form-control" 
                                    name="NAA" placeholder="NAA" value="{{old('NAA')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NAO">Nom Administation Origine</label>
                                    <input type="text" class="form-control" 
                                    name="NAO" placeholder="NAO" value="{{old('NAO')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="roteurdate">Date de roteur</label>
                                    <input type="date" class="form-control" 
                                    name="roteurdate" placeholder="roteurdate" value="{{old('roteurdate')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="voiture">Voiture</label>
                                    <input type="text" class="form-control" 
                                    name="voiture" placeholder="voiture" value="{{old('voiture')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="model">Model</label>
                                    <input type="text" class="form-control" 
                                    name="model" placeholder="model" value="{{old('model')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="dotation">Dotation corburant</label>
                                    <input type="text" class="form-control" 
                                    name="dotation" placeholder="dotation" value="{{old('dotation')}}">
                            </div>
                            <label for="type">logement de fonction</label>
			                <select id="type" class="form-control" name="longement" value="{{old('longement')}}">>
				                <option value="Oui">Oui</option>
				                <option value="Non">Non</option>
			                </select>
                            <div class="form-group mb-3">
                                <label for="note">Note</label>
                                    <input type="text" class="form-control" 
                                    name="note" placeholder="note" value="{{old('note')}}">
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
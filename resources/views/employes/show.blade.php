@extends('adminlte::page')

@section('title')
    Show Employe
@endsection

@section('content-header')
    <h2>Show Employe</h2>
@endsection

@section('content')
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>les infos de <h2>{{$employe->nom}}</h2></h4>
                        </div>
                    </div>
                    <div class="mt-2 text-center text-uppercase">
                            <a href="{{ route( 'vacation.request' , $employe->phone )}}" class="btn btn-outline-dark">
                                demande conge
                            </a>
                    </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="matricule">Matricule</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="matricule" placeholder="matricule" value="{{$employe->matricule}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="nom" placeholder="nom" value="{{$employe->nom}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">Prenom</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="prenom" placeholder="prenom" value="{{$employe->prenom}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="CIN">CIN</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="CIN" placeholder="CIN" value="{{$employe->CIN}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="birthdate">Date de naissance</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="birthdate" placeholder="birthdate" value="{{$employe->birthdate}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="hiredate">Date de recrutement</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="hiredate" placeholder="hiredate" value="{{$employe->hiredate}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="phone" placeholder="phone" value="{{$employe->phone}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="genre">Genre</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="genre" placeholder="genre" value="{{$employe->genre}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="grade">Grade actuel</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="grade" placeholder="grade" value="{{$employe->grade}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="echelle">Echelle</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="echelle" placeholder="echelle" value="{{$employe->echelle}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="echelon">Echelon</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="echelon" placeholder="echelon" value="{{$employe->echelon}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="indice">Indice</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="indice" placeholder="indice" value="{{$employe->indice}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="arrondisement">Arrondisement d'affectation</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="arrondisement" placeholder="arrondisement" value="{{$employe->arrondisement}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="division">Division d'affectation</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="division" placeholder="division" value="{{$employe->division}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="service">Service d'affectation</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="service" placeholder="service" value="{{$employe->service}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="poste">Poste</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="poste" placeholder="poste" value="{{$employe->poste}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="niveau">Niveau d'etude</label>
                                    <input type="date" disabled class="form-control rounded-0" 
                                    name="niveau" placeholder="niveau" value="{{$employe->niveau}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="specialite">Specialite du diplome</label>
                                    <input type="tel" disabled class="form-control rounded-0" 
                                    name="specialite" placeholder="specialite" value="{{$employe->specialite}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nature">Nature du diplome</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="nature" placeholder="nature" value="{{$employe->nature}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nometablissement">Nom etablissement du delivration</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="nometablissement" placeholder="nometablissement" value="{{$employe->nometablissement}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="villeetablissement">Ville etablissement du delivration</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="villeetablissement" placeholder="villeetablissement" value="{{$employe->villeetablissement}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="commentaire">commentaire</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="commentaire" placeholder="commentaire" value="{{$employe->commentaire}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="autrediplome">Autre diplome</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="autrediplome" placeholder="autrediplome" value="{{$employe->autrediplome}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NAA">Nom Administation Acceil</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="NAA" placeholder="NAA" value="{{$employe->NAA}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NAO">Nom Administation Origine</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="NAO" placeholder="NAO" value="{{$employe->NAO}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="roteurdate">Date de roteur</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="roteurdate" placeholder="roteurdate" value="{{$employe->roteurdate}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="voiture">Voiture</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="voiture" placeholder="voiture" value="{{$employe->voiture}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="model">Model</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="model" placeholder="model" value="{{$employe->model}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="dotation">Dotation corburant</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="dotation" placeholder="dotation" value="{{$employe->dotation}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="longement">logement de fonction</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="longement" placeholder="longement" value="{{$employe->longement}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="note">Note</label>
                                    <input type="text" disabled class="form-control rounded-0" 
                                    name="note" placeholder="note" value="{{$employe->note}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('adminlte::page')

@section('title')
    Update Employes
@endsection

@section('content-header')
    <h2>Update Employes</h2>
@endsection

@section('content')
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Modifier employe</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employes.update',$employe->phone)}}" method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="matricule">matricule</label>
                                    <input type="text" class="form-control" 
                                    name="matricule" placeholder="matricule" value="{{old('matricule',$employe->matricule)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom',$employe->nom)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">prenom</label>
                                    <input type="text" class="form-control" 
                                    name="prenom" placeholder="prenom" value="{{old('prenom',$employe->prenom)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="CIN">CIN</label>
                                    <input type="text" class="form-control" 
                                    name="CIN" placeholder="CIN" value="{{old('CIN',$employe->CIN)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="birthdate">birthdate</label>
                                    <input type="text" class="form-control" 
                                    name="birthdate" placeholder="birthdate" value="{{old('birthdate',$employe->birthdate)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="hiredate">hiredate</label>
                                    <input type="text" class="form-control" 
                                    name="hiredate" placeholder="hiredate" value="{{old('hiredate',$employe->hiredate)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">phone</label>
                                    <input type="text" class="form-control" 
                                    name="phone" placeholder="phone" value="{{old('phone',$employe->phone)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="genre">genre</label>
                                    <input type="text" class="form-control" 
                                    name="genre" placeholder="genre" value="{{old('genre',$employe->genre)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="grade">grade</label>
                                    <input type="text" class="form-control" 
                                    name="grade" placeholder="grade" value="{{old('grade',$employe->grade)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="echelle">echelle</label>
                                    <input type="text" class="form-control" 
                                    name="echelle" placeholder="echelle" value="{{old('echelle',$employe->echelle)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="echelon">echelon</label>
                                    <input type="text" class="form-control" 
                                    name="echelon" placeholder="echelon" value="{{old('echelon',$employe->echelon)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="indice">indice</label>
                                    <input type="text" class="form-control" 
                                    name="indice" placeholder="indice" value="{{old('indice',$employe->indice)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="arrondisement">arrondisement</label>
                                    <input type="text" class="form-control" 
                                    name="arrondisement" placeholder="arrondisement" value="{{old('arrondisement',$employe->arrondisement)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="division">division</label>
                                    <input type="text" class="form-control" 
                                    name="division" placeholder="division" value="{{old('division',$employe->division)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="service">service</label>
                                    <input type="text" class="form-control" 
                                    name="service" placeholder="service" value="{{old('service',$employe->service)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="poste">poste</label>
                                    <input type="text" class="form-control" 
                                    name="poste" placeholder="poste" value="{{old('poste',$employe->poste)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="niveau">niveau</label>
                                    <input type="date" class="form-control" 
                                    name="niveau" placeholder="niveau" value="{{old('niveau',$employe->niveau)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="specialite">specialite</label>
                                    <input type="tel" class="form-control" 
                                    name="specialite" placeholder="specialite" value="{{old('specialite',$employe->specialite)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nature">nature</label>
                                    <input type="text" class="form-control" 
                                    name="nature" placeholder="nature" value="{{old('nature',$employe->nature)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nometablissement">nometablissement</label>
                                    <input type="text" class="form-control" 
                                    name="nometablissement" placeholder="nometablissement" value="{{old('nometablissement',$employe->nometablissement)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="villeetablissement">villeetablissement</label>
                                    <input type="text" class="form-control" 
                                    name="villeetablissement" placeholder="villeetablissement" value="{{old('villeetablissement',$employe->villeetablissement)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="commentaire">commentaire</label>
                                    <input type="text" class="form-control" 
                                    name="commentaire" placeholder="commentaire" value="{{old('commentaire',$employe->commentaire)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="autrediplome">autrediplome</label>
                                    <input type="text" class="form-control" 
                                    name="autrediplome" placeholder="autrediplome" value="{{old('autrediplome',$employe->autrediplome)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NAA">NAA</label>
                                    <input type="text" class="form-control" 
                                    name="NAA" placeholder="NAA" value="{{old('NAA',$employe->NAA)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NAO">NAO</label>
                                    <input type="text" class="form-control" 
                                    name="NAO" placeholder="NAO" value="{{old('NAO',$employe->NAO)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="roteurdate">roteurdate</label>
                                    <input type="text" class="form-control" 
                                    name="roteurdate" placeholder="roteurdate" value="{{old('roteurdate',$employe->roteurdate)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="voiture">voiture</label>
                                    <input type="text" class="form-control" 
                                    name="voiture" placeholder="voiture" value="{{old('voiture',$employe->voiture)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="model">model</label>
                                    <input type="text" class="form-control" 
                                    name="model" placeholder="model" value="{{old('model',$employe->model)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="dotation">dotation</label>
                                    <input type="text" class="form-control" 
                                    name="dotation" placeholder="v" value="{{old('dotation',$employe->dotation)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="longement">longement</label>
                                    <input type="text" class="form-control" 
                                    name="longement" placeholder="longement" value="{{old('longement',$employe->longement)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="note">note</label>
                                    <input type="text" class="form-control" 
                                    name="note" placeholder="note" value="{{old('note',$employe->note)}}">
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
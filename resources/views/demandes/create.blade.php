@extends('adminlte::page')

@section('title')
    Add Demande conge
@endsection

@section('content-header')
    <h2>Add Demande conge</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('employe'))
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Ajouter un demande de conge</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('demandes.store')}}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="matricule">matricule</label>
                                    <input type="text" class="form-control" 
                                    name="matricule" placeholder="matricule" value="{{old('matricule')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">prenom</label>
                                    <input type="text" class="form-control" 
                                    name="prenom" placeholder="prenom" value="{{old('prenom')}}">
                            </div>
                            <label for="type">Type</label>
			                <select id="type" class="form-control" name="type" value="{{old('type')}}">
				                <option value="maladie">Maladie</option>
				                <option value="personnel">Personnel</option>
				                <option value="maternite">Maternité</option>
			                </select>
                            <div class="form-group mb-3">
                                <label for="date_debut">date debut</label>
                                    <input type="date" class="form-control" 
                                    name="date_debut" placeholder="date_debut" value="{{old('date_debut')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_fin">date fin</label>
                                    <input type="date" class="form-control" 
                                    name="date_fin" placeholder="date_fin" value="{{old('date_fin')}}">
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
                             <h4>Ajouter un demande de conge</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('demandes.store')}}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="matricule">matricule</label>
                                    <input type="text" class="form-control" 
                                    name="matricule" placeholder="matricule" value="{{old('matricule')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">prenom</label>
                                    <input type="text" class="form-control" 
                                    name="prenom" placeholder="prenom" value="{{old('prenom')}}">
                            </div>
                            <label for="type">Type</label>
			                <select id="type" class="form-control" name="type" value="{{old('type')}}">
				                <option value="maladie">Maladie</option>
				                <option value="personnel">Personnel</option>
				                <option value="maternite">Maternité</option>
			                </select>
                            <div class="form-group mb-3">
                                <label for="date_debut">date debut</label>
                                    <input type="date" class="form-control" 
                                    name="date_debut" placeholder="date_debut" value="{{old('date_debut')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_fin">date fin</label>
                                    <input type="date" class="form-control" 
                                    name="date_fin" placeholder="date_fin" value="{{old('date_fin')}}">
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

@if(auth()->user()->hasRole('admin'))
    <div class="contrainer">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Ajouter un demande de conge</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('demandes.store')}}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="matricule">matricule</label>
                                    <input type="text" class="form-control" 
                                    name="matricule" placeholder="matricule" value="{{old('matricule')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">nom</label>
                                    <input type="text" class="form-control" 
                                    name="nom" placeholder="nom" value="{{old('nom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">prenom</label>
                                    <input type="text" class="form-control" 
                                    name="prenom" placeholder="prenom" value="{{old('prenom')}}">
                            </div>
                            <label for="type">Type</label>
			                <select id="type" class="form-control" name="type" value="{{old('type')}}">
				                <option value="maladie">Maladie</option>
				                <option value="personnel">Personnel</option>
				                <option value="maternite">Maternité</option>
			                </select>
                            <div class="form-group mb-3">
                                <label for="date_debut">date_debut</label>
                                    <input type="date" class="form-control" 
                                    name="date_debut" placeholder="date_debut" value="{{old('date_debut')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_fin">date_fin</label>
                                    <input type="date" class="form-control" 
                                    name="date_fin" placeholder="date_fin" value="{{old('date_fin')}}">
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
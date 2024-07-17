@extends('adminlte::page')

@section('title')
    Demande de congé
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>Demande de congé</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>Matricule :</b> {{ $employe->matricule }}
                        </p>
                        <p class="lead">
                            <b>Nom :</b> {{ $employe->nom }}
                        </p>
                        <p class="lead">
                            <b>Prénom :</b> {{ $employe->prenom }}
                        </p>
                        <p class="lead">
                            <b>CIN :</b> {{ $employe->CIN }}
                        </p>
                        <p class="lead">
                            <b>Date de naissance :</b> {{ $employe->birthdate }}
                        </p>
                        <p class="lead">
                            <b>Date de recrutement :</b> {{ $employe->hiredate }}
                        </p>
                        <p class="lead">
                            <b>Téléphone :</b> {{ $employe->phone }}
                        </p>
                        <p class="lead">
                            <b>Genre :</b> {{ $employe->genre }}
                        </p>
                        <p class="lead">
                            <b>Grade :</b> {{ $employe->grade }}
                        </p>
                        <p class="lead">
                            <b>Échelle :</b> {{ $employe->echelle }}
                        </p>
                        <p class="lead">
                            <b>Échelon :</b> {{ $employe->echelon }}
                        </p>
                        <p class="lead">
                            <b>Indice :</b> {{ $employe->indice }}
                        </p>
                        <p class="lead">
                            <b>Arrondissement :</b> {{ $employe->arrondisement }}
                        </p>
                        <p class="lead">
                            <b>Division d'affectation :</b> {{ $employe->division }}
                        </p>
                        <p class="lead">
                            <b>Service d'affectation :</b> {{ $employe->service }}
                        </p>
                        <p class="lead">
                            <b>Poste :</b> {{ $employe->poste }}
                        </p>
                        <p class="lead">
                            <b>Niveau d'étude :</b> {{ $employe->niveau }}
                        </p>
                        <p class="lead">
                            <b>Spécialité :</b> {{ $employe->specialite }}
                        </p>
                        <p class="lead">
                            <b>Nature du diplôme :</b> {{ $employe->nature }}
                        </p>
                        <p class="lead">
                            <b>Nom de l'établissement :</b> {{ $employe->nometablissement }}
                        </p>
                        <p class="lead">
                            <b>Ville de l'établissement :</b> {{ $employe->villeetablissement }}
                        </p>
                        <p class="lead">
                            <b>Description du personnel :</b> {{ $employe->commentaire }}
                        </p>
                        <p class="lead">
                            <b>Autre diplôme :</b> {{ $employe->autrediplome }}
                        </p>
                        <p class="lead">
                            <b>Nom d'administration d'accueil :</b> {{ $employe->NAA }}
                        </p>
                        <p class="lead">
                            <b>Nom d'administration d'origine :</b> {{ $employe->NAO }}
                        </p>
                        <p class="lead">
                            <b>Date de rotation :</b> {{ $employe->roteurdate }}
                        </p>
                        <p class="lead">
                            <b>Voiture :</b> {{ $employe->voiture }}
                        </p>
                        <p class="lead">
                            <b>Modèle :</b> {{ $employe->model }}
                        </p>
                        <p class="lead">
                            <b>Dotation carburant :</b> {{ $employe->dotation }} L/mois
                        </p>
                        <p class="lead">
                            <b>Logement de fonction :</b> {{ $employe->logement }}
                        </p>
                        <p class="lead">
                            <b>Note :</b> {{ $employe->note }}
                        </p>
                        <hr>
                        <h4>Demande de congé :</h4>
                        <p class="lead">
                            <b>Date de début :</b> ___________
                        </p>
                        <p class="lead">
                            <b>Date de fin :</b> ___________
                        </p>
                        <p class="lead">
                            <b>Motif :</b> ___________
                        </p>
                        <p class="lead">
                            <b>Commentaire :</b> ___________
                        </p>
                    </div>
                        <div class="class my-5">
                            <a href="" onclick= "
                                document.getElementById('printLink').style.display ='none';
                                setTimeout(function(){
                                document.getElementById('printLink').style.display ='inline-block';
                                },6000);
                                window.print();
                                "
                                class="btn btn-sm btn-primary" id="printLink">
                                    <i class="fash fa-print" ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
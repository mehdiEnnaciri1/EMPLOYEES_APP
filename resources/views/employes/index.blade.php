@extends('adminlte::page')

@section('plugins.datatables', true)

@section('title')
    List Employes
@endsection

@section('content-header')
    <h2>List Employes</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card my-5">
                <div class="card-header text-center text-uppercase">
                    <h4>Liste des employes</h4>
                </div>
                <div class="card-body">
                    <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                        <thead>
                            <tr>
                                <th class="col-md-1">Id</th>
                                <th class="col-md-2">Matricule</th>
                                <th class="col-md-2">Nom</th>
                                <th class="col-md-2">Prenom</th>
                                <th class="col-md-2">CIN</th>
                                <th class="col-md-2">Date de naissance</th>
                                <th class="col-md-2">Date de recrutement</th>
                                <th class="col-md-2">Phone</th>
                                <th class="col-md-1">Genre</th>
                                <th class="col-md-2">Grade actuel</th>
                                <th class="col-md-1">Echelle</th>
                                <th class="col-md-1">Echelon</th>
                                <th class="col-md-1">Indice</th>
                                <th class="col-md-2">Arrondissement d'affectation</th>
                                <th class="col-md-2">Division d'affectation</th>
                                <th class="col-md-2">Service d'affectation</th>
                                <th class="col-md-2">Poste</th>
                                <th class="col-md-2">Niveau d'etude</th>
                                <th class="col-md-2">Spécialité du diplôme</th>
                                <th class="col-md-2">Nature du diplôme</th>
                                <th class="col-md-2">Nom de l'établissement</th>
                                <th class="col-md-2">Ville de l'établissement</th>
                                <th class="col-md-2">Commentaire</th>
                                <th class="col-md-2">Autre diplôme</th>
                                <th class="col-md-2">Nom Administration Accueil</th>
                                <th class="col-md-2">Nom Administration Origine</th>
                                <th class="col-md-2">Date de retour</th>
                                <th class="col-md-2">Voiture</th>
                                <th class="col-md-2">Modèle</th>
                                <th class="col-md-2">Dotation carburant</th>
                                <th class="col-md-2">Logement de fonction</th>
                                <th class="col-md-2">Note</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employes as $key => $Emplye)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $Emplye->matricule }}</td>
                                <td>{{ $Emplye->nom }}</td>
                                <td>{{ $Emplye->prenom }}</td>
                                <td>{{ $Emplye->CIN }}</td>
                                <td>{{ $Emplye->birthdate }}</td>
                                <td>{{ $Emplye->hiredate }}</td>
                                <td>{{ $Emplye->phone }}</td>
                                <td>{{ $Emplye->genre }}</td>
                                <td>{{ $Emplye->grade }}</td>
                                <td>{{ $Emplye->echelle }}</td>
                                <td>{{ $Emplye->echelon }}</td>
                                <td>{{ $Emplye->indice }}</td>
                                <td>{{ $Emplye->arrondisement }}</td>
                                <td>{{ $Emplye->division }}</td>
                                <td>{{ $Emplye->service }}</td>
                                <td>{{ $Emplye->poste }}</td>
                                <td>{{ $Emplye->niveau }}</td>
                                <td>{{ $Emplye->specialite }}</td>
                                <td>{{ $Emplye->nature }}</td>
                                <td>{{ $Emplye->nometablissement }}</td>
                                <td>{{ $Emplye->villeetablissement }}</td>
                                <td>{{ $Emplye->commentaire }}</td>
                                <td>{{ $Emplye->autrediplome }}</td>
                                <td>{{ $Emplye->NAA }}</td>
                                <td>{{ $Emplye->NAO }}</td>
                                <td>{{ $Emplye->roteurdate }}</td>
                                <td>{{ $Emplye->voiture }}</td>
                                <td>{{ $Emplye->model }}</td>
                                <td>{{ $Emplye->dotation }}</td>
                                <td>{{ $Emplye->longement }}</td>
                                <td>{{ $Emplye->note }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('employes.show', $Emplye->phone) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('employes.edit', $Emplye->phone) }}" class="btn btn-sm btn-warning mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="{{ $Emplye->phone }}" action="{{ route('employes.destroy', $Emplye->phone) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                    <button type="submit" onclick="deleteEmp('{{ $Emplye->phone }}')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection



@section('js')
<script>
    $(document).ready(function() {
        $('#mytable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'csv', 'print', 'colvis'
            ]
        });
    })

    function deleteEmp(id) {
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: "Vous ne pourrez pas annuler cela!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui supprimer!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
                Swal.fire(
                    'supprimer!',
                    'Employe supprimé avec succès',
                    'success'
                )
            }
        })
    }
</script>
@if(session()->has('success'))
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{session()-> get('success')}}",
        showConfirmButton: false,
        timer: 2500
    });
</script>
@endif
@endsection
@extends('adminlte::page')

@section('plugins.datatables',true)


@section('title')
List Employes
@endsection

@section('content-header')
<h2>List Employes</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
<div class="contrainer">
    <div class="row">
        <div class="col-md-20 mx-auto">
            <div class="card-my-5">
                <div class="card-header">
                    <div class="text-center text-uppercase">
                        <h4>Liste des employes</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordred font-weight-bold table-stripped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>CIN</th>
                                    <th>Date de naissance</th>
                                    <th>Date de recrutement</th>
                                    <th>Phone</th>
                                    <th>Genre</th>
                                    <th>Grade actuel</th>
                                    <th>Echelle</th>
                                    <th>Echelon</th>
                                    <th>Indice</th>
                                    <th>Arrondisement d'affectation</th>
                                    <th>Division d'affectation</th>
                                    <th>Service d'affectation</th>
                                    <th>Poste</th>
                                    <th>Niveau d'etude</th>
                                    <th>Specialite du diplome</th>
                                    <th>Nature du diplome</th>
                                    <th>Nom etablissement du delivration</th>
                                    <th>Ville etablissement du delivration</th>
                                    <th>commentaire</th>
                                    <th>Autre diplome</th>
                                    <th>Nom Administation Acceil</th>
                                    <th>Nom Administation Origine</th>
                                    <th>Date de roteur</th>
                                    <th>Voiture</th>
                                    <th>Model</th>
                                    <th>Dotation corburant</th>
                                    <th>logement de fonction</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employes as $key => $Emplye)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <th>{{$Emplye->matricule}}</th>
                                    <th>{{$Emplye->nom}}</th>
                                    <th>{{$Emplye->prenom}}</th>
                                    <th>{{$Emplye->CIN}}</th>
                                    <th>{{$Emplye->birthdate}}</th>
                                    <th>{{$Emplye->hiredate}}</th>
                                    <th>{{$Emplye->phone}}</th>
                                    <th>{{$Emplye->genre}}</th>
                                    <th>{{$Emplye->grade}}</th>
                                    <th>{{$Emplye->echelle}}</th>
                                    <th>{{$Emplye->echelon}}</th>
                                    <th>{{$Emplye->indice}}</th>
                                    <th>{{$Emplye->arrondisement}}</th>
                                    <th>{{$Emplye->division}}</th>
                                    <th>{{$Emplye->service}}</th>
                                    <th>{{$Emplye->poste}}</th>
                                    <th>{{$Emplye->niveau}}</th>
                                    <th>{{$Emplye->specialite}}</th>
                                    <th>{{$Emplye->nature}}</th>
                                    <th>{{$Emplye->nometablissement}}</th>
                                    <th>{{$Emplye->villeetablissement}}</th>
                                    <th>{{$Emplye->commentaire}}</th>
                                    <th>{{$Emplye->autrediplome}}</th>
                                    <th>{{$Emplye->NAA}}</th>
                                    <th>{{$Emplye->NAO}}</th>
                                    <th>{{$Emplye->roteurdate}}</th>
                                    <th>{{$Emplye->voiture}}</th>
                                    <th>{{$Emplye->model}}</th>
                                    <th>{{$Emplye->dotation}}</th>
                                    <th>{{$Emplye->longement}}</th>
                                    <th>{{$Emplye->note}}</th>
                                    <td class="d-flex justify-content-center aligh-items-center">
                                        <a href="{{route('employes.show',$Emplye->phone)}}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('employes.edit',$Emplye->phone)}}" class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{$Emplye->phone}}" action="{{route('employes.destroy',$Emplye->phone)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit" onclick="deleteEmp('{{$Emplye->phone}}')" class="btn btn-sm btn-danger">
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
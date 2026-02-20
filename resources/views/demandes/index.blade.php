@extends('adminlte::page')

@section('plugins.datatables', true)

@section('title')
    Liste des Demandes de Congé
@endsection

@section('content-header')
    <h2>Liste des Demandes de Congé</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div class="card-header text-center text-uppercase">
                        <h4>Liste des demandes de congé</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">Matricule</th>
                                    <th class="col-md-2">Nom</th>
                                    <th class="col-md-2">Prénom</th>
                                    <th class="col-md-2">Type</th>
                                    <th class="col-md-2">Date Début</th>
                                    <th class="col-md-2">Date Fin</th>
                                    <th class="col-md-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($demandes as $key => $Demande)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $Demande->matricule }}</td>
                                    <td>{{ $Demande->nom }}</td>
                                    <td>{{ $Demande->prenom }}</td>
                                    <td>{{ $Demande->type }}</td>
                                    <td>{{ $Demande->date_debut }}</td>
                                    <td>{{ $Demande->date_fin }}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <form id="{{ $Demande->matricule }}" action="{{ route('demandes.destroy', $Demande->matricule) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit" onclick="deleteEmp('{{ $Demande->matricule }}')" class="btn btn-sm btn-danger">
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
                    'Demande supprimé avec succès',
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
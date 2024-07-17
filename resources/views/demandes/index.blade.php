@extends('adminlte::page')

@section('plugins.datatables',true)


@section('title')
List Demande conge
@endsection

@section('content-header')
<h2>List Demande conge</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
<div class="contrainer">
    <div class="row">
        <div class="col-md-20 mx-auto">
            <div class="card-my-5">
                <div class="card-header">
                    <div class="text-center text-uppercase">
                        <h4>Liste des demandes conge</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordred font-weight-bold table-stripped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>matricule</th>
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>type</th>
                                    <th>date debut</th>
                                    <th>date fin</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($demandes as $key => $Demande)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <th>{{$Demande->matricule}}</th>
                                    <th>{{$Demande->nom}}</th>
                                    <th>{{$Demande->prenom}}</th>
                                    <th>{{$Demande->type}}</th>
                                    <th>{{$Demande->date_debut}}</th>
                                    <th>{{$Demande->date_fin}}</th>
                                    <td class="d-flex justify-content-center aligh-items-center">
                                        <form id="{{$Demande->matricule}}" action="{{route('demandes.destroy',$Demande->matricule)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit" onclick="deleteEmp('{{$Demande->matricule}}')" class="btn btn-sm btn-danger">
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
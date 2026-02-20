@extends('adminlte::page')

@section('plugins.datatables', true)

@section('title')
    List Mobiliers
@endsection

@section('content-header')
    <h2>List Mobiliers</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div class="card-header text-center text-uppercase">
                        <h4>Liste des mobiliers</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-1">Id</th>
                                    <th class="col-md-2">Code</th>
                                    <th class="col-md-2">Nom</th>
                                    <th class="col-md-2">Quantité</th>
                                    <th class="col-md-2">Valeur</th>
                                    <th class="col-md-2">Local</th>
                                    <th class="col-md-1">État</th>
                                    <th class="col-md-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mobiliers as $key => $Mobilier)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $Mobilier->code }}</td>
                                    <td>{{ $Mobilier->nom }}</td>
                                    <td>{{ $Mobilier->quantite }}</td>
                                    <td>{{ $Mobilier->valeur }}</td>
                                    <td>{{ $Mobilier->locale }}</td>
                                    <td>{{ $Mobilier->etat }}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('mobiliers.show', $Mobilier->code) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('mobiliers.edit', $Mobilier->code) }}" class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{ $Mobilier->code }}" action="{{ route('mobiliers.destroy', $Mobilier->code) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit" onclick="deleteEmp('{{ $Mobilier->code }}')" class="btn btn-sm btn-danger">
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

@if(auth()->user()->hasRole('magasinier'))
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div class="card-header text-center text-uppercase">
                        <h4>Liste des mobiliers</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-1">Id</th>
                                    <th class="col-md-2">Code</th>
                                    <th class="col-md-2">Nom</th>
                                    <th class="col-md-2">Quantité</th>
                                    <th class="col-md-2">Valeur</th>
                                    <th class="col-md-2">Local</th>
                                    <th class="col-md-1">État</th>
                                    <th class="col-md-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mobiliers as $key => $Mobilier)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $Mobilier->code }}</td>
                                    <td>{{ $Mobilier->nom }}</td>
                                    <td>{{ $Mobilier->quantite }}</td>
                                    <td>{{ $Mobilier->valeur }}</td>
                                    <td>{{ $Mobilier->locale }}</td>
                                    <td>{{ $Mobilier->etat }}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('mobiliers.show', $Mobilier->code) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('mobiliers.edit', $Mobilier->code) }}" class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{ $Mobilier->code }}" action="{{ route('mobiliers.destroy', $Mobilier->code) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit" onclick="deleteEmp('{{ $Mobilier->code }}')" class="btn btn-sm btn-danger">
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
        $(document).ready(function(){
            $('#mytable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                     'copy','excel','csv','print','colvis'
                ]
            });
        })
        function deleteEmp(id){
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
            'Mobilier supprimé avec succès',
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
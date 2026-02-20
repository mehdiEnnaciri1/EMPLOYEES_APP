@extends('adminlte::page')

@section('plugins.datatables', true)

@section('title')
    List Articles
@endsection

@section('content-header')
    <h2>List Articles</h2>
@endsection

@section('content')
    @if(auth()->user()->hasRole('admin'))
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card my-5">
                        <div class="card-header text-center text-uppercase">
                            <h4>Liste des articles</h4>
                        </div>
                        <div class="card-body">
                            <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">Id</th>
                                        <th class="col-md-2">Code</th>
                                        <th class="col-md-2">Nom</th>
                                        <th class="col-md-1">Quantité</th>
                                        <th class="col-md-2">Valeur</th>
                                        <th class="col-md-2">Date d'entrée</th>
                                        <th class="col-md-2">Date de sortie</th>
                                        <th class="col-md-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles as $key => $Article)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $Article->code }}</td>
                                        <td>{{ $Article->nom }}</td>
                                        <td>{{ $Article->quantite }}</td>
                                        <td>{{ $Article->valeur }}</td>
                                        <td>{{ $Article->date_entrer }}</td>
                                        <td>{{ $Article->date_sortie }}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('articles.show', $Article->code) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('articles.edit', $Article->code) }}" class="btn btn-sm btn-warning mx-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="{{ $Article->code }}" action="{{ route('articles.destroy', $Article->code) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <button type="submit" onclick="deleteEmp('{{ $Article->code }}')" class="btn btn-sm btn-danger">
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
                            <h4>Liste des articles</h4>
                        </div>
                        <div class="card-body">
                            <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">Id</th>
                                        <th class="col-md-2">Code</th>
                                        <th class="col-md-2">Nom</th>
                                        <th class="col-md-1">Quantité</th>
                                        <th class="col-md-2">Valeur</th>
                                        <th class="col-md-2">Date d'entrée</th>
                                        <th class="col-md-2">Date de sortie</th>
                                        <th class="col-md-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles as $key => $Article)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $Article->code }}</td>
                                        <td>{{ $Article->nom }}</td>
                                        <td>{{ $Article->quantite }}</td>
                                        <td>{{ $Article->valeur }}</td>
                                        <td>{{ $Article->date_entrer }}</td>
                                        <td>{{ $Article->date_sortie }}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('articles.show', $Article->code) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('articles.edit', $Article->code) }}" class="btn btn-sm btn-warning mx-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="{{ $Article->code }}" action="{{ route('articles.destroy', $Article->code) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <button type="submit" onclick="deleteEmp('{{ $Article->code }}')" class="btn btn-sm btn-danger">
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
            'Article supprimé avec succès',
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
@extends('adminlte::page')

@section('plugins.datatables',true)


@section('title')
    List Mobiliers
@endsection

@section('content-header')
    <h2>List Mobiliers</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
    <div class="contrainer">
        <div class="row">
            <div class="col-md-20 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Liste des mobiliers</h4>
                        </div>
                        <div class="card-body">
                        <table id="mytable" class="table table-bordred font-weight-bold table-stripped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Code</th>
                                    <th>Nom</th>
                                    <th>Quantite</th>
                                    <th>Valeur</th>
                                    <th>Local</th>
                                    <th>Etat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mobiliers as $key => $Mobilier)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <th>{{$Mobilier->code}}</th>
                                    <th>{{$Mobilier->nom}}</th>
                                    <th>{{$Mobilier->quantite}}</th>
                                    <th>{{$Mobilier->valeur}}</th>
                                    <th>{{$Mobilier->locale}}</th>
                                    <th>{{$Mobilier->etat}}</th>
                                    <td class="d-flex justify-content-center aligh-items-center">
                                            <a href="{{route('mobiliers.show',$Mobilier->code)}}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('mobiliers.edit',$Mobilier->code)}}" class="btn btn-sm btn-warning mx-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="{{$Mobilier->code}}" action="{{route('mobiliers.destroy',$Mobilier->code)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <button type="submit" 
                                                    onclick="deleteEmp('{{$Mobilier->code}}')" 
                                                    class="btn btn-sm btn-danger">
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

@if(auth()->user()->hasRole('magasinier'))
    <div class="contrainer">
        <div class="row">
            <div class="col-md-20 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>Liste des mobiliers</h4>
                        </div>
                        <div class="card-body">
                        <table id="mytable" class="table table-bordred font-weight-bold table-stripped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Code</th>
                                    <th>Nom</th>
                                    <th>Quantite</th>
                                    <th>Valeur</th>
                                    <th>Local</th>
                                    <th>Etat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mobiliers as $key => $Mobilier)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <th>{{$Mobilier->code}}</th>
                                    <th>{{$Mobilier->nom}}</th>
                                    <th>{{$Mobilier->quantite}}</th>
                                    <th>{{$Mobilier->valeur}}</th>
                                    <th>{{$Mobilier->locale}}</th>
                                    <th>{{$Mobilier->etat}}</th>
                                    <td class="d-flex justify-content-center aligh-items-center">
                                            <a href="{{route('mobiliers.show',$Mobilier->code)}}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('mobiliers.edit',$Mobilier->code)}}" class="btn btn-sm btn-warning mx-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="{{$Mobilier->code}}" action="{{route('mobiliers.destroy',$Mobilier->code)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <button type="submit" 
                                                    onclick="deleteEmp('{{$Mobilier->code}}')" 
                                                    class="btn btn-sm btn-danger">
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
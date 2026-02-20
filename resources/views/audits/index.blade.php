@extends('adminlte::page')

@section('plugins.datatables', true)

@section('title')
    Historique
@endsection

@section('content-header')
    <h2>Historique</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div class="card-header text-center text-uppercase">
                        <h4>Historique</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">Nom</th>
                                    <th class="col-md-1">User ID</th>
                                    <th class="col-md-2">Événement</th>
                                    <th class="col-md-2">Type de Table</th>
                                    <th class="col-md-1">Table ID</th>
                                    <th class="col-md-3">Anciennes Valeurs</th>
                                    <th class="col-md-3">Nouvelles Valeurs</th>
                                    <th class="col-md-2">Date de Création</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($audits as $key => $Audit)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    @php
                                        $User = App\Models\User::find($Audit->user_id);
                                    @endphp
                                    <td>{{ $User->name ?? '-' }}</td>
                                    <td>{{ $Audit->user_id }}</td>
                                    <td>{{ $Audit->event }}</td>
                                    <td>{{ $Audit->auditable_type }}</td>
                                    <td>{{ $Audit->auditable_id }}</td>
                                    <td>
                                        @foreach($Audit->old_values as $field => $value)
                                            <strong>{{ $field }}:</strong> {{ $value }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($Audit->new_values as $field => $value)
                                            <strong>{{ $field }}:</strong> {{ $value }}<br>
                                        @endforeach
                                    </td>
                                    <td>{{ $Audit->created_at }}</td>
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
                        <h4>Historique</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">Nom</th>
                                    <th class="col-md-1">User ID</th>
                                    <th class="col-md-2">Événement</th>
                                    <th class="col-md-2">Type de Table</th>
                                    <th class="col-md-1">Table ID</th>
                                    <th class="col-md-3">Anciennes Valeurs</th>
                                    <th class="col-md-3">Nouvelles Valeurs</th>
                                    <th class="col-md-2">Date de Création</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($audits as $key => $Audit)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    @php
                                        $User = App\Models\User::find($Audit->user_id);
                                    @endphp
                                    <td>{{ $User->name ?? '-' }}</td>
                                    <td>{{ $Audit->user_id }}</td>
                                    <td>{{ $Audit->event }}</td>
                                    <td>{{ $Audit->auditable_type }}</td>
                                    <td>{{ $Audit->auditable_id }}</td>
                                    <td>
                                        @foreach($Audit->old_values as $field => $value)
                                            <strong>{{ $field }}:</strong> {{ $value }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($Audit->new_values as $field => $value)
                                            <strong>{{ $field }}:</strong> {{ $value }}<br>
                                        @endforeach
                                    </td>
                                    <td>{{ $Audit->created_at }}</td>
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
    </script>
@endsection

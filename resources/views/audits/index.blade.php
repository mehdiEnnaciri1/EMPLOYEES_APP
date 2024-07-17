@extends('adminlte::page')

@section('plugins.datatables',true)


@section('title')
    HISTORIQUE
@endsection

@section('content-header')
    <h2>HISTORIQUE</h2>
@endsection

@section('content')
    @if(auth()->user()->hasRole('admin'))
        <div class="contrainer">
            <div class="row">
                <div class="col-md-20 mx-auto">
                    <div class="card-my-5">
                        <div class="card-header">
                            <div class="text-center text-uppercase">
                                <h4>HISTORIQUE</h4>
                            </div>
                            <div class="card-body">
                            <table id="mytable" class="table table-bordred font-weight-bold table-stripped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>user_id</th>
                                        <th>event</th>
                                        <th>table_type</th>
                                        <th>table_id</th>
                                        <th>old_values</th>
                                        <th>new_values</th>
                                        <th>creation_date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($audits as $key => $Audit)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        @php
                                            $User = App\Models\User::find($Audit->user_id);
                                        @endphp
                                        <td>{{$User->name ?? '-' }}</td>
                                        <th>{{$Audit->user_id}}</th>
                                        <th>{{$Audit->event}}</th>
                                        <th>{{$Audit->auditable_type}}</th>
                                        <th>{{$Audit->auditable_id}}</th>
                                        <td>
                                            @foreach($Audit->old_values as $field => $value)
                                                {{ $field }}: {{ $value }}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($Audit->new_values as $field => $value)
                                                {{ $field }}: {{ $value }}<br>
                                            @endforeach
                                        </td>
                                        <th>{{$Audit->created_at}}</th>
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
                                <h4>HISTORIQUE</h4>
                            </div>
                            <div class="card-body">
                            <table id="mytable" class="table table-bordred font-weight-bold table-stripped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>user_id</th>
                                        <th>event</th>
                                        <th>table_type</th>
                                        <th>table_id</th>
                                        <th>old_values</th>
                                        <th>new_values</th>
                                        <th>creation_date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($audits as $key => $Audit)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        @php
                                            $User = App\Models\User::find($Audit->user_id);
                                        @endphp
                                        <td>{{$User->name ?? '-' }}</td>
                                        <th>{{$Audit->user_id}}</th>
                                        <th>{{$Audit->event}}</th>
                                        <th>{{$Audit->auditable_type}}</th>
                                        <th>{{$Audit->auditable_id}}</th>
                                        <td>
                                            @foreach($Audit->old_values as $field => $value)
                                                {{ $field }}: {{ $value }}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($Audit->new_values as $field => $value)
                                                {{ $field }}: {{ $value }}<br>
                                            @endforeach
                                        </td>
                                        <th>{{$Audit->created_at}}</th>
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
    </script>
@endsection

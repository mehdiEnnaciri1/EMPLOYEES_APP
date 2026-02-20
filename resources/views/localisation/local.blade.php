@extends('adminlte::page')

@section('plugins.datatables', true)

@section('title')
    Localisation
@endsection

@section('content-header')
    <h2>Localisation</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div class="card-header text-center text-uppercase">
                        <h4>Localisation</h4>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered font-weight-bold table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-10">LOCAL</th>
                                    <th class="col-md-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Arrondissement AIN-SBAA</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="https://maps.app.goo.gl/WkNmW2Frfcw3wfrh8?g_st=iw" 
                                           class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

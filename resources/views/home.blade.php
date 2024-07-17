@extends('adminlte::page')

@section('title')
    home
@endsection

@section('content-header')
    <h2>Dashboard</h2>
@endsection

@section('content')
    <div class="contrainer">
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{\App\Models\Emplye::count()}}</h3>
                        <p>EMPLOYES</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('admin/employes')}}" class="small-box-footer">
                    Plus d'informations  <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{\App\Models\Article::count()}}</h3>
                        <p>ARTICLES</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('admin/articles')}}" class="small-box-footer">
                    Plus d'informations <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{\App\Models\Mobilier::count()}}</h3>
                        <p>MOBILIERS</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('admin/mobiliers')}}" class="small-box-footer">
                    Plus d'informations<i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

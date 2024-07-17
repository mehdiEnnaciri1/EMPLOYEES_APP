@extends('layouts.app')


@section('title')
    welcome
@endsection

@section('content')
    <div class="contrainer">
        <div class="row my-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-light">
                        <h3 class="p-2">Bienvenue</h3>
                    </div>
                    <div class="card-body">
                        @guest
                            <a href="{{url('login')}}" class="btn btn-outligne-primary">
                            login
                            </a>
                        @endguest
                            <a href="{{ url('users/create')}}" class="btn btn-outligne-primary">
                                signup
                            </a>
                        @auth 
                            <a href="{{url('admin/home')}}" class="btn btn-outligne-primary">
                            home
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
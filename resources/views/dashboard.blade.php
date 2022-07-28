@extends('layouts.app')

@section('content')

    @auth
        <div>
            <a class="navbar-brand" href="#">ADD PROFILE</a>
        </div>
        <div>
            <a class="navbar-brand" href="{{ route('show') }}">ADD PROJECT</a> 
        </div>
    @endauth


@endsection
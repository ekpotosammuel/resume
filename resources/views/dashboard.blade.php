@extends('layouts.app')

@section('content')
    <center>
        <h1>DASHBOARD</h1>
    </center>
    <div>
        <a class="navbar-brand" href="#">Create Profile</a>
    </div>
    <div>
        <a class="navbar-brand" href="{{ route('show') }}">ADD EXPERIENCE</a> 
    </div>


@endsection
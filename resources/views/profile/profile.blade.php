@extends('layouts.app')

@section('content')
    {{-- <center>
    <div class="card" style="width: auto;">
        <img src="img/profile.jpg" class="rounded-circle" alt="Cinque Terre" width="auto" height="auto"> 
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">"Some quick example text to build on the card title and make up the bulk of the card's content."</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
</center> --}}
    <center>
        <div class="text-center">
        {{--  <img src="img/profile.jpg" class="rounded-circle" alt="...">  --}}
        <img src="img/profile.jpg" class="w-100 rounded-circle" alt="Cinque Terre">
        </div>

        <div class="card-body ">

        </div>
        <div>
            <h5 class="card-title">PERSONAL DETAILS</h5>
            <p class="card-text">
                Server-Side Language: Python Django | PHP Laravel <br>
                Frontend: HTML | CSS | JS | Bootstrap.
            </p>
        </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">First Name:</span> {{$profile->firstName}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Last Name:</span> {{$profile->lastName}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Birthday:</span> {{$profile->dob}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Degree:</span> {{$profile->degree}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Degree:</span> {{$profile->otherCert}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Experience:</span> {{$profile->experience}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Phone:</span> +2349024592013
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Email:</span> {{$profile->email}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">State:</span> Calabar
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Country:</span> {{$profile->country}}
            </div>

    </center>



    {{-- <br>
        <center>
            <div class="container P-4">
                <img src="img/profile.jpg" class="rounded-circle" alt="Cinque Terre" width="606" height="508"> 
            </div>
        </center> <br>
        <div class="row mb-4">
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">First Name:</span> {{$profile->firstName}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Last Name:</span> {{$profile->lastName}}
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Birthday:</span> 1 April 1990
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Degree:</span> Master
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Experience:</span> 10 Years
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Phone:</span> +012 345 6789
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Email:</span> info@example.com
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Address:</span> 123 Street, New York, USA
            </div>
            <div class="col-sm-6 py-1">
                <span class="fw-medium text-primary">Freelance:</span> Available
            </div>
        </div>
    </center> --}}
@endsection

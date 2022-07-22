@extends('layouts.app')

@section('content')


    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <div>
                <label for="name" class="filed"><b>Name</b></label>
                <input type="text" placeholder="Enter Your Name" name="name" class="form-control" required>
            </div>
            <div>
                <label for="email" class="filed"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control" required>
            </div>
        
            <div>
                <label for="password" class="filed"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="psw" class="form-control" required>
            </div>
        
            <div>
                <label for="psw-repeat" class="filed"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" class="form-control" required>
            </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-primary">Register</button>
                </center>
        </div>
    </form>
@endsection

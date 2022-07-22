@extends('layouts.app')


@section('content')

    <center>
        <div>
            Login
        </div>
    </center>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <div>
                <label for="email" class="filed"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control" required>
            </div>
        
            <div>
                <label for="password" class="filed"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="psw" class="form-control" required>
            </div>
        
                <br>
                <center>
                    <button type="submit" class="btn btn-primary">Login</button>
                </center>
        </div>
    </form>
    
@endsection
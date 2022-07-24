@extends('layouts.app')


@section('content')
<center>
    <div>
        ADD
    </div>
</center>
    <form action="{{ route('add') }}" method="POST">
        @csrf
        <div>

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
            </div>
            <div class="form-group">
                <label for="companyName">COMPANY NAME</label>
                <input type="text" class="form-control" id="companyName" placeholder="Company Name" name="companyName">
            </div>
            <div class="form-group">
                <label for="year">DURATION</label>
                <input type="text" class="form-control" id="year" placeholder="Company Name" name="year">
            </div>

            <div class="form-group">
                <label for="projectName">PROJECT NAME</label>
                <input type="text" class="form-control" id="projectName" placeholder="Project Name" name="projectName">
            </div>
            <div class="form-group">
                <label for="url">PROJECT URL</label>
                <input type="text" class="form-control" id="url" placeholder="Project URL" name="url">
            </div>
            <br>
            <center>
                <button type="submit" class="btn btn-primary">SEND</button>
            </center>
        </div>
    </form>
@endsection

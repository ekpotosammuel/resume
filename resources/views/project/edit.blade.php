@extends('layouts.app')


@section('content')
    <center>
        <h1>EDIT</h1>
    </center>
    <form action="{{ route('update', $exp) }}" method="POST">
        @csrf
        <div>
            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $exp->title }}" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="companyName">COMPANY NAME</label>
                <input type="text" name="companyName" class="form-control" value="{{ $exp->companyName }}" placeholder="Company Name" >
            </div>
            <div class="form-group">
                <label for="year">DURATION</label>
                <input type="text" class="form-control" value="{{ $exp->year }}" placeholder="Company Name" name="year">
            </div>
            <div class="form-group">
                <label for="projectName">PROJECT NAME</label>
                <input type="text" class="form-control" value="{{ $exp->projectName }}" placeholder="Project Name" name="projectName">
            </div>
            <div class="form-group">
                <label for="url">PROJECT URL</label>
                <input type="text" class="form-control" value="{{ $exp->url }}" placeholder="Project URL" name="url">
            </div>
            <br>
            <center>
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </center>
        </div>
    </form>
@endsection

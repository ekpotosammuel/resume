@extends('layouts.app')


@section('content')
    <form action="{{ route('project') }}" method="POST">
        @csrf
    <form>
        <div class="form-group">
          <label for="title">TITLE</label>
          <input type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="companyName">COMPANY NAME</label>
            <input type="text" class="form-control" id="companyName" placeholder="Company Name">
        </div>
        <div class="form-group">
            <label for="year">YEAR</label>
            <input type="text" class="form-control" id="year" placeholder="Work Duration">
        </div>
        <div class="form-group">
            <label for="projectName">PROJECT NAME</label>
            <input type="text" class="form-control" id="projectName" placeholder="Project Name">
        </div>
        <div class="form-group">
            <label for="url">PROJECT URL</label>
            <input type="text" class="form-control" id="url" placeholder="Project URL">
        </div>
        <br>
        <center>
            <button type="submit" class="btn btn-primary">ADD</button>
        </center>
      </form>
    
@endsection
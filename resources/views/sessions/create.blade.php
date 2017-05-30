@extends('bloglayouts.master')

@section('pagetitle')
    The Blog : Register
@endsection

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Register</h1>
        <form method="POST" action="/register">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" class="form-control" name="name" required></input>
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" id="email" class="form-control" name="email" required></input>
            </div>
            <div class="form-group">
                <label for="name">Password:</label>
                <input type="password" id="password" class="form-control" name="password" required></input>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
@endsection
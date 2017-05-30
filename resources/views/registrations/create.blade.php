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
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" name="email" required></input>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" class="form-control" name="password" required></input>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required></input>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

                @include('layouts.errors')

        </form>
    </div>
@endsection
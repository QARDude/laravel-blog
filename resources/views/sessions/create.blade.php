@extends('bloglayouts.master')

@section('pagetitle')
    The Blog : Sign In
@endsection

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Login</h1>
        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" name="email" required></input>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" class="form-control" name="password" required></input>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

                @include('layouts.errors')

        </form>
    </div>
@endsection
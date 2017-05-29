@extends('bloglayouts.master')

@section('pagetitle')
    The Blog : Create A Post
@endsection

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a blog post.</h1>
        <hr>
            <form method="POST" action="/posts">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="body">Post Body:</label>
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
            @include('layouts.errors')
    </div>
@endsection
@extends('bloglayouts.master')
@section('pagetitle')
    {{$post->title}}
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>

        @if(count($post->comments))
        <hr>
        <div class="comments">
            <h3>Comments:</h3>
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>{{$comment->created_at->diffForHumans()}}</strong> : &nbsp;
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Add Comments --}}
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" class="form-control" placeholder="Your comment here." required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection
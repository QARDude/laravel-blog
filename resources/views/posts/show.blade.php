@extends('bloglayouts.master')

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
    </div>
@endsection
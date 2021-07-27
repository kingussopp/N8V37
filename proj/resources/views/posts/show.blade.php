@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1> 
    
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small> written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">edit</a>
    <a href="/posts" class="btn btn-default">Go back</a>
    <form method="POST" action="/posts/{{$post->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Delete">
        </div>
    </form>
@endsection
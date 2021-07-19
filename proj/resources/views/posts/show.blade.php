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
    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy' , '$post->id'], 'method' =>'POST' , 'class'=> 'pill-right' ])  !!}
        {{Form::hidden('_method' , 'DELETE') }}
        {{Form::submit('Delete' , ['class' => 'btn btn-danger'] ) }}
    {!!Form::close()!!}
@endsection
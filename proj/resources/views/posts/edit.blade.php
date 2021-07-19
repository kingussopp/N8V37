@extends('layouts.app')

@section('content')
    <h1>edit this Post</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id] , 'methode' => 'POST']) !!}
        <div class='form-group'>
            {{Form::label('title' , 'TITLE')}}
            {{Form::text('title' , $post->title , ['class' => 'form-control' , 'placeholder' => 'Title'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body' , 'Body')}}
            {{Form::textarea('body' , $post->body , ['class' => 'form-control' , 'placeholder' => 'Body'])}}            
        </div>
        {{Form::hidden('_method' , 'PUT')}}
        {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
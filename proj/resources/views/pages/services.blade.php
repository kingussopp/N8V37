@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul>
            @foreach($services as $service)
                <li>
                    <font face="calibri" size="10px" color="#0000ff">
                        {{$service}}
                    </font>
                </li>
            @endforeach
        </ul>
    @endif
    <p>
    the first service page of your life, enjoy it ¨¨
    </p>
@endsection

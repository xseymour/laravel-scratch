@extends('masters.master')

@section('content')

    <h1>Official  Fanclub</h1>

    @foreach($songs as $index => $song)
        <li>
            <a href="/songs/{{$index}}">{{$song}}</a></li>
    @endforeach


@stop
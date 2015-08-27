@extends('masters.master')

@section('content')

    <h1>Official  Fanclub</h1>

    @foreach($songs as $song)
        <li>
            <a href="/songs/{{$song->id}}">{{$song->title}}</a></li>
    @endforeach


@stop
@extends('masters.master')

@section('content')

    @if(!empty($songs))
        <ul>
            @foreach($songs as $song)
                <li>
                    <a href="/songs/{{$song->slug}}">{{$song->title}}</a>
                </li>
            @endforeach
        </ul>
    @endif

@stop
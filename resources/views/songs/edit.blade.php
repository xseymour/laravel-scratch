@extends('masters.master')

@section('content')

    <h2>{{$song->title}}</h2>

    {!! Form::model($song, ['route' => ['songs.show', $song->slug], 'method' => 'PATCH']) !!}

        @include('songs._form')

    {!! Form::close() !!}

@stop
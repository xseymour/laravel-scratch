@extends('masters.master')

@section('content')

    <h1>{{$name}}</h1> {{--Echo and Escapes value--}}
    {{--<h1>{!! $name !!}</h1> --}}{{--Echo and Does Not Escape value--}}
    @foreach($lessons as $lesson)
        <h2>{{$lesson}}</h2>
    @endforeach


@stop


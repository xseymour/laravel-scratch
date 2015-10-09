@extends('masters.master')

@section('content')

    @if(!empty($songs))
        <ul>
            @foreach($songs as $song)
                <li>

                    {!! Html::linkRoute('songs.show', $song->title, [$song->slug]) !!}
                    {{--<a href={{ route('songs.show', [$song->slug]) }}>{{$song->title}}</a>--}}

                </li>
            @endforeach
        </ul>
    @endif

@stop
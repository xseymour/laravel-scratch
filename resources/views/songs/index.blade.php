@extends('masters.master')

@section('content')

    @if(!empty($songs))
        <ul>
            @foreach($songs as $song)
                <li>

                    {!! Html::linkRoute('song_path', $song->title, [$song->slug]) !!}
                    {{--<a href={{ route('song_path', [$song->slug]) }}>{{$song->title}}</a>--}}

                </li>
            @endforeach
        </ul>
    @endif

@stop
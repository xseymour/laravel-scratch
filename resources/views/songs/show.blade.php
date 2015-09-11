@extends('masters.master')

@section('content')

    <h2>{{$song->title}}</h2>

    @if(!empty($song->lyrics))

        <article class="lyrics">
            {!! nl2br($song->lyrics) !!}
        </article>

    @endif

    {!! Html::linkRoute('songs_path', 'Back', [], ['class' => 'btn btn-primary']) !!}
    {!! Html::linkRoute('song_edit_path', 'Edit', [$song->slug], ['class' => 'btn btn-primary']) !!}
    {{--{!! Html::link('/songs/'.$song->slug.'/edit/', 'Edit', ['class' => 'btn btn-primary']) !!}--}}


@stop
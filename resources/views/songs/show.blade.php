@extends('masters.master')

@section('content')

    <h2>{{$song->title}}</h2>

    @if(!empty($song->lyrics))

        <article class="lyrics">
            {!! nl2br($song->lyrics) !!}
        </article>

    @endif

    {!! Html::linkRoute('songs.index', 'Back', [], ['class' => 'btn btn-primary']) !!}
    {!! Html::linkRoute('songs.edit', 'Edit', [$song->slug], ['class' => 'btn btn-primary']) !!}
    {{--{!! Html::link('/songs/'.$song->slug.'/edit/', 'Edit', ['class' => 'btn btn-primary']) !!}--}}


@stop
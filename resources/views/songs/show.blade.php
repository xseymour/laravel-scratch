@extends('masters.master')

@section('content')

    <h2>{{$song->title}}</h2>

    @if(!empty($song->lyrics))

        <article class="lyrics">
            {!! nl2br($song->lyrics) !!}
        </article>

    @endif

    {!! Html::link('/songs/'.$song->slug.'/edit/', 'Edit', ['class' => 'btn btn-primary']) !!}


@stop
<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Model\Song;

class SongsController extends Controller
{
    public function index(Song $song)
    {
        $songs = $song->get();
        return view ('songs.index', compact('songs'));
    }

    public function show(Song $song)
    {
//        $song = Song::whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
//        return "edit the song with a title of ".$song->title;
        return view('songs.edit', compact('song'));
    }


}

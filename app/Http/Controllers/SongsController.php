<?php

namespace App\Http\Controllers;


use App\Http\Requests;

class SongsController extends Controller
{
    public function index()
    {
        $songs = \DB::table('songs_scratch')->get();
        return view ('songs.index', compact('songs'));
    }

    public function show($id)
    {
        $song = \DB::table('songs_scratch')->find($id);
        return view('songs.show', compact('song'));
    }

}

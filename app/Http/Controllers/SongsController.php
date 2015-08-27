<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class SongsController extends Controller
{
    public function index()
    {
        $songs = $this->getSongs();

        return view ('songs.index', compact('songs'));
    }

    public function show($id)
    {
        $song = $this->getSongs()[$id];
        return view('songs.show', compact('song'));
    }

    /**
     * @return array
     */
    private function getSongs()
    {
        return ['Boyfriend ', 'Be Alright', 'Fall'];

    }
}

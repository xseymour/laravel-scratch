<?php

namespace App\Http\Controllers;


use App\Model\Song;
use Illuminate\Http\Request;
use Redirect;

/**
 * Class SongsController
 * @package App\Http\Controllers
 */
class SongsController extends Controller
{

    /**
     * @var Song
     */
    public $song;

    /**
     * Constructor Injection
     * @param Song $song
     */
    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $songs = $this->song->get();
        return view ('songs.index', compact('songs'));
    }

    /**
     * @param Song $song
     * @return \Illuminate\View\View
     */
    public function show(Song $song)
    {
//        $song = Song::whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }

    /**
     * Show a form to create a new Song
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request, Song $song)
    {
        $song->create($request->all());
        return Redirect::route('songs.index');
    }

    /**
     * @param Song $song
     * @return \Illuminate\View\View
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * @param Song $song
     * @param Request $request instance of Method Injection
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Song $song, Request $request)
    {
        //Set all properties at once (must be mass assignable)
        $song->fill(['title' => $request->input('title'), 'lyrics' => $request->input('lyrics')]);
//        $song->fill($request);

        //Set properties individually
//        $song->title    = $request->input('title');
//        $song->lyrics   = $request->input('lyrics');

        $song->save();
        return redirect('songs/'.$song->slug);
    }


}

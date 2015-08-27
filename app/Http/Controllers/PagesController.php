<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function index()
    {
        $lessons = ['My First Lesson', 'My Second Lesson', 'My Third Lesson'];
        $name    = 'John Doe';
        return view('pages.home', compact('name', 'lessons')); //best way
//        return view('pages.home', ['lessons' => $lessons, 'name' => $name]);
//        return view('pages.home')->with('lessons', $lessons )->with('name', $name );
//        return view('pages.home')->withLessons($lessons)->withName($name); //dynamic
    }

}

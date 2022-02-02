<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $title = "Home Page";
        return view('pages.home', compact('title'));
    }

    public function about()
    {
        $title = "About Page";
        return view('pages.about', compact('title'));
    }

    public function favorites()
    {
        $title = "Favorites Page";
        return view('pages.favorites', compact('title'));
    }

    public function gallery()
    {
        $title = "Gallery Page";
        return view('pages.gallery', compact('title'));
    }
}

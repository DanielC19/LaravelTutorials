<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $title = "About us - Online Store";
        $subtitle = "About us";
        $description = "This is an about page ...";
        $author = "Developed by: Daniel Correa 2.0";

        return view('home.about')->with("title", $title)
            ->with("subtitle", $subtitle)
            ->with("description", $description)
            ->with("author", $author);
    }

    public function contact(): View
    {
        return view('home.contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function testimonial()
    {
        return view('pages.testimonial');
    }

    public function project()
    {
        return view('pages.project');
    }
}

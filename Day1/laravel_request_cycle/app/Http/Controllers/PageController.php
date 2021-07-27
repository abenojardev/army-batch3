<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');    
    }

    public function aboutus()
    {
        return view('aboutus');    
    }

    public function contact()
    {
        return view('contact');    
    }

    public function gallery()
    {
        return view('gallery');    
    }

    public function services()
    {
        return view('services');    
    }

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{ 
    public function index()
    {
        return view('test');
    }

    public function test_two()
    {
        return view('test2');
    }

    public function home()
    {
        return view('home');  
    }
}

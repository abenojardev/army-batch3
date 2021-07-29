<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapController extends Controller
{    
    /** 
     * dd() - Die and Debug
     * this helper will stop the process on the current script
     * 
     * returns @vardump
    */ 
    public function index()
    {
        return view('index');
    }
}

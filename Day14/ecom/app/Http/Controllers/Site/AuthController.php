<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('site.auth.login');
    }

    public function register()
    {
        return view('site.auth.register');
    }

    public function register_submit()
    {
        
    }
}

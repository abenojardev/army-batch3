<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Redirect;

class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('index');
    }
    
    public function home()
    {
        return view('home');
    }

    public function verify()
    {
        /**
         * Auth @attempt()
         * 
         * @var Array
         * @return true if the access is granted
         *        creates session
         * 
         * @return false if the access invalid
         *         does not create session
         */
        $verify = Auth::attempt(
            $this->request->except('_token')
        ); 
    }
}

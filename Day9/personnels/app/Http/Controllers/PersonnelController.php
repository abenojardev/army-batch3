<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use Redirect;

class PersonnelController extends Controller
{
    protected $personnel, $request;

    public function __construct(Personnel $personnel, Request $request)
    {
        $this->personnel = $personnel;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->personnel->all();
        
        return view('index')->with([
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function create_save()
    { 
        $this->personnel->create(
            $this->request->all()
        );

        // import Redirect above
        // use Redirect;
        return Redirect::route('home');
    }
}

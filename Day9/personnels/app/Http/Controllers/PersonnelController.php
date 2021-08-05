<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    protected $personnel;

    public function __construct(Personnel $personnel)
    {
        $this->personnel = $personnel;
    }
    
    public function index()
    {
        return view('index');
    }
}

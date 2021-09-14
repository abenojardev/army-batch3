<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;

class DoctorsController extends Controller
{
    public function index()
    {
        $process_start = microtime(true);

        $doctors = Doctors::all();
    }

    public function with_cache()
    {

    }

}

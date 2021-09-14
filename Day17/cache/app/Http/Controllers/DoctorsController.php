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

        $process_end = microtime(true);
        $execution_time = $process_end - $process_start;

        dd(
            'Fetching 500,000 records in '.$execution_time.'s'
        );
    }

    public function with_cache()
    {

    }

}

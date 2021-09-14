<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Cache;

class DoctorsController extends Controller
{
    public function index()
    {
        // avg 2s
        $process_start = microtime(true);

        $doctors = Doctor::all();

        $process_end = microtime(true);
        $execution_time = $process_end - $process_start;

        return view('index')->with([
            'doctors' => $doctors,
            'execution_time' => $execution_time
        ]);
    }

    public function with_cache()
    {
        // file driver 
        // avg 2s
        $process_start = microtime(true);

        if(Cache::has('doctors')){
            $doctors = Cache::get('doctors');
        } else {
            $doctors = Doctor::all();
            Cache::put('doctors', $doctors);
        } 
        
        $process_end = microtime(true);
        $execution_time = $process_end - $process_start;

        return view('index')->with([
            'doctors' => $doctors,
            'execution_time' => $execution_time
        ]);
    }

    // redis driver

}

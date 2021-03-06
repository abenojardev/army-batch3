<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor; 
use Cache, Redis;

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
         
        
        if(is_null(Redis::get('doctors'))){  
            Redis::set('doctors', Doctor::limit(50000)->get());
        } 

        $doctors = Redis::get('doctors'); 

        $process_end = microtime(true);
        $execution_time = $process_end - $process_start;
        
        return view('redis')->with([
            'doctors' => json_decode($doctors),
            'execution_time' => $execution_time
        ]);
    }

    // redis driver

}

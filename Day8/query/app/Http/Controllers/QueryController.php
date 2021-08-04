<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index($type = null)
    {
        //method_exists(self, $type);
        return !is_null($type) ? 
            $this->$type() : 
            abort(404);
    }
    
    public function simple_query()
    {
        
    }
}

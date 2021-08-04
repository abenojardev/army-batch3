<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Human;

class QueryController extends Controller
{
    public function index($type = null)
    { 
        return !is_null($type) && method_exists($this, $type) ? 
            $this->$type() : 
            abort(404);
    }
    
    public function simple_query()
    {
        return dd(
            Human::all()
        );
    }
}

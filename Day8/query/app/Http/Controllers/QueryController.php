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
        return $this->output( 
            Human::all()
        );
    }

    public function select()
    {
        return $this->output( 
            Human::select('first_name', 'last_name', 'gender')->get()
        );
    }

    public function pluck()
    {
        return $this->output( 
            Human::pluck('id')
        );
    }

    public function find()
    {
        return $this->output( 
            Human::find(75)
        );
    }

    public function where()
    {
        return $this->output( 
            /** Best to use constants all the time */
            /** Human::GENDER[1] */
            /**
             * where(column_name, operation, value)
             * 
             * operation
             * =, !=, >, <, >= , <=, <>
             * 
             */
            Human::where('gender', '!=', 'Male')
                   ->select('last_name')
                   ->get()
        );
    }

    public function orwhere()
    {
        return $this->output( 
            Human::where('civil_status', '=', 'Divorced')
                 ->orWhere('civil_status', '=', 'Widowed')
                 ->get()
        );
    }

    public function wherebetween()
    {
        return $this->output( 
            // number or date
            Human::whereBetween('birth_date', [
                    '1985-01-01',
                    '1999-01-01'
                ])
                ->get()
        );
    }
    
 
    public function wherein()
    {
        return $this->output( 
            // number or date
            Human::whereIn('city', [
                    'Valenzuela',
                    'Caloocan',
                    'Paranaque',
                    'asd','asdasda'
                ])
                ->get()
        );
    }

    public function count()
    {
        return $this->output( 
            // number or date
            Human::count()
        );
    }

    public function sum()
    {
        return $this->output( 
            // number or date
            Human::sum('age')
        );
    }

    public function avg()
    {
        return $this->output( 
            // number or date
            Human::avg('age')
        );
    }
     
    public function exists()
    {
        return $this->output( 
            // number or date
            Human::where('last_name', '=', 'Harvey')->exists()
        );
    }
    

    public function output($data)
    {
        return response()->json(
            $data,
            200,
            [],
            JSON_PRETTY_PRINT
        );
    }
}

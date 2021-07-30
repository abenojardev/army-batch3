<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http, Cache;

class CountryController extends Controller
{ 
    protected $api = 'https://restcountries.eu/rest/v2/all';

    public function index()
    {    
        return view('index')->withCountries($this->_getData());
    }

    public function table()
    {    
        return view('table')->withCountries($this->_getData());
    }

    public function _getData()
    {  
        if(Cache::has('countries')){
            return Cache::get('countries');
        }

        $request = Http::get($this->api);

        Cache::add('countries', json_decode($request->body()), '3600');

        return json_decode($request->body()); 
    }
}

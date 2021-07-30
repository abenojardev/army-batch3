<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class CountryController extends Controller
{ 
    protected $api = 'https://restcountries.eu/rest/v2/all';

    public function index()
    {
        // request data from api
        $request = Http::get($this->api);
        // get the results
        $results = $request->body();
        // convert json to array
        $countries = json_decode($results); 
        
        return view('index')->withCountries($countries);
    }
}

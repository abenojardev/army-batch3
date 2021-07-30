<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        return view('index', [
            'name' => 'Aaron De Jesus',
            'age' => 18,
            'height' => 7.24
        ]);
    }

    public function json()
    {
        $personels = [
            'first_name' => 'Juan',
            'last_name' => 'Cruz',
            'middle_name' => 'Dela',
            'age' => 38,
            'gender' => 'Male',
            'birth_date' => 'Aug 9, 1983',
            'contact' => '09561839056',
            'address' => '14 B, Pioneer Woodlands, Boni, Mandaluyong City Philippiens'
        ];

        return view('json')->withPersonels($personels); 
    }

    public function html()
    {
        $html = '<b>This is a bold text</b>';
        $html .= '<br>';
        $html .= '<i>This is a italic text</i>';
        $html .= '<br>';
        $html .= '<kbd>This is a kbd element</kbd>';
        $html .= '<br>';
        $html .= '<button>This is a button</button>';

        return view('html')->withHtml($html);
    }

    public function conditions()
    {
        return view('conditions', [
            'gender' => 'female',
            'age' => 17,
            'vaccinated' => false,
            'sessions' => [],
            'name' => 'john doe'
        ]);
    }
}

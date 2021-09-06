<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('category.index');
    }
    
    public function create()
    {
        return view('category.create');
    }

    public function create_save()
    {
        Category::create(
            $this->request->except('_token')
        );

        Category::create([
            'name' => $this->request->name
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShoppingController extends Controller
{
    /**
     * DB TRANSACTIONS
     * -------------------
     * View data _ DONE
     * Create data _ DONE
     * Delete a data
     * Update a data
     */
    public function index()
    {
        return dd(
            Product::all()
        );
    }
    
    public function create()
    {
        return Product::create([
            'product_name' => '',
            'brand' => '',
            'category' => '',
            'price' => ''
        ]);
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}

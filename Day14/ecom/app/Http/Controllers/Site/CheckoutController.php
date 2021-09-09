<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cache;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('site.checkout.cart');
    }
}

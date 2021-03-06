<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Cache, Auth;
use App\Models\{
    Product,
    Order
};
use \Stripe\StripeClient;

class CheckoutController extends Controller
{
    protected $request, $stripe;

    private $secret_key = 'sk_test_51JXiFhBQ3ej9DvVg7tfddEGwEOptEW3wnrJEAcRWCBqB6GmEQEEmPoWjdg9PBMEiM5YIfFWhbmjCMepL3LO0sNSm00gEr06hnF';

    public function __construct(Request $request)
    { 
        $this->request = $request;

        $this->stripe = new StripeClient(
            $this->secret_key
        );
    }

    public function verify()
    { 
        $charge = $this->stripe->charges->create([
            'amount' => number_format($this->request->total, 2, '',''),
            'currency' => 'php',
            'source' => 'tok_visa',
            'description' => 'Order from :'.Auth::user()->name,
        ]);
        
        Order::create([
            'user_id' => Auth::id(),
            'reference_no' => bcrypt(rand(11111, 99999)),
            'order_items' => Cache::get('cart'),
            'sub_total' => $this->request->total - 100,
            'delivery_fee' => 100,
            'total' => $this->request->total,
            'full_address' => $this->request->address,
            'payment_id' => $charge->id,
            'payment_response' => $charge,
            'payment_status' => $charge->status,
            'status' => 'Processing'
        ]);

        if($charge->status == 'succeeded'){
            // remove items on cart
            Cache::flush(); // Session::flush();
            return back()->withSuccess(true);
        }
        
        abort(500);
    }

    public function index()
    { 
        $cart = Cache::get('cart') ?? [];
        $items = [];
        $total = 0;

        foreach($cart as $product_id => $item){
            $product = Product::find($product_id);

            $product->qty = $item['qty'];

            $product->total = $item['qty'] * $product->price;

            $total += $product->total;

            array_push($items, $product);
        }
 
        return view('site.checkout.cart')->with([
            'items' => $items,
            'total' => $total
        ]);
    }
}

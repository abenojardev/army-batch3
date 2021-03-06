<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\MailSenderJob;

class MailController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('form');
    }

    public function process()
    {  
        dispatch(
            new MailSenderJob(
                $this->request->all()
            ) 
        )->onQueue('emails');
        
        return back();
    }
}

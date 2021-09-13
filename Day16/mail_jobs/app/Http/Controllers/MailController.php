<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewsletterMail;
use Mail;

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
        $template = new NewsletterMail(
            $this->request->message
        );

        Mail::to($this->request->email)
            ->send($template);
    
        
        return back();
    }
}

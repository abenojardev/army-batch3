<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Redirect;

class EventsController extends Controller
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        
    }
    public function update()
    {
        
    }
    public function delete()
    {
        
    }
    public function create()
    {
        $this->event->create([ 
            'title',
            'location',
            'date',
            'description',
            'entrance_fee',
        ]);

        return Redirect::route('indesx');
    }
}

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
        $this->event->find(1)->delete();

    return Redirect::route('index');
    }
    public function create()
    {
        $this->event->create([ 
            'title' => 'Concert',
            'location' => 'Manila City',
            'date' => '2021/08/06',
            'description' => 'lorem ipsum dolor nek akimat',
            'entrance_fee' => 100.00,
        ]);

        return Redirect::route('index');
    }
}

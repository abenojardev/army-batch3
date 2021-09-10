<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CartUpdatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $user_id;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    } 

    public function broadcastOn()
    {
        return new PrivateChannel('cart');
    } 

    public function broadcastAs()
    {
        return 'updated-'.$this->user_id;
    }
}

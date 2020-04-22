<?php

namespace App\Events\Pfr;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EditPfr
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pfr, $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($pfr, $user)
    {
        $this->pfr = $pfr;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

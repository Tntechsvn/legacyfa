<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Notification;
use Mail;

use App\Models\User;

class PfrSubscriber /*implements ShouldQueue */{

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function newPfr($event)
    {
    	
        return true;
    }

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\Pfr\NewPfr',
            'App\Listeners\PfrSubscriber@newPfr'
        );
    }
}
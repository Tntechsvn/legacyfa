<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Notification;
use Mail;

use App\Models\User;

use App\Notifications\DefaultNotification;

class PfrSubscriber /*implements ShouldQueue */{

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = new User;
    }
    
    public function newPfr($event)
    {
        $pfr = $event->pfr;
        $title = $pfr->user->full_name.' just has submit new pfr';
        $data = [
            'type' => 'new',
            'data' => [
                'title' => $title,
                'pfr_id' => $pfr->id
            ]
        ];

        $list_user = $this->user->adminManager()->get();

        Notification::send($list_user, new DefaultNotification($data));
    }
    
    public function approvePfr($event)
    {
        
        $pfr = $event->pfr;
        $user = $event->user;
        $title = $user->full_name.' just has aprroved your pfr';
        $data = [
            'type' => 'new',
            'data' => [
                'title' => $title,
                'pfr_id' => $pfr->id
            ]
        ];

        Notification::send($pfr->user, new DefaultNotification($data));
    }
    
    public function cancelPfr($event)
    {
        $pfr = $event->pfr;
        $user = $event->user;
        $title = $user->full_name.' just has cancelled your pfr';
        $data = [
            'type' => 'new',
            'data' => [
                'title' => $title,
                'pfr_id' => $pfr->id
            ]
        ];

        Notification::send($pfr->user, new DefaultNotification($data));
    }
    
    public function editPfr($event)
    {
        $pfr = $event->pfr;
        $user = $event->user;
    }

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\Pfr\NewPfr',
            'App\Listeners\PfrSubscriber@newPfr'
        );
        $events->listen(
            'App\Events\Pfr\ApprovePfr',
            'App\Listeners\PfrSubscriber@approvePfr'
        );
        $events->listen(
            'App\Events\Pfr\CancelPfr',
            'App\Listeners\PfrSubscriber@cancelPfr'
        );
        $events->listen(
            'App\Events\Pfr\EditPfr',
            'App\Listeners\PfrSubscriber@editPfr'
        );
    }
}
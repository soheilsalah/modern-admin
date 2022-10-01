<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message, $user_id, $sent_at, $count;

    public function __construct($message, $user_id, $sent_at, $count)
    {
        $this->message = $message;
        $this->user_id = $user_id;
        $this->sent_at = $sent_at;
        $this->count = $count;
    }

    public function broadcastOn()
    {
        return ['user-channel-'.$this->user_id];
    }

    public function broadcastAs()
    {
        return 'user-event-'.$this->user_id;
    }
}
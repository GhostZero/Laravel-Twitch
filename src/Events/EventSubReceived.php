<?php

namespace romanzipp\Twitch\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventSubReceived
{
    use Dispatchable;
    use SerializesModels;

    /**
     * The webhook payload.
     *
     * @var array
     */
    public $payload;

    /**
     * Create a new event instance.
     *
     * @param array $payload
     *
     * @return void
     */
    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}

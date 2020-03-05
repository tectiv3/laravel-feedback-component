<?php

namespace Mydnic\Kustomer\Events;

use Illuminate\Queue\SerializesModels;
use Mydnic\Kustomer\Feedback;

class NewFeedback
{
    use SerializesModels;

    public $feedback;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;
    }
}

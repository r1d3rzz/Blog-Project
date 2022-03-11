<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $blog;
    public $commentWriter;
    public $subscriber;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($blog, $commentWriter, $subscriber)
    {
        $this->blog = $blog;
        $this->commentWriter = $commentWriter;
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.subscriberMail', [
            'blog' => $this->blog
        ]);
    }
}

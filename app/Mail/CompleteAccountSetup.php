<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompleteAccountSetup extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $message;
    public $action;
    public $url;
    public $subject;

    public function __construct($name, $subject, $message, $action, $url)
    {
        $this->name = $name;
        $this->message = $message;
        $this->action = $action;
        $this->url = $url;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('notifications@yensoftgh.com')
            ->view('emails.accountsetup.new');
    }
}

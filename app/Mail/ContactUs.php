<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subject, $name, $email, $body;

    public function __construct($subject, $name, $email, $body)
    {
        $this->subject = $subject;
        $this->name = $name;
        $this->email = $email;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to('purposetest8@gmail.com');
        $this->replyTo($this->email);
        
        return $this->markdown('email.markup')
            ->subject($this->subject);
    }
}

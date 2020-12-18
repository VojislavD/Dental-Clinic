<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Booking extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $date, $first_name, $last_name, $email;

    public function __construct($date, $first_name, $last_name, $email)
    {
        $this->date = $date;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to($this->email);
        $this->replyTo('purposetest8@gmail.com');
        
        return $this->markdown('email.booking')
            ->subject('Booked an appoinment for '.$this->date);
    }
}

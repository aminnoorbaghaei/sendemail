<?php

namespace aminnourbaghaei\sendemail\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendemailable extends Mailable
{
    use Queueable, SerializesModels;

    
    public $message;
    public $subject;
    public $to;

    /**
     * Create a new message instance.
     *
     * @param $message
     * @param $subject
     */
    public function __construct($message,$subject)
    {
       
         $this->message=$message;
         $this->subject=$subject;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->subject)->markdown('sendemail::sendemail.email')->with(['message'=>$this->message]);
    }
}

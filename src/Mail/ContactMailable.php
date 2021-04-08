<?php

namespace Goldfeesh\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $subject;
    public $name;
    public $email;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $name, String $email, String $subject,String $message)
    {
        //
      $this->message = $message;
      $this->name = $name;
      $this->subject = $subject;
      $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->markdown('contact::contact.email')->with(['name' => $this->name, 'email'=> $this->email, 'subject' => $this->subject, 'message' => $this->message]);
    }
}

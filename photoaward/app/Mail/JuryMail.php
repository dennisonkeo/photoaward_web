<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JuryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $passs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $passs)
    {
        $this->user = $user;

        $this->passs = $passs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email_jury');
    }
}

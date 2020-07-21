<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncomingPayment extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $deadline;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $deadline)
    {
        $this->user = $user;
        $this->deadline = $deadline;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.paperConfirmation')
                    ->from('info@ichas.id')
                    ->subject('Submission Confirmation');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequestedInternal extends Mailable
{
    use Queueable, SerializesModels;

    protected $input;

    /**
     * Create a new message instance.
     *
     * @param array  $input
     * @return void
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('marco-marassi.com - Contact Request Notification')
            ->view('emails.contact.requested_internal')
            ->text('emails.contact.requested_internal_plain')
            ->with('input', $this->input);
    }
}

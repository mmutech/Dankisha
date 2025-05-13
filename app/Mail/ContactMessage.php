<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

     public function build()
    {
        return $this->from($this->data['email'], $this->data['name']) // Email from Visitor
                    ->subject($this->data['subject'])
                    ->view('emails.contact-email')
                    ->with('data', $this->data);
    }
}

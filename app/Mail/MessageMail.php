<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;

    public function __construct($message)
    {
        $this->messageData = $message;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'رسالة جديدة من الموقع',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.message',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

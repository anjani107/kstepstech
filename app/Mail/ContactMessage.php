<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use SerializesModels;

    public function __construct(
        public readonly string $senderName,
        public readonly string $senderEmail,
        public readonly string $subject,
        public readonly string $messageBody,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->senderEmail, $this->senderName)],
            subject: 'New Contact: ' . $this->subject,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-message',
        );
    }
}

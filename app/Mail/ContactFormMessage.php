<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The contact instance.
     *
     * @var Contact
     */
    protected $contact;

    /**
     * Create a new message instance.
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->contact->email)
            ->markdown('emails.contact')
            ->with([
                'name'      => $this->contact->name,
                'email'     => $this->contact->email,
                'phone'     => $this->contact->phone,
                'message'   => $this->contact->message
            ]);
    }
}

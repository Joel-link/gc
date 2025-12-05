<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientInscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function build()
    {
        return $this->subject('Nouvelle inscription client')
                    ->view('emails.clients_inscription');
    }
}


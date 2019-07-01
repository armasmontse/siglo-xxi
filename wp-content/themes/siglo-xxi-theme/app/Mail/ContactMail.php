<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use App\PageContacto;

class ContactMail extends Mailable
{
    public $input;
    public $contact;

    public function __construct($input)
    {
        $this->input = $input;
        $this->contact = new PageContacto;

        $this->from['name'] = 'Centro Educativo Siglo XXI';
        $this->from['address'] = $this->contact->social_net['mail'];
    }

    public function build()
    {
        return $this->subject('Gracias por contactarnos');
    }
    
}
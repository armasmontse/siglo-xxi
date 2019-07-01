<?php 

namespace App\Http\Ajax;

use Illuminate\Ajax;
use App\PageContacto;
use App\Mail\ContactMail;
use App\Mail\AdminContactMail;
use Illuminate\Mail\Mail;

class ContactAjax extends Ajax
{
    public function store($input)
    {
        $this->validate($input, [
            'name'       => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'phone_type' => 'required'
        ]);

        $contact = new PageContacto;

        // Mail para el comprador.
        Mail::to($input['email'])->send(new ContactMail($input));

        // Mail para el admin
        Mail::to($contact->social_net['mail'])->send(new AdminContactMail($input));

        $this->success( __('Gracias por contactarnos, pronto tendrás noticias de nosotros.') );
    }
}
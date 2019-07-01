<?php 

namespace App;

use Illuminate\Page;

class PageContacto extends Page
{
    public $social_net;

    public $mailables = [
        'mail'
    ];

    function __construct()
    {
        parent::__construct( specialPage('contacto', true) );
    }

    public function setMetas()
    {
        $this->social_net = $this->getSocialNets();

        foreach($this->mailables as $mailable){

            if(!array_key_exists($mailable, $this->social_net) || !$this->social_net[$mailable]){
                $this->social_net[$mailable] = 'hola@elcultivo.mx';
            }

        }
    }

    protected function getSocialNets()
    {
        return \Cltvo_Contacto_SocialNet::getMetaValue($this->post);
    }
}

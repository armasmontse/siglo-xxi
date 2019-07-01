<?php

class Cltvo_Page_Contacto extends Cltvo_Page
{
    public $social_net;
    public $abstract;
    public $certificates;
    public $intro;
    public $requirements;
    public $documents;


    function __construct(){
        parent::__construct( specialPage('contacto',true) );
    }


    public function setMetas()
    {
        $this->certificates = (object) array_map(function($certificate){
            $certificate = (object) $certificate;
            $certificate->logo = new Cltvo_Img($certificate->logo) ;
            return $certificate;
        }, Cltvo_Contacto_Certificates::getMetaValue($this->post));

        $this->intro = Cltvo_Contacto_Intro::getMetaValue($this->post);
        
        $this->social_net = Cltvo_Contacto_SocialNet::getMetaValue($this->post);
        $this->abstract = Cltvo_Contacto_Abstract::getMetaValue($this->post);
        $this->requirements = Cltvo_Contacto_Requirements::getMetaValue($this->post);
        $this->documents = Cltvo_Contacto_Documents::getMetaValue($this->post);
    }

}

<?php

class Cltvo_Page_Services_And_Benefits extends Cltvo_Page
{
    public $intro;
    public $benefits;
    public $services;

    function __construct(){
        parent::__construct( specialPage('servicios-y-beneficios',true) );
    }

    public function setMetas()
    {
        $this->intro  = Cltvo_School_Services_And_Benefits_Intro::getMetaValue($this->post);
        $this->benefits  = Cltvo_School_Services_And_Benefits_Benefits::getMetaValue($this->post);
        $this->services  = Cltvo_School_Services_And_Benefits_Services::getMetaValue($this->post);
    }

}

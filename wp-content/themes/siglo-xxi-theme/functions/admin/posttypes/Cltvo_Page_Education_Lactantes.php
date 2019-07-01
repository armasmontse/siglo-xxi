<?php

class Cltvo_Page_Education_Lactantes extends Cltvo_Page
{
    public $intro;
    public $initial_education;

    function __construct(){
        parent::__construct( specialPage('niveles-educativos-lactantes',true) );
    }

    public function setMetas()
    {
        $this->intro                = Cltvo_Education_Levels_Intro::getMetaValue($this->post);
        $this->initial_education    = Cltvo_Education_Levels_Initial_Education::getMetaValue($this->post);

    }

}

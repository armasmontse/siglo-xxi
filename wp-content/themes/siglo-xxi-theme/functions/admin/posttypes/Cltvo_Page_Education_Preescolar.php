<?php

class Cltvo_Page_Education_Preescolar extends Cltvo_Page
{
    public $preschool_education;

    function __construct(){
        parent::__construct( specialPage('niveles-educativos-preescolar',true) );
    }

    public function setMetas()
    {
        $this->preschool_education  = Cltvo_Education_Levels_Preschool_Education::getMetaValue($this->post);

    }

}

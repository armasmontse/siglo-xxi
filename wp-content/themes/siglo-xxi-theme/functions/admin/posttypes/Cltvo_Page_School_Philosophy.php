<?php

class Cltvo_Page_School_Philosophy extends Cltvo_Page
{
    public $details;
    public $details_parts;
    public $gallery;
    public $intro;
    public $sentence;
    public $team;


    function __construct(){
        parent::__construct( specialPage('filosofia-de-la-escuela',true) );
    }

    public function setMetas()
    {
        $this->intro  = Cltvo_School_Philosophy_Intro::getMetaValue($this->post);
        $this->details   = Cltvo_School_Philosophy_Details::getMetaValue($this->post);
        $this->details_parts   = Cltvo_School_Philosophy_Details::$parts;

        $this->sentence  = Cltvo_School_Philosophy_Sentence::getMetaValue($this->post);
        $this->team  = Cltvo_School_Philosophy_Team::getMetaValue($this->post);
        $this->gallery    = array_filter(array_map(function($img){
            return new Cltvo_Img($img["imagen"]);
        }, Cltvo_School_Philosophy_Gallery::getMetaValue($this->post)), function($img){
            return $img->img_id;
        });
    }

}

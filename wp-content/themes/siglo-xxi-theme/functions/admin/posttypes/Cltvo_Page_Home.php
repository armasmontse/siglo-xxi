<?php

class Cltvo_Page_Home extends Cltvo_Page
{
    public $tag_line_y_nombres;
    public $quotes;
    public $activities;
    public $last_news;

    function __construct(){
        parent::__construct( specialPage('home',true) );
    }

    public function setMetas()
    {
        $this->tagline_name = Cltvo_Home_Splash::getMetaValue($this->post);
        $this->quotes       = Cltvo_Home_Quotes::getMetaValue($this->post);
        $this->activities   = Cltvo_Home_Activities::getMetaValue($this->post);

        $this->last_news    = Cltvo_Home_Last_News::getMetaValue($this->post);

        $this->last_news["end_date"] = $this->parseDate($this->last_news["end_date"]);

        $this->last_news["now"] = $this->parseDate("now");

    }


    public function parseDate($date)
    {
        try {
            $parse_date =  new DateTime($date);
        } catch (\Exception $e) {
            $parse_date =  new DateTime(date("d-m-Y"));
        }

        return $parse_date;
    }

}

<?php

class Cltvo_School_Philosophy_Sentence extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Frase";
    protected $post_type = "page";

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("filosofia-de-la-escuela");
	}


    public static function setMetaValue($meta){
        return $meta;
    }
    
    public function CltvoDisplayMetabox($object) {
        ?>
        <?php wp_editor($this->meta_value, strtolower($this->meta_key), array(
            'textarea_name'	=> 	$this->meta_key,
            'media_buttons'	=> 	false
        )) ?>
        <?php
    }

}

<?php

class Cltvo_School_Philosophy_Details extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Detalles";
    protected $post_type = "page";

    public static $parts = [
        "text_1" => "Modelo constructivista",
        "text_2" => "Inteligencias múltiples",
    ];

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("filosofia-de-la-escuela");
	}


    public static function setMetaValue($meta){
        $meta = is_array($meta) ? $meta : [];

        foreach (static::$parts as  $part => $label ) {
            $meta[$part] = isset( $meta[$part] ) ?  $meta[$part] : "" ;
        }

        return $meta;
    }

    public function CltvoDisplayMetabox($object) {

        foreach (static::$parts as $part => $label) {
            ?><h3 style="font-size:14px"> <?= $label ?></h3><?php

            wp_editor($this->meta_value[$part], strtolower($this->meta_key."_".$part), array(
                'textarea_name'	=> 	$this->meta_key."[".$part."]",
                'media_buttons'	=> 	false
            ));
        }

    }

}

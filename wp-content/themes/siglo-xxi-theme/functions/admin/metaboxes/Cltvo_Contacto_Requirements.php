<?php
require_once 'traits/Cltvo_Repiter_Trait.php';

class Cltvo_Contacto_Requirements extends Cltvo_Metabox_Master
{
	use Cltvo_Repiter_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Requerimientos";
    protected $post_type = "page";

    /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("contacto");
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){
        return static::setValuesOfSingleImputRepiter($meta);
    }


	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){
        $this->printSingleItemRepiterList([],"Entrevista de los padres...");
	}
}

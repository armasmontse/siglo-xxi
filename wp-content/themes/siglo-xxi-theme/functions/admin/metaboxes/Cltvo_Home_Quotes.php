<?php
require_once 'traits/Cltvo_Repiter_Trait.php';

class Cltvo_Home_Quotes extends Cltvo_Metabox_Master
{
    use Cltvo_Repiter_Trait;
    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Citas";
    protected $post_type = "page";

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("home");
	}

    protected static function getItemParts()
	{
		return [
			"quote"			=> [
				"type"			=>	"textarea",
				"label"			=>	"Cita:",
				"placeholder"	=>	"Estas palabras sencillas ...",
			],
			"name"	=> [
				"type"			=>	"text",
				"label"			=>	"Nombre:",
				"placeholder"	=>	"Kelly de la Fuente...",
			],
            "title"			=> [
                "type"			=>	"text",
                "label"			=>	"Título:",
                "placeholder"	=>	"Alumna, 2002",
            ],
		];
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){
        return static::setValuesOfMultiImputRepiter(static::getItemParts(),$meta);
    }


	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){
        $this->printMultiItemRepiterList(static::getItemParts(),[]);
	}

}

<?php
require_once 'traits/Cltvo_Repiter_Trait.php';

class Cltvo_School_Services_And_Benefits_Benefits extends Cltvo_Metabox_Master
{
	use Cltvo_Repiter_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Beneficios";
    protected $post_type = "page";

    /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("servicios-y-beneficios");
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){

        $meta = is_array($meta) ? $meta : [] ;

        $meta["sentence"] = isset($meta["sentence"]) ? $meta["sentence"] :  "";
        $meta["benefits"] = static::setValuesOfSingleImputRepiterInPath($meta,"benefits");

        return $meta;
    }


	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){

        ?>
        <style media="screen">
            .ancho_100{
                width: 100%;
            }
        </style>

		<div class="ancho_100">
			<label for="<?php echo  $this->meta_key; ?>_sentence">Introducción</label>
			<textarea
				rows="2"
				placeholder="Conoce las áreas de aprendizaje..."
				name="<?php echo  $this->meta_key; ?>[sentence]"
				id="<?php echo  $this->meta_key; ?>_sentence"
				class="ancho_100"
				><?php echo $this->meta_value["sentence"]; ?></textarea>
		</div> <hr> <?php


		$this->printSingleItemRepiterList(["benefits"],"Seguro escolar");
	}

}

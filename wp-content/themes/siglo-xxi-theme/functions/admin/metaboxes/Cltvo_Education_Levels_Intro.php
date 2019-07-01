<?php

class Cltvo_Education_Levels_Intro extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Introducción";
    protected $post_type = "page";
	protected $prioridad = 'high';

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("niveles-educativos-lactantes");
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){

        $meta = is_array($meta) ? $meta : [] ;

        $meta["title"] = isset($meta["title"]) ? $meta["title"] :  "";
        $meta["subtitle"] = isset($meta["subtitle"]) ? $meta["subtitle"] :  "";

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
        		<table class="ancho_100" >
        			<tr>
        				<td >
                            <label for="<?php echo  $this->meta_key; ?>_title">Frase corta:</label>
        				</td>
                        <td>
                            <textarea
                                rows="2"
                                placeholder="Nos enfocamos y somos..."
                                name="<?php echo  $this->meta_key; ?>[title]"
                                id="<?php echo  $this->meta_key; ?>_title"
                                class="ancho_100"
                                ><?php echo $this->meta_value["title"]; ?></textarea>
        				</td>
        			</tr>
        			<tr>
        				<td>
        				    <label for="<?php echo  $this->meta_key; ?>_subtitle">Frase larga:</label>
        				</td>
                        <td>
                            <textarea
                                rows="2"
                                placeholder="Nos enfocamos y somos..."
                                name="<?php echo  $this->meta_key; ?>[subtitle]"
                                id="<?php echo  $this->meta_key; ?>_subtitle"
                                class="ancho_100"
                                ><?php echo $this->meta_value["subtitle"]; ?></textarea>
                        </td>
        			</tr>
        		</table>
        		<?php
	}

}

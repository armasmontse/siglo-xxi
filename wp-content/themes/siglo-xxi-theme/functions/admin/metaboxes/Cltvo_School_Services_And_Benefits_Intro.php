<?php

class Cltvo_School_Services_And_Benefits_Intro extends Cltvo_Metabox_Master
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
		return isSpecialPage("servicios-y-beneficios");
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
        					<input type="text" placeholder="UN ESPACIO ALEGRE..." name="<?php echo  $this->meta_key; ?>[title]" id="<?php echo  $this->meta_key; ?>[title]" value="<?php echo $this->meta_value['title']; ?>" class="ancho_100" />
        				</td>
        			</tr>
        			<tr>
        				<td>
        				    <label for="<?php echo  $this->meta_key; ?>_subtitle">Frase larga:</label>
        				</td>
                        <td>
                            <textarea
                                rows="2"
                                placeholder="Centro Educativo..."
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

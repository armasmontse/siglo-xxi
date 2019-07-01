<?php

class Cltvo_School_Philosophy_Team extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Equipo";
    protected $post_type = "page";

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("filosofia-de-la-escuela");
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){

        $meta = is_array($meta) ? $meta : [] ;

        $meta["title"] = isset($meta["title"]) ? $meta["title"] :  "";
        $meta["content"] = isset($meta["content"]) ? $meta["content"] :  "";

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
                            <label for="<?php echo  $this->meta_key; ?>_title">Frase:</label>

        					<input type="text" placeholder="CUIDADO, CARIÑO Y..." name="<?php echo  $this->meta_key; ?>[title]" id="<?php echo  $this->meta_key; ?>[title]" value="<?php echo $this->meta_value['title']; ?>" class="ancho_100" />
        				</td>
        			</tr>
        			<tr>
        				<td>
        				    <label for="<?php echo  $this->meta_key; ?>_content">Contenido:</label>

                            <?php wp_editor($this->meta_value["content"], strtolower($this->meta_key."_content"), array(
                                'textarea_name'	=> 	$this->meta_key."[content]",
                                'media_buttons'	=> 	false
                            )) ?>
                        </td>
        			</tr>
        		</table>
        		<?php
	}

}

<?php

class Cltvo_Home_Splash extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Tagline y nombre";
    protected $post_type = "page";

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("home");
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){

        $meta = is_array($meta) ? $meta : [] ;

        $meta["tagline"] = isset($meta["tagline"]) ? $meta["tagline"] :  "";
        $meta["name"] = isset($meta["name"]) ? $meta["name"] :  "";

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
                            <label for="<?php echo  $this->meta_key; ?>_tagline">Tagline</label>
        				</td>
        				<td>
                            <textarea
                                rows="2"
                                placeholder="Por una nueva..."
                                name="<?php echo  $this->meta_key; ?>[tagline]"
                                id="<?php echo  $this->meta_key; ?>_tagline"
                                class="ancho_100"
                                ><?php echo $this->meta_value["tagline"]; ?></textarea>
        				</td>
        			</tr>
        			<tr>
        				<td>
        				    <label for="<?php echo  $this->meta_key; ?>_name">Nombre:</label>
        				</td>
        				<td>
        					<input type="text" placeholder="Centro educativo..." name="<?php echo  $this->meta_key; ?>[name]" id="<?php echo  $this->meta_key; ?>[name]" value="<?php echo $this->meta_value['name']; ?>" class="ancho_100" />
        				</td>
        			</tr>
        		</table>
        		<?php
	}

}

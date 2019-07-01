<?php

class Cltvo_Home_Last_News extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Última noticia";
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

        $meta["news_date"] = isset($meta["news_date"]) ? $meta["news_date"] :  "";
        $meta["end_date"] = isset($meta["end_date"]) ? $meta["end_date"] :  "";
        $meta["news"] = isset($meta["news"]) ? $meta["news"] :  "";

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
                        <td width= "60%">
                            <label for="<?php echo  $this->meta_key; ?>_news_date">Fecha de notícia:</label>

                            <input type="text" placeholder='2018-01-19'name="<?php echo  $this->meta_key; ?>[news_date]" id="<?php echo  $this->meta_key; ?>[news_date]" value="<?php echo $this->meta_value['news_date']; ?>" class="ancho_100" />
                        </td>

                        <td width= "40%">
                            <label for="<?php echo  $this->meta_key; ?>_end_date">Fecha limite de visualización:</label>
                            <input type="date" placeholder='2018-01-19' name="<?php echo  $this->meta_key; ?>[end_date]" id="<?php echo  $this->meta_key; ?>[end_date]" value="<?php echo $this->meta_value['end_date']; ?>" class="ancho_100" />
                        </td>
                    </tr>
        			<tr>
        				<td colspan="2">
                            <label for="<?php echo  $this->meta_key; ?>_news">Noticia</label>
                            <textarea
                                rows="2"
                                placeholder=", Lorem consectetur adipi..."
                                name="<?php echo  $this->meta_key; ?>[news]"
                                id="<?php echo  $this->meta_key; ?>_news"
                                class="ancho_100"
                                ><?php echo $this->meta_value["news"]; ?></textarea>
        				</td>
        			</tr>

        		</table>
        		<?php
	}

}

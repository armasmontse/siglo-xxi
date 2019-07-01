<?php

class Cltvo_Contacto_Certificates extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Certificaciones";
    protected $post_type = "page";

    static protected $certificates = [
        "sep"           => "Incorporación a la SEP",
        "cambridge"     => "Cambridge"
    ];

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

        $meta = is_array($meta) ? $meta : [] ;

        foreach (static::$certificates as $certificate_key => $certificate) {
            $meta[$certificate_key] = static::setCertificateValue( isset($meta[$certificate_key]) ? $meta[$certificate_key] : []  );
        }

        return $meta;
    }

    public static function setCertificateValue($meta_certificate)
    {
        $meta_certificate = is_array($meta_certificate) ? $meta_certificate : [] ;

        $meta_certificate["register"] = isset($meta_certificate["register"]) ? $meta_certificate["register"] :  "";
        $meta_certificate["logo"] = isset($meta_certificate["logo"]) ? $meta_certificate["logo"] :  "";

        return $meta_certificate;
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

            .table__banners .thumbnail {
                text-align: center;
                position: relative;
            }

            .table__banners .thumbnail_holder {
                width: 100%;
                display: flex;
                justify-content: center;

            }

            .table__banners .thumbnail .reset{
                color: #a00;
                cursor: pointer;
                position: absolute;
                right: 0px;
            }

            .table__banners .thumbnail .reset:hover{
                color: #dc3232;
                border: none;
            }


        </style>
            <div id="table__banners">

            <table class="table__banners ancho_100" cellpadding="0" cellspacing="0">
                <tbody id="tbody__imagen_JS">
                    <?php foreach (self::$certificates as $key => $name) : ?>

                        <tr id="<?php echo $this->meta_key."_".$key; ?>" class="banner_row">
                            <td>
                                <label class="label" for="<?php echo $this->meta_key."_".$key; ?>_register">
                                    <?php echo $name; ?>
                                </label>

                                <textarea
                                    rows="2"
                                    name="<?php echo $this->meta_key."[".$key."][register]"; ?>"
                                    id="<?php echo $this->meta_key."_".$key; ?>_register"
                                    class="ancho_100"
                                    ><?php echo $this->meta_value[$key]["register"]; ?></textarea>

                            </td>
                            <td class="thumbnail">

                            <div class="thumbnail_holder">
                                <?php if ( $this->meta_value[$key]["logo"] != '' ) : ?>
                                    <div class="reset">&#10005;</div>
                                    <?php echo wp_get_attachment_image($this->meta_value[$key]["logo"],"thumbnail"); ?>
                                <?php endif; ?>
                                <button class="button media-button" style="display:none;">Elegir Logo</button>
                            </div>
                            <input
                            type="hidden"
                            class="media-input"
                            placeholder="URL"
                            name="<?php echo $this->meta_key."[".$key."][logo]"; ?>"
                            id="<?php echo $this->meta_key."_".$key; ?>_logo"
                            value="<?php echo $this->meta_value[$key]["logo"]; ?>"
                            />

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            </div>
        <?php
	}



    /**
     * Imprime los input de las redes sociales
     *
     * Parametros:
     *
     * @param string $slug slug de la red social
     * @param array $meta array con los valores link y cuenta
     */

    private function social_network_link($slug) {
    	 ?>
            <p>
                <label for="<?php echo $this->meta_key."_".$slug; ?>_cuenta" >Cuenta:</label><br>
                <input type="text"
                      placeholder="<?= $slug ?>"
                      name="<?php echo $this->meta_key."[".$slug."][cuenta]"; ?>"
                      id="<?php echo $this->meta_key."_".$slug; ?>_cuenta"
                      value="<?php echo $this->meta_value[$slug]['cuenta']; ?>"
                      class="ancho_100" />
            </p>
    		<p>
    			<label for="<?php echo $this->meta_key."_".$slug; ?>_link" >Link:</label><br>
    			<input type="url"
                        placeholder="http://"
                        name="<?php echo $this->meta_key."[".$slug."][link]"; ?>"
                        id="<?php echo $this->meta_key."_".$slug; ?>_link"
                        value="<?php echo $this->meta_value[$slug]['link']; ?>"
                        class="ancho_100" />
    		</p>
    	 <?php
    }

}

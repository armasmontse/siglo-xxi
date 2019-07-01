<?php

class Cltvo_Contacto_SocialNet extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Contacto";
    protected $post_type = "page";


    /**
     * proiedades de esta clase
     */
    protected static $redesConUrl = [
        'facebook' => 'Facebook:',
		'twitter' => 'Twitter:',
		// 'pinterest' => 'Pinterest:',
        'instagram' => 'Instagram:',
        'linkedin' => 'Linkedin:',
		// 'google' => 'Google plus:',
		// 'tumblr' => 'Tumblr:'
	];

    protected static $redesSinUrl = [
        'mail' => 'Email:',
		'phone' => 'Teléfono:',
        'address_link'  => 'Link al mapa:',
	];

    protected static $textos = [
        'address' => 'Dirección:',
        'timetable' => 'Horario:',
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

        foreach (self::$textos as $red => $imagen) {
			$meta[$red] = isset($meta[$red]) ? $meta[$red] :  "";
		}

        foreach (self::$redesSinUrl as $red => $imagen) {
            $meta[$red] = isset($meta[$red]) ? $meta[$red] :  "";
        }


		foreach (self::$redesConUrl as $red => $imagen) {
			$meta[$red] = isset($meta[$red]) ? $meta[$red] :  array('cuenta'=> '', 'link'=> '');
		}

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
        					Teléfono:
        				</td>
        				<td>
        					<input type="text" placeholder="+(52 55) 5555 5555 " name="<?php echo  $this->meta_key; ?>[phone]" id="<?php echo  $this->meta_key; ?>[phone]" value="<?php echo $this->meta_value['phone']; ?>" class="ancho_100" />
        				</td>
        			</tr>
        			<tr>
        				<td>
        					Correo:
        				</td>
        				<td>
        					<input type="email" placeholder="ejemplo@ejemplo.com" name="<?php echo  $this->meta_key; ?>[mail]" id="<?php echo  $this->meta_key; ?>[mail]" value="<?php echo $this->meta_value['mail']; ?>" class="ancho_100" />
        				</td>
        			</tr>
                    <tr>
        				<td>
        					Link al mapa:
        				</td>
        				<td>
        					<input type="url" placeholder="https://www.google.com/maps/place" name="<?php echo  $this->meta_key; ?>[address_link]" id="<?php echo  $this->meta_key; ?>[address_link]" value="<?php echo $this->meta_value['address_link']; ?>" class="ancho_100" />
        				</td>
        			</tr>
                    <?php foreach (self::$textos as $slug => $nombre): ?>
                        <tr>
                            <td>
                                <?= $nombre ?>
                            </td>
                            <td>
                                <textarea
                                    rows="2"
                                    placeholder="..."
                                    name="<?php echo  $this->meta_key; ?>[<?php echo $slug; ?>]"
                                    id="<?php echo  $this->meta_key; ?>_<?php echo $slug; ?>"
                                    class="ancho_100"
                                    ><?php echo $this->meta_value[$slug]; ?></textarea>
                            </td>
                        </tr>
                    <?php endforeach; ?>

        			<?php foreach (self::$redesConUrl as $slug => $nombre): ?>
        				<tr>
        					<td>
        						<?php echo $nombre; ?>
        					</td>
        					<td>
        						<?php $this->social_network_link($slug); ?>
        					</td>
        				</tr>

        			<?php endforeach; ?>

        		</table>
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

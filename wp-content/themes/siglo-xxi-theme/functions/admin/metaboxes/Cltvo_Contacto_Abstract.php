<?php

class Cltvo_Contacto_Abstract extends Cltvo_Metabox_Master
{

	protected $description_metabox = 'Conoce nuestras instalaciones';
	protected $post_type = 'page';

	public static function setMetaValue($meta){
		return $meta;
	}


  	public static function metaboxDisplayRule(){
  		return isSpecialPage("contacto");
  	}


	public function CltvoDisplayMetabox($object) {
		?>
		<?php wp_editor($this->meta_value, strtolower($this->meta_key), array(
			'textarea_name'	=> 	$this->meta_key,
			'media_buttons'	=> 	false
		)) ?>
		<?php
	}
}

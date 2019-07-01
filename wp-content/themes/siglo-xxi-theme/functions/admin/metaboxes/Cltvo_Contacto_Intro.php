<?php

class Cltvo_Contacto_Intro extends Cltvo_Metabox_Master
{

	protected $description_metabox = 'Frase de introducción';
	protected $post_type = 'page';
	protected $prioridad = 'high';



	public static function setMetaValue($meta){
		return $meta;
	}


  	public static function metaboxDisplayRule(){
  		return isSpecialPage("contacto");
  	}


	public function CltvoDisplayMetabox($object) {
		?>
			<table class="" cellpadding="0" cellspacing="0" style="width: 100%">
				<tbody id="">
						<tr id="" class="">
							<td style="width: 100%;">
                                <textarea placeholder="El aprendizaje es un tesoro..."  rows="2" name="<?php echo  $this->meta_key; ?>" id="<?php echo  $this->meta_key; ?>"  style=" width: 100%" ><?php echo $this->meta_value; ?></textarea>
							</td>
						</tr>
				</tbody>
			</table>
	<?php
	}
}

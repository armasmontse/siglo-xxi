<?php
require_once 'traits/Cltvo_Repiter_Trait.php';

class Cltvo_Home_Activities extends Cltvo_Metabox_Master
{
	use Cltvo_Repiter_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Actividades";
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

        $meta["sentence"] = isset($meta["sentence"]) ? $meta["sentence"] :  "";
		$meta["activities"] = static::setValuesOfSingleImputRepiterInPath($meta,"activities");

		$meta["phrase_ini"] = isset($meta["phrase_ini"]) ? $meta["phrase_ini"] :  "";
		$meta["phrase_pre"] = isset($meta["phrase_pre"]) ? $meta["phrase_pre"] :  "";

		$meta['education'] = (isset($meta['education']) && is_array($meta['education']) )? $meta['education'] : [];
		$meta['education']["initial"]	= static::setValuesOfSingleImputRepiterInPath($meta['education'],"initial");
		$meta['education']["prescholar"]= static::setValuesOfSingleImputRepiterInPath($meta['education'],"prescholar");

        return $meta;
    }


	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){
        ?>
		<table class="" cellpadding="0" cellspacing="0" style="width: 100%">
			<tbody id="">
					<tr id="" class="">
						<td style="width: 100%;">
							<label for="<?php echo  $this->meta_key; ?>_sentence">Frase</label>
                            <textarea
								placeholder="Conoce las areas de aprendizaje..."
								rows="2"
								name="<?php echo  $this->meta_key; ?>[sentence]"
								id="<?php echo  $this->meta_key; ?>_sentence"
								style=" width: 100%"
							><?php echo $this->meta_value["sentence"]; ?></textarea>
						</td>
					</tr>
			</tbody>
		</table>

		<table class="" cellpadding="0" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<td colspan="2">
						<h3 style="    font-size: 14px;"> Listas: </h3>
						<hr>
					</td>
				</tr>
				<tr>
					<td width="50%">
						<h4>Lista Educación Inicial:</h4>
					</td>
					<td width="50%" >
						<h4>Lista Educación Preescolar:</h4>
					</td>
				</tr>
			</thead>
			<tbody id="">
				<tr>
					<td width="50%">
						<label for="<?php echo  $this->meta_key; ?>_phrase_ini">Frase Educación Inicial</label>
						<textarea
							placeholder="Educación Inicial "
							rows="2"
							name="<?php echo  $this->meta_key; ?>[phrase_ini]"
							id="<?php echo  $this->meta_key; ?>_phrase_ini"
							style=" width: 100%"
						><?php echo $this->meta_value["phrase_ini"]; ?></textarea>
					</td>
					<td width="50%" >
						<label for="<?php echo  $this->meta_key; ?>_phrase_pre">Frase Educación Preescolar</label>
						<textarea
							placeholder="Educación Preescolar"
							rows="2"
							name="<?php echo  $this->meta_key; ?>[phrase_pre]"
							id="<?php echo  $this->meta_key; ?>_phrase_pre"
							style=" width: 100%"
						><?php echo $this->meta_value["phrase_pre"]; ?></textarea>
					</td>
				</tr>
					<tr id="" class="">
						<td valign="top">
							<?php $this->printSingleItemRepiterList(["education","initial"],"Educacion Inicial")  ?>
						</td>
						<td  valign="top" >
							<?php $this->printSingleItemRepiterList(["education","prescholar"],"Educacion Preescolar")  ?>
						</td>
					</tr>
			</tbody>
		</table>
	<?php
	}

}

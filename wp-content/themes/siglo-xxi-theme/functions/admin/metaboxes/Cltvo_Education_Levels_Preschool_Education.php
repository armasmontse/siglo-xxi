<?php
require_once 'traits/Cltvo_Repiter_Trait.php';

class Cltvo_Education_Levels_Preschool_Education extends Cltvo_Metabox_Master
{
	use Cltvo_Repiter_Trait;

	protected $description_metabox = 'Educación preescolar';
	protected $post_type = 'page';
	// protected $prioridad = 'high';

	protected static $doble_col_repiters = [
		"preschool",
	];

	public static function setMetaValue($meta){
		$meta = is_array($meta) ? $meta : [];
		$meta["sentence"] = isset($meta["sentence"]) ? $meta["sentence"] : "";

		foreach (static::$doble_col_repiters as $repiter) {
			$meta[$repiter] = (isset($meta[$repiter]) && is_array($meta[$repiter]) )? $meta[$repiter] : [];

			$meta[$repiter]["left_col"]	= static::setValuesOfSingleImputRepiterInPath($meta[$repiter],"left_col");
			$meta[$repiter]["right_col"]= static::setValuesOfSingleImputRepiterInPath($meta[$repiter],"right_col");

		}

		return $meta;
	}


  	public static function metaboxDisplayRule(){
  		return isSpecialPage("niveles-educativos-preescolar");
  	}


	public function CltvoDisplayMetabox($object) {
		// var_dump($this->meta_value);
		?>
		<table class="" cellpadding="0" cellspacing="0" style="width: 100%">
			<tbody id="">
					<tr id="" class="">
						<td style="width: 100%;">
							<label for="<?php echo  $this->meta_key; ?>_sentence">Frase de introducción</label>
                            <textarea
								placeholder="Aprendizaje basado en el modelo..."
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
						<h3 style="    font-size: 14px;"> Preescolar:</h3>
						<hr>
					</td>
				</tr>
				<tr>
					<td width="50%">
						<h4>Campos formativos:</h4>
					</td>
					<td width="50%" >
						<h4>Lista amarilla:</h4>
					</td>
				</tr>
			</thead>
			<tbody id="">
					<tr id="" class="">
						<td valign="top">
							<?php $this->printSingleItemRepiterList(["preschool","left_col"],"Lenguaje y comunicación")  ?>
						</td>
						<td  valign="top" >
							<?php $this->printSingleItemRepiterList(["preschool","right_col"],"Computación")  ?>
						</td>
					</tr>
			</tbody>
		</table>
	<?php
	}

}

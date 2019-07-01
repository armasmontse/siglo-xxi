<?php

include_once get_template_directory().'/ajax/CltvoAjaxSingleMail.php';
include_once get_template_directory().'/functions/theme/ajax/traits/FormTrait.php';


class Cltvo_Footer_Form extends Cltvo_Ajax_Master
{
	use FormTrait;

	const FORM_ID = "footer_form_JS";


}

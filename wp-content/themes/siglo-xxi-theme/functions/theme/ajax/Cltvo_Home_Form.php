<?php

include_once get_template_directory().'/ajax/CltvoAjaxSingleMail.php';
include_once get_template_directory().'/functions/theme/ajax/traits/FormTrait.php';


class Cltvo_Home_Form extends Cltvo_Ajax_Master
{
	use FormTrait;
	const FORM_ID = "home_form_JS";

}

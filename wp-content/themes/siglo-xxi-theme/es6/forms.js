var sendContactForm = function( form_id , action, rules) {
	var $form = $('#' + form_id );

	if ($form.length > 0 ) {

		$form.validate({

			errorClass: 'error form__error form_error_JS',

			invalidHandler() {
				setTimeout(() => {
					let errors = $form.find('.form_error_JS').filter((i, el) => el.style.display !== 'none')
				}, 200)
			},

			submitHandler: function(form, e) {

				e.stopPropagation();
				e.preventDefault();

				const $submit = $($form.find('input[type=submit]').get(0));
				const $error = $form.find('.post_error_JS');
				$submit.val('...Enviando');
				$error.text("");

				var data = $(form).serializeArray();
				data.push({ name: "action", value: action });

				const ajax = $.post(cltvo_js_vars.ajax_url, data);

				ajax.done(function() {
                    $form.hide();
                    $('#' + form_id +'_thank_JS').show();
				});

				ajax.fail(function(data){
					let response_json = data.responseJSON;
					$error.text((typeof  response_json !== "undefined" && typeof  response_json.message !== "undefined" ) ? response_json.message : 'No podemos recibir tu información en este momento, intentalo más tarde.');
					$submit.val('Enviar');
				});

			},
			rules: rules
		})
	}
};

export default function(){
	$(document).ready(function($){
		sendContactForm("footer_form_JS", 'contact', {
			'name' : 'required',
            'email' : 'required',
            'phone' : 'required',
            'phone_type' : 'required',
		});
		sendContactForm("home_form_JS", 'contact', {
			'name' : 'required',
            'email' : 'required',
            'phone' : 'required',
            'phone_type' : 'required',
		});
	});
}

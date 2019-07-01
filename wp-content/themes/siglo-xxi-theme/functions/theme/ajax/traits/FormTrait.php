<?php

trait FormTrait
{

    static function privMethod()
    {
        $rules = array(
            'Nombre' 		=> 'required',
            'Teléfono' 		=> 'phone',
        );

        $messages = array(
            'Nombre' 		=> 'El nombre es un campo requerido.',
            'Teléfono' 		=> '*El teléfono debe contener 10 dígitos sin espacios o guiones.',
        );

        if (!isset($_POST[static::FORM_ID])) {
            header('HTTP/1.1 403 Unauthorized');
            header('Content-Type: application/json; charset=UTF-8');

            $data = array(
                'message' => 'Llena todos los campos del formulario.',
            );

            die(json_encode($data));
        }

        foreach ($rules as $input => $rule) {
            if ($rule == 'required') {
                if (!isset($_POST[static::FORM_ID][$input]) || empty($_POST[static::FORM_ID][$input])) {
                    header('HTTP/1.1 403 Unauthorized');
                    header('Content-Type: application/json; charset=UTF-8');
                    $data = array(
                        'message' => isset($messages[$input]) ? $messages[$input]: 'Llena todos los campos del formulario.',
                    );
                    die(json_encode($data));
                }
            }

            if ($rule == 'phone') {
                if (!isset($_POST[static::FORM_ID][$input]) || preg_match("/^[0-9]{10}$/", $_POST[static::FORM_ID][$input],$matches) === 0) {
                    header('HTTP/1.1 403 Unauthorized');
                    header('Content-Type: application/json; charset=UTF-8');
                    $data = array(
                        'message' => isset($messages[$input]) ? $messages[$input]: 'Llena todos los campos del formulario.',
                    );
                    die(json_encode($data));
                }
            }
        }


        
        try {
            
            $c = new Cltvo_Page_Contacto;
            
            $mail = empty( $c->social_net['mail'] ) ? "hola@elcultivo.mx" : $c->social_net['mail'];
            
            $sendMail = new CltvoAjaxSingleMail($mail);
            
            if( defined('CLTVO_ISLOCAL') && ( CLTVO_ISLOCAL == true) ){
                $sendMail->setSMTP();
            }
            
            $send = $sendMail->setSuscriber( "no-reply@centroeducativosigloxxi.edu.mx", 'Centro Educativo Siglo XXI', $_POST[static::FORM_ID] )->CltvoSuscribe();
        
        } catch (Error $e) {
            
            var_dump($e);
            die();

        }

        header('Content-Type: application/json; charset=UTF-8');
        
        if($send != '__okcode__'){
            header('HTTP/1.1 500 Message could not be sent.');
        }

        $data = array(
            'message' => $send,
        );

        die(json_encode($data));
    }

}

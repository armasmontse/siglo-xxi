<?php

require get_template_directory().'/functions/general/vendor/PHPMailer-master/PHPMailerAutoload.php';
require get_template_directory().'/functions/general/vendor/MailchimpHelper.php';

class CltvoAjaxMail
{

/*--------------------- informacion basica -------------------------------------*/
    protected $sender_mail = 'hola@elcultivo.mx' ; // mail del provedor
    protected $primera_linea; // asunto del correo

/*--------------------- varibles del funcionamiento -------------------------------------*/
    protected $break_form = true; // variable de breack de problemas

/*--------------------- identificadores del form  de contacto  -------------------------------------*/

    protected $id_form; // key del array donde se encuentran la informacion xe contacto
    protected $insputs_array; // array donde se encuentran la informacion xe contacto

/*--------------------- datos del contacto  -------------------------------------*/
    protected $suscriber_name; // nombre del que contacta
    protected $suscriber_mail; // mail del que contacta

/*--------------------- datos del mailchimp  -------------------------------------*/
// mailchip vars
    protected $mailchimp = false;
    protected $mailchip_listurl;
    protected $mailchip_info = array();

// reporte de errores de mailchimp
    protected $mail_errors_send; // cambiar correo donde se envían los errores del mailchimp

// Variable para saber si se utilizará PHPMailer
    protected $esp_smtp = false;

// configuración SMTP
    protected $smtp_host        = 'mailtrap.io';
    protected $smtp_port        = 25;
    protected $smtp_auth        = true;
    protected $smtp_secure      = 'tls';
    protected $smtp_usr         = 'f9c358c708042e';
    protected $smtp_pswd        = '68d9fb9afcbd49';
    protected $smtp_mail        = 's@elcultivo.mx';
    protected $smtp_mail_name   = '';
    protected $smtp_debug       = false;

// Attachments

    protected $attachments = null;


//---------------------------- constructor --------------------------------

    /**
     * @param string $sender_mail    email del la persona que envia
     * @param string $primera_linea primera linea del mail
     */
    function __construct( $sender_mail ,  $primera_linea = 'Información de contacto' ){

        if ( filter_var( $sender_mail, FILTER_VALIDATE_EMAIL) ) { // si el mail de envio es un mail
            $this->senderMail = $sender_mail;
        }

        $this->primera_linea = $primera_linea;

    }

//---------------------------- definir un SMTP diferente  --------------------------------

    public function setSMTP($smtp_config = null)
    {

        $this->esp_smtp  = true;

        if (!is_null($smtp_config)) {
            $this->smtp_host        = array_key_exists('host', $smtp_config)            ? $smtp_config['host']        : $this->smtp_host;
            $this->smtp_port        = array_key_exists('port', $smtp_config)            ? $smtp_config['port']        : $this->smtp_port;
            $this->smtp_auth        = array_key_exists('auth', $smtp_config)            ? $smtp_config['auth']        : $this->smtp_auth;
            $this->smtp_secure      = array_key_exists('secure', $smtp_config)          ? $smtp_config['secure']      : $this->smtp_secure;
            $this->smtp_usr         = array_key_exists('user', $smtp_config)            ? $smtp_config['user']        : $this->smtp_usr;
            $this->smtp_pswd        = array_key_exists('password', $smtp_config)        ? $smtp_config['password']    : $this->smtp_pswd;
            $this->smtp_mail        = array_key_exists('mail', $smtp_config)            ? $smtp_config['mail']        : $this->senderMail;
            $this->smtp_mail_name   = array_key_exists('mail_name', $smtp_config)       ? $smtp_config['mail_name']   : $this->smtp_mail_name;
            $this->smtp_debug       = array_key_exists('debug', $smtp_config)           ? $smtp_config['debug']       : $this->smtp_debug;

            $this->attachments      = array_key_exists('attachments', $smtp_config) &&  is_array($smtp_config['attachments']) ? $smtp_config['attachments'] : $this->attachments;
        }

        return $this;
    }


//---------------------------- informacion del suscriptor --------------------------------

    /**
     *  inicializa los valores del usuario
     * @param string $suscriberMail    email del la persona que se suscribe
     * @param string $suscriberName     nombre  del la persona que se suscribe
     * @param sarray $inputsArray       array con las variables que formaran parte del correo
     */
    public function setSuscriber($suscriberMail , $suscriberName = "", array $inputsArray = [] )
    {

        if ( filter_var( $suscriberMail, FILTER_VALIDATE_EMAIL) ) { // si el mail de envio es un mail
            $this->suscriber_mail = $suscriberMail;
        }

        $this->suscriber_name = trim($suscriberName);

        if ( is_array( $inputsArray )  ) { // si se agrgega un arrglo
            $this->insputs_array = $inputsArray;

            $this->break_form = false;
        }

    }

    /**
     * inicializa los valores del usuario por medio de un post con la esctructura de un subarray
     * @param string $idForm    idenfificador del form y llave del subarray donde se almasenan las variables
     * @param string $mailKey   llave donde se almacena el valor del mail por defecto E-mail
     * @param string $nameKey   llave donde se almacena el valor del Nombre por defecto Nombre, este cambo puede llehar vacio
     */
    public function setPostForm( $idForm , $mailKey = "E-mail", $nameKey = "Nombre", $lastnameKey = null)
    {
        if ( !empty($idForm)  &&  is_string($idForm) && isset($_POST[$idForm]) && is_array($_POST[$idForm]) ) {

            $this->id_form = $idForm;

            $email = !empty($mailKey) && isset( $_POST[$this->id_form][$mailKey] ) ? $_POST[$this->id_form][$mailKey] : "";
            $name = !empty($nameKey) && isset( $_POST[$this->id_form][$nameKey] ) ? $_POST[$this->id_form][$nameKey] : "";
            $lastname = !empty($lastnameKey) && isset( $_POST[$this->id_form][$lastnameKey] ) ? $_POST[$this->id_form][$lastnameKey] : "";

            // print_r($_POST[$idForm]);

            $this->setSuscriber( $email, trim($name) . " " . trim($lastname), $_POST[$idForm] );
        }

        return $this;
    }

//----------------------------funciones para el envió del correo --------------------------------

    /**
     * Envía los mails con la informacion del usuario como content
     *
     * Necesita:
     * @function CltvoMailsSender envía los correos
     *
     * @return string Solo regresa mensajes de éxito o fracaso en el envió de los correos.
    */
    public function CltvoSuscribe()
    {
        if ( $this->break_form ) { // en esta función se envía la información  solo en caso de que la información llegue correctamente
            return __("Error en envío.", TRANSDOMAIN);
        }

        $mailContentForProvider = static::convertArrayToMailHtmlContent($this->insputs_array, $this->primera_linea . '<br>'); // nombre del form para crear la cadena

        return $this->CltvoMailsSender( nl2br( $mailContentForProvider )); // requiere conocer los input de nombre y mail
    }

    /**
     * Envía un mail de confirmación a la persona que se suscribe y uno de notificación a la prestadora del servicio
     * Opcionalmente se puede registrar la información de la persona solicitante en mailchimp
     *
     * Necesita:
     * @function mailChimpRegister envía el registro a mailchimp
     *
     * Parametros:
     * @param string $mailContentForProvider Contenido del correo de notificación al prestador de servicios.
     * Opcionalmente si se desea registrar en mailchimp con campos adicionales (cualquier campo diferente al correo se considera adicional) los nombres de las columnas en mailchimp serán las llaves y el nombre del input en el form los valores de este array.
     *
     * @return string Solo regresa mensajes de éxito o fracaso en el envió de los correos.
     * Opcionalmente se puede solicitar que los errores de registren mailchimp sean enviados vía correo electrónico a una dirección especificada
    */

    public function CltvoMailsSender($mailContentForProvider){ // envía correo de registro y notificación

        // Revisamos si hay mail de suscriptor, si no regresamos error
        if ( !$this->suscriber_mail ) {
            return __( "Correo incorrecto" , TRANSDOMAIN);
        }

        // Administrador del sitio ---------------------------------------------------------------------------

        $subjectMailToProvider = $this->primera_linea . ": " . $this->suscriber_mail;
        $subjectMailToProvider .= !empty($this->suscriber_name) ? " (" . $this->suscriber_name . ") " : "";

        $introLinesForProvider = array(
            empty($mailContentForProvider) ?  'No hubo ningún mensaje escrito' :  $mailContentForProvider,
        );

        $mailContentForProvider = $this->mail_template(
            '',
            '',
            $introLinesForProvider
        );

        $ccForProvider = array();
        $bccForProvider = array();

        // Contenido para la persona que se registró ---------------------------------------------------------

        $subjectMailToSuscriber = 'Re: ' . $this->primera_linea;

        $introLinesForSubscriber = array(
            'Gracias por ponerte en contacto con nosotros, en breve nos comunicaremos contigo.',
        );

        $mailContentForSubscriber = $this->mail_template(
            '¡Gracias por ponerte en contacto con nosotros!',
            '',
            $introLinesForSubscriber,
            '',
            '',
            array(),
            true
        );

        $ccForSubscriber = array();
        $bccForSubscriber = array();

        // Revisa si se envía por SMTP
        if (!$this->esp_smtp) {

            /*--------------------------------- Envío del mail de registro ----------------------------------------------------------*/
            $headFromForProvider = $this->prepareHeaders($this->suscriber_name, $this->suscriber_mail, $ccForProvider, $bccForProvider);

            $mailForProvider = $this->send($subjectMailToProvider, $mailContentForProvider, $headFromForProvider, $this->senderMail, get_bloginfo('name'));

            if ( !$mailForProvider ) { // Si no se envian los mails
                return __( "Error en el envío mailForProvider" , TRANSDOMAIN);
            }

            /*--------------------------------- Envío del mail de agradecimiento ----------------------------------------------------------*/
            $headFromForSuscriber = $this->prepareHeaders(get_bloginfo('name'), $this->senderMail, $ccForSubscriber, $bccForSubscriber);

            $mailForSuscriber = $this->send($subjectMailToSuscriber, $mailContentForSubscriber, $headFromForSuscriber, $this->suscriber_mail, $this->suscriber_name);

            if ( !$mailForSuscriber ) { // Si no se envian los mails
                return __( "Error en el envío mailForSuscriber" , TRANSDOMAIN);
            }

        }else {

            /*---------------------------------envió del mail de registro ----------------------------------------------------------*/

            try{
                $provider_mail = $this->CltvoPhpMailer($this->senderMail, $subjectMailToProvider, $mailContentForProvider);
            }catch(Error $e){
                var_dump($e);
                die;
            }

            $provider_mail->addReplyTo($this->suscriber_mail, $this->suscriber_name);

            foreach ($ccForProvider as $cc) {
                $provider_mail->AddCC($cc);
            }

            foreach ($bccForProvider as $bcc) {
                $provider_mail->addBCC($bcc);
            }

            if (!is_null($this->attachments)) {
                foreach ($this->attachments as $attach) {
                    $provider_mail->addAttachment($attach);
                }
            }

            if(!$provider_mail->send()) {
                return 'Message could not be sent to senders mail. Mailer Error: ' . $provider_mail->ErrorInfo;
            }

            /*---------------------------------envió del mail de agradecimiento ----------------------------------------------------------*/

            $thankyou_mail = $this->CltvoPhpMailer($this->suscriber_mail, $subjectMailToSuscriber, $mailContentForSubscriber);

            foreach ($ccForSubscriber as $cc) {
                $thankyou_mail->AddCC($cc);
            }

            foreach ($bccForSubscriber as $bcc) {
                $thankyou_mail->addBCC($bcc);
            }

            if(!$thankyou_mail->send()) {
                return 'Message could not be sent to suscriber mail. Mailer Error: ' . $thankyou_mail->ErrorInfo;
            }
        }

        if ($this->mailchimp) { // solo en caso de que quieran registrarse en mailchimp
            $mailchimp = $this->mailChimpRegister(); // función para resgitrar en mailchimp
            if (isset($mailchimp['error']) && $mailchimp['error']) {
                return $mailchimp['message'];
            }
        }

        return "__okcode__";
    }

    protected function prepareHeaders($fromName, $fromMail, $cc = array(), $bcc = array())
    {
        $headers = array(
            'FROM: ' . $fromName  . '<' . $fromMail . '>'
        );

        if(count($cc) > 0){
            $headers[] = 'CC:' . implode(",", $cc);
        }

        if(count($bcc) > 0){
            $headers[] = 'BCC:' . implode(",", $bcc);
        }

        return $headers;
    }

    protected function send($subject, $content, $headers = array(), $toEmail, $toName = '')
    {
        // Headers para enviar los mails
        $mailsHead = array(
            'MIME-Version: 1.0',
            'Content-Type: text/html; charset=UTF-8'
        );

        $mailsHead = implode("\r\n", $mailsHead);

        return mail( $toName . '<' . $toEmail . '>', $subject, $content, array_merge($mailsHead, $headers), '-f' . $toEmail);
    }

    private function CltvoPhpMailer($mailTo, $primera_linea, $mail_content){

        $mail = new PHPMailer;

        $mail->setLanguage('en', get_template_directory().'/functions/admin/vendor/PHPMailer-master/language/');

        if($this->smtp_debug){
            $mail->SMTPDebug = 3;
        }

        $mail->isSMTP();                                    // Set mailer to use SMTP

        $mail->Host         = $this->smtp_host;             // SMTP server to connect
        $mail->SMTPAuth     = $this->smtp_auth;             // Enable SMTP authentication
        $mail->Username     = $this->smtp_usr;              // SMTP username
        $mail->Password     = $this->smtp_pswd;             // SMTP password
        $mail->SMTPSecure   = $this->smtp_secure;           // Enable TLS encryption, `ssl` also accepted
        $mail->Port         = $this->smtp_port;             // TCP port to connect to

        $mail->setFrom($this->smtp_mail, $this->smtp_mail_name);
        $mail->addAddress($mailTo);  // Name is optional

        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // $mail->addAttachment('/var/tmp/file.tar.gz');

        $mail->isHTML(true);
        $mail->Subject = utf8_decode($primera_linea);
        $mail->Body    = utf8_decode($mail_content);

        return $mail;
    }

    //---------------------------- funciones para contenido del correo --------------------------------

    /**
     * Genera el contenido del correo a partir de un array:
     *
     * Parámetros:
     * @param array|string $variable Arreglo generado por la estructura de los imput enviados
     * @param string $first_line primera linea o titulo del contenido
     *
     * @return string con formato <strong> key1 .- </strong>  value1 <br> <strong> key2 .- </strong>  value2 <br> ... donde  key y value son las llaves y los valores del array respectivamente
    */

    public static function convertArrayToMailHtmlContent($variable, $first_line){ // genera el texto del correo a partir de la cadena enviada por el form
        if (!empty($variable)) {
            if (is_array($variable)) {
                $salida = '<strong>'.ucfirst($first_line).'</strong> <br>'; // escribe la primer linea
                foreach ($variable as $key => $value ) { // escribe las key para como encabezados
                    $salida .= '<strong>' . ucfirst($key) ;
                    if(!is_array($value)){ // Solo en caso de no array
                        $salida .= ': ';
                    }
                    $salida .= '</strong> ' . static::convertArrayToMailHtmlContent($value, '');
                }
            } else { // escribe en contenido de cada input
                $salida = $variable . '. <br>';
            }
        } else { // en caso de que el input se enviara vacío
            $salida = 'No information' . '. <br>';
        }
        return $salida;
    }

    public function setMailChimp(){
        $this->mailchimp = true;
    }

    private function mailChimpRegister(){ // función de registro en mailchimp

        $new_subscriber = new MailchimpHelper($this->suscriber_mail);

        if ($new_subscriber->mc_checklist() == 'subscribed') {
            return array(
                'success' => true,
                'message' => "This mail has been registered before."
            );
        }

        $request_mailchimp = $new_subscriber->mc_subscribe();

        if ($request_mailchimp->status != 'subscribed') {
            return array(
                'success' => true,
                'message' => "Can not register to list, try later."
            );
        }

        return array(
            'data'    => $request_mailchimp->status,
            'message' => "Mail registered succesfully",
            'success' => true
        );

    }

    private function mail_template($greeting = "", $level = "", $introLines = array(), $actionText = null, $actionUrl = null, $outroLines = array(), $dynamic = false)
    {
        if ($dynamic) {
            ob_start();
            include get_template_directory() . '/mail/layout.php';
            $view = ob_get_clean();
            return $view;
        }

        $template = "";

        $template .= '<a href="'.get_site_url().'" target="_blank" alt="Terminal 1 logo" title="'.get_bloginfo('name').'" style="display: inline-block;margin: 25px auto;"><img src="'.get_bloginfo('template_url').'/images/logo.png" width="156" /></a><br>';

        // if (! empty($greeting)) {
        //     $template .= $greeting . '<br><br>';
        // } else {
        //     $template .= 'Hola!' . '<br><br>';
        // }

        if (! empty($introLines)) {
            $template .= implode('<br>', $introLines) . '<br><br>';
        }

        if (isset($actionText)) {
            $template .= '<a href="'. $actionUrl .'" target="_blank">' . $actionText . '</a><br><br>';
        }

        if (! empty($outroLines)) {
            $template .= implode('<br>', $outroLines). '<br><br>';
        }

        $template .= 'Saludos, <br>';
        $template .= get_bloginfo('name') . '<br><br>';

        if (isset($actionText)){

            $template .= 'Si tienes problemas dando click al link, copIa y pega la URL de aquí abajo en tu navegador. <br>';

            $template .= '<a href="'. $actionUrl .'" target="_blank">' . $actionUrl . '</a><br><br>';

        }

        $template .= '&copy; ' . date('Y') . ' ' . '<a href="' . get_site_url() . '" target="_blank"> ' . get_bloginfo('name') . '</a>' . ' Todos los derechos reservados'. '<br>';

        return $template;
    }



}

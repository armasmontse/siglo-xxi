<h3 class="home__newsletter-title" style="display:none;" id="home_form_JS_thank_JS" ><b>Recibimos tus datos</b> muchas gracias, nos pondremos en contacto contigo.</h3>
<form class="" id="home_form_JS" method="post">


    <?php 
        if(is_front_page()): ?>

        <h3 class="home__newsletter-title"><b>Ven a visitarnos y conoce nuestra propuesta educativa.</b></h3>
        <h3 class="home__newsletter-title">Déjanos tus datos y nos comunicaremos contigo.</h3>

    <?php endif;?>

    <div class="home__newsletter-form">
        <div class="">

            <div class="flex">
                <div class="flex-50">
                    <label class="home__newsletter-form--label" for="home_form_JS_name">Nombre.</label>
                    <input form="home_form_JS" name="name" class="home__newsletter-form--name" type="text"  id="home_form_JS_name"  required>
                </div>
                <div class="flex-50">
                    <label class="home__newsletter-form--label home__newsletter-form--labelemail" for="home_form_JS_name">E-mail.</label>
                    <input form="home_form_JS" name="email" class="home__newsletter-form--name" type="email"  id="home_form_JS_email" required >
                </div>

            </div>

            <div class="flex">
                <div class="flex-50">
                    <label class="home__newsletter-form--label" for="home_form_JS_phone">Télefono.</label>
                    <input form="home_form_JS" pattern="[0-9]{8}" class="home__newsletter-form--name" name="phone" type="text"  id="home_form_JS_phone" required >
                </div>

                <div class="home__newsletter-form-name flex-row-center flex-50">

                    <div class="home__newsletter-form-check">

                        <input class="home__newsletter-form-check-input" type="radio" name="phone_type" id="home_form_JS_fijo" value="fijo" checked="" required="">
                        <label class="footer__newsletter-form--label label-form" for="home_form_JS_phone">FIJO</label>

                    </div>
                    <div class="home__newsletter-form-check">

                        <input class="home__newsletter-form-check-input" type="radio" name="phone_type" id="home_form_JS_cel" value="celular" required="">
                        <label class="footer__newsletter-form--label label-form" for="home_form_JS_phone">CELULAR</label>

                    </div>

                </div>
            </div>

        </div>

        <div class=" error form__error post_error_JS" ></div>

        <input form="home_form_JS"  class="home__newsletter-form--button" type="submit" value="Enviar">
    </div>


</form>

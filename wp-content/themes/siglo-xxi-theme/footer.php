	<?php wp_footer(); ?>
		</div> <!-- / main content -->

		<footer class="footer">

			<?php $page_contact = new Cltvo_Page_Contacto(); ?>

			<div class="grid__container">

				<div class="grid__col-1--3 grid__col-offset-1-1 footer__col-instituciones">

					<div class="grid__box">

						<div class="footer__margin-instituciones">

							<div class="footer__institucion mb-25">
								<div class="footer__institucion ">

									<?php if (!empty($page_contact->certificates->sep->register)): ?>
										<h5 class="footer-instituciones"><?= $page_contact->certificates->sep->register  ?></h5>
										<img class="footer__institucion-logo" src="<?= $page_contact->certificates->sep->logo->getImgSrc('full')  ?>" alt="<?= $page_contact->certificates->sep->logo->alt  ?>">
									<?php endif; ?>

								</div>
							</div>

							<div class="footer__institucion ">

								<?php if (!is_null($page_contact->certificates->cambridge->logo->img_id)): ?>

									<h5 class="footer-instituciones"><?= $page_contact->certificates->cambridge->register  ?></h5>

									<img class="footer__institucion-logo" src="<?= $page_contact->certificates->cambridge->logo->getImgSrc('full')  ?>" alt="<?= $page_contact->certificates->cambridge->logo->alt  ?>">

								<?php endif; ?>

							</div>

						</div>

					</div>

					<div class="footer__redes">
							<?php if (filter_var($page_contact->social_net["facebook"]["link"], FILTER_VALIDATE_URL)): ?>
								<a href="<?= nl2br($page_contact->social_net["facebook"]["link"]) ?>" class="footer__redes-face" target="_blank">
	                                <img src="<?php echoImg('facebook-footer.svg') ?>" alt="Facebook"
										onmouseover="this.src='<?php echoImg('facebook-footer-hover.svg') ?>'"
                                    	onmouseout="this.src='<?php echoImg('facebook-footer.svg') ?>'"
	                                >
	                            </a>
							<?php endif ?>

                            <?php if (filter_var($page_contact->social_net["twitter"]["link"], FILTER_VALIDATE_URL)): ?>
								<a href="<?= nl2br($page_contact->social_net["twitter"]["link"]) ?>" class="footer__redes-face" target="_blank">
	                                <img src="<?php echoImg('twitter-footer.svg') ?>" alt="Twitter"
										onmouseover="this.src='<?php echoImg('twitter-footer-hover.svg') ?>'"
                                    	onmouseout="this.src='<?php echoImg('twitter-footer.svg') ?>'"
	                                >
	                            </a>
							<?php endif ?>

                            <?php if (filter_var($page_contact->social_net["instagram"]["link"], FILTER_VALIDATE_URL)): ?>
								<a href="<?= nl2br($page_contact->social_net["instagram"]["link"]) ?>" class="footer__redes-face" target="_blank">
	                                <img src="<?php echoImg('instagram-footer.svg') ?>" alt="Instagram"
										onmouseover="this.src='<?php echoImg('instagram-footer-hover.svg') ?>'"
                                    	onmouseout="this.src='<?php echoImg('instagram-footer.svg') ?>'"
	                                >
	                            </a>
							<?php endif ?>


                            <?php if (filter_var($page_contact->social_net["linkedin"]["link"], FILTER_VALIDATE_URL)): ?>
								<a href="<?= nl2br($page_contact->social_net["linkedin"]["link"]) ?>" target="_blank">
	                                <img src="<?php echoImg('linkedin-footer.svg') ?>" alt="Linkedin"
										onmouseover="this.src='<?php echoImg('linkedin-footer-hover.svg') ?>'"
                                    	onmouseout="this.src='<?php echoImg('linkedin-footer.svg') ?>'"
	                                >
	                            </a>
							<?php endif ?>
						</div>

				</div>

				<div class="grid__col-1--3 grid__col-offset-1-1 footer__col-contacto">

					<div class="grid__box">

						<div class="footer__margin-contacto">

							<?php if (!empty($page_contact->social_net['phone'])): ?>

								<h5 class="footer-contacto">T.<?= $page_contact->social_net['phone'] ?> </h5>

							<?php endif; ?>

							<?php if (!empty($page_contact->social_net['mail'])): ?>

								<a href="mailto:<?= $page_contact->social_net['mail'] ?>" class="footer-contacto footer-email">

									<?= $page_contact->social_net['mail'] ?>

								</a>

							<?php endif; ?>

						</div>

						<div class="footer__margin-contacto">

							<?php if (!empty($page_contact->social_net['address'])): ?>

								<h5 class="footer-contacto"><?= nl2br($page_contact->social_net['address']) ?></h5>

							<?php endif; ?>

						</div>

						<div class="footer__col">

							<h5 class="footer-contacto">Centro Educativo Infantil Siglo XXI</h5>

							<a href="<?= specialPagePermalink("aviso-de-privacidad"); ?>" class="footer-contacto footer-aviso">

								Aviso de privacidad

							</a>

						</div>

						<div class="footer__redes">

							<?php if (!empty($page_contact->social_net['mail'])): ?>

								<a href="mailto:<?= nl2br($page_contact->social_net['mail']) ?>" class="footer__redes-email" target="_blank">
									<img src="<?php echoImg('email-footer.svg') ?>" alt="Email"
									onmouseover="this.src='<?php echoImg('email-footer-hover.svg') ?>'"
									onmouseout="this.src='<?php echoImg('email-footer.svg') ?>'">
									<span class="footer__redes--email">envíanos un correo</span>
								</a>

							<?php endif; ?>


						</div>

					</div>

				</div>

				<div class="grid__col-1--3 grid__col-offset-1-1 footer__col-formulario">

					<div class="grid__box">

						<p class="footer__formulario-confirmacion footer-contacto " style="display:none;" id="footer_form_JS_thank_JS">
							Recibimos tus datos.
							<br>
							Muchas gracias, nos pondremos en contacto.
						</p>


						<form class="footer__newsletter-form" id="footer_form_JS" method="post">

							<p class="footer-contacto">Nos pondremos en contacto contigo.</p>

							<div class="footer__form-name">

								<label class="footer__newsletter-form--label label-form" for="footer_form_JS_name">Nombre.</label>

								<input form="footer_form_JS" name="name" class="footer__newsletter-form--name" type="text" id="footer_form_JS_name"  required>

							</div>

							<div class="footer__form-name">

								<label class="footer__newsletter-form--label email label-form" for="footer_form_JS_email">E-mail.</label>

								<input form="footer_form_JS" name="email" class="footer__newsletter-form--phone" type="email"  id="footer_form_JS_email" required >

							</div>

							<div class="footer__form-name">

								<label class="footer__newsletter-form--label label-form" for="footer_form_JS_phone">Télefono.</label>

								<input form="footer_form_JS" pattern="[0-9]{8}" name="phone" class="footer__newsletter-form--phone" type="text"  id="footer_form_JS_phone" required >

							</div>


							<div class="footer__form-name flex-row-center">

								<div class="footer__form-check">

									<input class="footer__form-check-input" type="radio" name="phone_type" id="footer_form_JS_fijo" value="fijo" checked="" required="">
									<label class="footer__newsletter-form--label label-form" for="footer_form_JS_phone">FIJO</label>

								</div>
								<div class="footer__form-check">

									<input class="footer__form-check-input" type="radio" name="phone_type" id="footer_form_JS_cel" value="celular" required="">
									<label class="footer__newsletter-form--label label-form" for="footer_form_JS_phone">CELULAR</label>

								</div>

							</div>


							<div class="error form__error post_error_JS" ></div>

							<input form="footer_form_JS"  class="button-white footer__form-button" type="submit" value="Enviar">

						</form>

					</div>

				</div>

				<div class="footer__logo">

					<img class="footer__logo-img" src="<?= THEMEURL ?>/images/footer/footer.svg" alt="">

				</div>

			</div>

			<div class="footer__creditos">

				<a href="https://elcultivo.mx/" target="_blank">
					<img class="footer__creditos-logo" src="<?= THEMEURL ?>/images/footer/footer-cultivo.svg" alt="">

				</a>
				<a href="http://www.cardumen467.com/" target="_blank">
					<img class="footer__creditos-logo" src="<?= THEMEURL ?>/images/footer/footer-cardumen.svg" alt="">
				</a>

			</div>

		</footer>

	</body>

</html>

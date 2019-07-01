<?php get_header() ?>

	<?php $page_contact = new Cltvo_Page_Contacto(); ?>

	<!-- Menu con scroll -->
	<?php  themeInc('/inc/header.php');  ?>
	
	<!-- Intro -->
	<section class="contacto__logo">

		<div class="grid__row">

			<div class="grid__container">

				<div class="grid__col-logo">

					<div class="home__logo">

						<img class="home__logo-centro-educativo" src="<?= THEMEURL ?>/images/centro-educativo.svg" alt="Centro Educativo Siglo XXI Inicial y Preescolar">

					</div>

				</div>

			</div>

		</div>

	</section>

	<section class="contacto__intro">

		<div class="contacto__background-blue">

			<div class="grid__row">

				<div class="grid__container">

					<div class="grid__col-1-6 grid__col-offset-1-3">

						<div class="contacto__frase wow fadeInRight" data-wow-iteration="1" data-wow-duration="2s">

							<h4 class="contacto__frase-ttl title-contacto"><?=  nl2br($page_contact->intro)  ?></h4>

						</div>

					</div>

					<div class="contacto__intro-boximg wow fadeInRight" data-wow-iteration="1" data-wow-duration="2s">

						<img class="contacto__intro-img" src="<?= THEMEURL ?>/images/contacto/nino-mundo.svg" alt="">
					
					</div>

				</div>

			</div>

		</div>

	</section>
    


	<!-- Instalaciones -->
	<section class="contacto__instalaciones">

		<div class="contacto__background-yellow">

			<div class="grid__row">


				<div class="grid__container">

					<div class="grid__col-1-6 grid__col-offset-1-3">

						<div class="contacto__instalaciones-intro">
							
							<?= wpautop($page_contact->abstract) ?>
						
						</div>

                </div>

                <div class="grid__container contacto__form">
					<div class="grid__col-1-9 grid__col-offset-1-3">
						<div class="home__newsletter contacto__form">
                        
                            <!-- C O N T A C T   F O R M -->
                            <?php include 'inc/contact-form.php';?>


                        </div>
                    </div>
                </div>

                <div class="grid__container">

					<div class="grid__col-1-6 grid__col-offset-1-3 margLeft">

						<div class="contacto__direccion">

							<h5 class="contacto__direccion-ttl title-parallax">Contacto</h5>

							<?php if (!empty( $page_contact->social_net["address"])): ?>
								
								<span class="contacto-domicilio contacto__direccion-flex">
								
									<img class="contacto__direccion-icono" src="<?= THEMEURL ?>/images/contacto/direccion.svg" alt="">
								
										<a  <?php if (filter_var($page_contact->social_net["address_link"], FILTER_VALIDATE_URL)): ?> href="<?= $page_contact->social_net["address_link"]  ?>" class="paragraph-text link-contacto" <?php else: ?>  class="paragraph-text " targer="_blank" <?php endif; ?>  >
								
											<?= nl2br($page_contact->social_net["address"]) ?>
								
										</a>
								
								</span>
							
							<?php endif; ?>


							<?php if (!empty( $page_contact->social_net["phone"])): ?>
							
								<span class="contacto-telefono contacto__direccion-flex">
							
									<img class="contacto__direccion-icono" src="<?= THEMEURL ?>/images/contacto/telefono.svg" alt="">

									<p href="" class="paragraph-text"><?= $page_contact->social_net["phone"]  ?> </p>

								</span>

							<?php endif; ?>


							<?php if (!empty( $page_contact->social_net["mail"])): ?>

								<span class="contacto-mail contacto__direccion-flex">

									<img class="contacto__direccion-icono" src="<?= THEMEURL ?>/images/contacto/mail.svg" alt="">

									<a href="mailto: <?= $page_contact->social_net["mail"] ?> " class="paragraph-text link-contacto"> <?= $page_contact->social_net["mail"] ?> </a>

								</span>

							<?php endif; ?>


							<?php if (!empty( $page_contact->social_net["timetable"])): ?>

								<span class="contacto-horario contacto__direccion-flex">

									<img class="contacto__direccion-icono" src="<?= THEMEURL ?>/images/contacto/horario.svg" alt="">

									<p class="paragraph-text"><?= nl2br($page_contact->social_net["timetable"]) ?></p>

								</span>

							<?php endif; ?>

						</div>

					</div>

					<?php if ($page_contact->thumbail_img && $page_contact->thumbail_img->img_id): ?>
						
						<div class="grid__col-1-9 grid__col-offset-1-3">
							
							<div class="contacto-instalaciones">
						
								<img class="contacto__direccion-escuela" src="<?= $page_contact->thumbail_img->getImgSrc("full") ?>" alt="<?= $page_contact->thumbail_img->alt ?>">
						
							</div>
						
						</div>
					
					<?php endif; ?>

				</div>

			</div>

		</div>

	</section>

	<!-- Requisitos -->
	<section class="contacto__requisitos">

		<div class="contacto__background-white">

			<div class="grid__row">

				<div class="grid__container">

					<div class="grid__col-1-6 grid__col-offset-1-3">

						<?php if (!empty($page_contact->requirements)): ?>

							<div class="contacto__requisitos-box">

								<h5 class="contacto__requisitos-ttl title-parallax">Requisitos de inscripción para nuevo ingreso</h5>

								<ul class="contacto__requisitos-content paragraph-text">

									<?php foreach ($page_contact->requirements as $requeriment): ?>

										<li class="contacto__requisitos-elemento"><?=  $requeriment ?></li>

									<?php endforeach; ?>

								</ul>

							</div>

						<?php endif; ?>


						<?php if (!empty($page_contact->documents)): ?>

							<div class="contacto__documentos-box">

								<h5 class="contacto__documentos-ttl title-parallax">Documentos</h5>

								<ul class="contacto__documentos-content paragraph-text">

									<?php foreach ($page_contact->documents as $document): ?>

										<li class="contacto__documentos-elemento"><?=  $document ?></li>

									<?php endforeach; ?>

								</ul>

							</div>

						<?php endif; ?>

					</div>

				</div>

			</div>

		</div>

	</section>

<?php get_footer() ?>

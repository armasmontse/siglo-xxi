<?php get_header() ?>

	<?php $page_school_philosophy = new Cltvo_Page_School_Philosophy(); ?>
	
	<!-- Menu con scroll -->
	<?php  themeInc('/inc/header.php');  ?>

	<section class="">
		<div class="filosofia__parallax-mobil" data-parallax="scroll" data-image-src="<?= THEMEURL ?>/images/filosofia/parallax-filosofia-aldoble.png"></div>
		<div class="filosofia__parallax-desktop"></div>
	</section>
	<section class="filosofia__background-orange">
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
	<?php if (!empty($page_school_philosophy->intro["title"].$page_school_philosophy->intro["subtitle"]) ): ?>
		<section class="filosofia__background-orange">
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-6 grid__col-offset-1-3">
						<div class="filosofia__etapa wow fadeInRight" data-wow-iteration="1" data-wow-duration="2s" >
							<h3 class="filosofia__edad" ><?= nl2br($page_school_philosophy->intro["title"]); ?></h3>
							<h4 class="filosofia__descripcion"><?= nl2br($page_school_philosophy->intro["subtitle"]); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="filosofia__content">
		<div class="grid__row">
			<div class="grid__container">
				<?php if (!empty(trim($page_school_philosophy->post->post_content) )): ?>
					<div class="grid__col-1-9 grid__col-offset-1-3">
						<div class="filosofia__sigloxxi">
							<div class="filosofia__sbtitle"><?= wpautop($page_school_philosophy->post->post_content); ?></div>

						</div>
					</div>
				<?php endif; ?>
				<div class="grid__col-1-4 filosofia__figure-hexagonal-box">
					<div class="filosofia__figure">
						<img class="filosofia__figure-circular" src="<?= THEMEURL ?>/images/filosofia/icono-circulo.svg" alt="Icono circulo y triangulo">
						<img class="filosofia__figure-hexagonal wow fadeInRight" src="<?= THEMEURL ?>/images/filosofia/icono-hexagono.svg" alt="Icono hexagono"  data-wow-iteration="1" data-wow-duration="2s">
					</div>
				</div>
				<div class="grid__col-1--3 filosofia__modelo-educativo-box" >
					<div class="filosofia__modelo-educativo">

						<?php if (!empty($page_school_philosophy->details["text_1"])): ?>
							<h5 class="filosofia__modelo-educativo--title"><?= $page_school_philosophy->details_parts["text_1"] ?> </h5>
							<div class="filosofia__text"><?= wpautop($page_school_philosophy->details["text_1"]); ?></div>
						<?php endif; ?>

						<?php if (!empty($page_school_philosophy->details["text_2"])): ?>
							<h5 class="filosofia__modelo-educativo--title"><?= $page_school_philosophy->details_parts["text_2"] ?> </h5>
							<div class="filosofia__text"><?= wpautop($page_school_philosophy->details["text_2"]); ?></div>
						<?php endif; ?>

					</div>
				</div>

				<div class="grid__col-1-5 grid__col-offset-1-1 filosofia__vision-box">
					<div class="filosofia__vision">
						<div class="filosofia__vision-sbtitle wow slideInUp" data-wow-duration="1.5s" data-wow-delay="1.3s" >
							<?= wpautop($page_school_philosophy->sentence); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if (!empty($page_school_philosophy->gallery) ): ?>
		<section class="">
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-1">
						<div class="filosofia__slider"  <?php if (count($page_school_philosophy->gallery) > 3): ?>  id= "aqui lo que quieras "    <?php endif; ?>    >
							<div class="swiper-wrapper">

								<?php foreach ($page_school_philosophy->gallery as $img): ?>
									<div class="swiper-slide speed-8000">
										<div class="filosofia__slider">
											<img class="" src="<?= $img->getImgSrc("full") ?>" alt="<?= $img->src ?>">
										</div>
									</div>
								<?php endforeach; ?>

							</div>
							<!-- Add Pagination -->
							<div class="swiper-pagination home__cita-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if (!empty($page_school_philosophy->team["title"].trim($page_school_philosophy->team["content"])) ): ?>
		<section class="filosofia__background-blue">
			<div class="grid__row">
				<div class="grid__container filosofia__contBarquito">
					<div class="grid__col-1-6 grid__col-offset-1-3">
						<h3 class="filosofia__title"><?= $page_school_philosophy->team["title"]; ?></h3>
						<div class="filosofia__sbtitle">
							<?= wpautop($page_school_philosophy->team["content"]); ?>
						</div>
					</div>
					<div class="grid__col-1--3">
						<div class="filosofia__barquito" >
							<img class="filosofia__barquito-image wow slideInUp" src="<?= THEMEURL ?>/images/filosofia/icono-barco.svg" alt="Icono Barquito" data-wow-duration="1.5s" data-wow-delay="2s" >
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php get_footer() ?>

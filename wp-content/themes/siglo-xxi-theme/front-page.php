<?php get_header(); ?>
	<!-- <h1><b><?php bloginfo( 'name' ); ?></b></h1>
	<p><small>... sitio en proceso de <a href="http://elcultivo.mx" target="_blank">cultivo</a> :)</small><p> -->

	<?php $home_page = new Cltvo_Page_Home(); ?>

	<!-- Pop op de Notificacion -->
	<?php include get_template_directory()."/inc/popup.php"; ?>

	<!-- Menu min height -->
	<?php  themeInc('/inc/header-min.php');  ?>

	<!-- Splash -->
	<?php  themeInc('/inc/splash.php');  ?>

	<!-- Lienzo -->
	<div class="lienzo">
		<img class="lienzo__image" src="<?= THEMEURL ?>/images/lienzo.svg" alt="">
	</div>
	<!-- Menu con scroll -->
	<?php  themeInc('/inc/header.php');  ?>

	<div class="home__content" id="nextSection">

		<section class="home__background-orange">
			<div class="grid__row" id="height_JS">
				<div class="grid__container">
					<div class="grid__col-logo">
						<div class="home__logo">
							<img class="home__logo-centro-educativo" src="<?= THEMEURL ?>/images/centro-educativo.svg" alt="Centro Educativo Siglo XXI Inicial y Preescolar">
						</div>
					</div>
				</div>
				<div class="grid__container">

					<?php if (!empty($home_page->post->post_content) ): ?>
						<div class="grid__col-1-6 grid__col-offset-1-3">
							<div class="home__paragraphs">
								<?= wpautop( $home_page->post->post_content ); ?>
							</div>
						</div>
						<div class="grid__col-1--2 grid__col-offset-1-1">
							<div class="home__button">
								<a href="<?= specialPagePermalink("filosofia-de-la-escuela"); ?>">
									<span class="home__button-txt">Conoce más sobre nuestros modelos educativos</span>
									<img class="home__" src="<?= THEMEURL ?>/images/button.svg" alt="">
								</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<section>
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-9 grid__col-offset-1-3">
						<div class="home__newsletter animated bounceIn">
							
                            <!-- C O N T A C T   F O R M -->
					        <?php include 'inc/contact-form.php';?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="lienzo footer">
			<img class="lienzo__image" src="<?= THEMEURL ?>/images/lienzo.svg" alt="">
		</div>

		<?php if (!empty($home_page->quotes)): ?>
			<section class="home__background-yellow">
				<div class="grid__row">
					<div class="grid__container">
						<div class="grid__col-1-9 grid__col-offset-1-2">
							<div class="home__citas">
								<div class="swiper-wrapper">

									<?php foreach ($home_page->quotes as $quote): ?>
										<div class="swiper-slide wow bounceInRight" data-wow-delay="0.3s">
											<div class="home__citas-parentesis">
												<?php if (!empty($quote->quote) ): ?><h3 class="home__citas-cita"><?= $quote->quote;  ?></h3><?php endif; ?>
												<p class="home__citas-autor"> <?php if (!empty($quote->name) ): ?><span><?= $quote->name;  ?>,</span><?php endif; ?>     <?= $quote->title;  ?> </p>
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

		<?php if (!empty($home_page->activities["sentence"]) || !empty($home_page->activities["activities"]) ): ?>

			<?php $education_levels_link = specialPagePermalink("niveles-educativos"); ?>
			<section>
				<div class="grid__row">
					<div class="grid__container">
						<div class="grid__col-1-6 grid__col-offset-1-3">
							<div class="home__actividades">
								<h4 class="home__actividades-title">Actividades</h4>
								<p class="home__actividades-text"><?= $home_page->activities["sentence"] ?></p>
							</div>
						</div>
					</div>
				</div>
				<a href="<?= $education_levels_link; ?>">
					<div class="home__parallax-mobil" data-parallax="scroll" data-image-src="<?= THEMEURL ?>/images/parallax-home-aldoble.png"></div>
					<div class="home__parallax-desktop"></div>
				</a>
				<div class="grid__row">
					<div class="grid__container">
						<div class="grid__col-1-9 grid__col-offset-1-5 home__actividades-list">
							<!-- <ul class="home__actividades-bullets">
								<?php foreach ($home_page->activities["activities"] as $key => $activity): ?>
									<li class="home__actividades-bullets--links"><a href="<?= $education_levels_link; ?>"><?= $activity; ?></a></li>
								<?php endforeach; ?>
							</ul> -->

							<div class="home__actividades-listas">
								<h3 class="home__actividades-listas--title"><?php echo $home_page->activities["phrase_ini"] ?></h3>
								<ul class="home__actividades-bullets">
									<?php foreach ($home_page->activities["education"]["initial"] as $key => $initial): ?>
										<li class="home__actividades-bullets--links"><?= $initial; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="home__actividades-listas">
								<h3 class="home__actividades-listas--title"><?php echo $home_page->activities["phrase_pre"] ?></h3>

								<ul class="home__actividades-bullets">
									<?php foreach ($home_page->activities["education"]["prescholar"] as $key => $preschollar): ?>
										<li class="home__actividades-bullets--links"><?= $preschollar; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>


						</div>
					</div>
				</div>
			</section>

		<?php endif; ?>
	</div>
<?php get_footer(); ?>

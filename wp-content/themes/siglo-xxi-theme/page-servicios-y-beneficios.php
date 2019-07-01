<?php get_header() ?>
<?php $page_services = new Cltvo_Page_Services_And_Benefits(); ?>
	<!-- Menu con scroll -->
	<?php  themeInc('/inc/header.php');  ?>
	<section>
		<div class="servicios__parallax-mobil" data-parallax="scroll" data-image-src="<?= THEMEURL ?>/images/servicios/parallax-servicios-aldoble.png"></div>
		<div class="servicios__parallax-desktop"></div>
	</section>
	<section>		
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


	<?php if (!empty($page_services->intro["title"].$page_services->intro["subtitle"]) ): ?>
		<section class="servicios__background-green">
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-6 grid__col-offset-1-3">
						<div class="servicios__frase wow fadeInRight" data-wow-iteration="1" data-wow-duration="2s" >
							<h3 class="servicios__frase-title"><?= nl2br($page_services->intro["title"]); ?></h3>
							<h4 class="servicios__frase-sbtitle"><?= nl2br($page_services->intro["subtitle"]); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<section class="servicios__content">
		<div class="grid__row">

			<?php if (!empty($page_services->benefits["sentence"]) || !empty($page_services->benefits["benefits"])): ?>
				<div class="grid__container" id="beneficios">
					<div class="grid__col-1-9 grid__col-offset-1-3">
						<div class="servicios__beneficios">
							<h3 class="servicios__beneficios-title">BENEFICIOS</h3>

							<div class="servicios__beneficios-sbtitle">
								<?= nl2br($page_services->benefits["sentence"])  ?>
							</div>
						</div>
						
						<!-- Imagen sólo en mobile -->
						<div class="hidde">
							<img class="servicios__image-izq-mobile wow fadeInRight" src="<?= THEMEURL ?>/images/servicios/nubes-serv-mobile.svg" alt="Icono nube" data-wow-duration="1.5s" data-wow-delay="1s">
						</div>
					
					</div>

					<div class="grid__col-1-4">
						<img class="servicios__image-izq servicios__image-izq-none" src="<?= THEMEURL ?>/images/servicios/icono-nubes-izq.svg" alt="Icono nube y papalote">
					</div>

					<div class="grid__col-1-8">
						<?php if (!empty($page_services->benefits["benefits"]) ): ?>
							<ul class="servicios__list">
								<?php foreach ($page_services->benefits["benefits"] as $value): ?>
									<li class="servicios__list-beneficios"><?= $value ?> </li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

					</div>
					<div class="grid__col-1-1 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s" >
						<div style="overflow: hidden !important;width: 500px;height: auto;margin-right: 0px;float: right;margin-top: 25px;">
							<img class="servicios__image-der--ninos" src="<?= THEMEURL ?>images/servicios/ninos.svg" alt="Niños">
						</div>
						
					</div>
				</div>
			<?php endif; ?>




			<?php if (!empty($page_services->services["sentence"]) || !empty($page_services->services["services"])): ?>
				<div class="grid__container servicios" id="servicios">
					<div class="grid__col-1-9 grid__col-offset-1-3">
						<div class="servicios__beneficios">
							<h3 class="servicios__beneficios-title">Servicios opcionales</h3>
							<div class="servicios__beneficios-sbtitle">	<?= nl2br($page_services->services["sentence"])  ?></div>
						</div>
					</div>

					<div class="grid__col-1-4 servicios-100">
						<img class="servicios__image-izq servicios__image-izq-top" src="<?= THEMEURL ?>/images/servicios/icono-nube-izq.svg" alt="Icono nube">
						<img class="servicios__image-izq-top-show-mobile wow fadeInRight" src="<?= THEMEURL ?>/images/servicios/nube-serv-mobile-comida.svg" alt="Icono nube" data-wow-duration="1.5s" data-wow-delay="1s">
					</div>
					


					<div class="grid__col-1-8">
						<?php if (!empty($page_services->services["services"]) ): ?>
							<ul class="servicios__list">
								<?php foreach ($page_services->services["services"] as $service): ?>
									<li class="servicios__list-beneficios">
										<?= $service->title  ?><span><?= nl2br($service->description)  ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>

					<div class="grid__col-1-1">
						<img class="servicios__image-der--nube wow slideInUp" src="<?= THEMEURL ?>images/servicios/icono-nubes-der.svg" alt="Nubes con un globo"  data-wow-duration="1.5s" data-wow-delay="1s">
					</div>

				</div>
			<?php endif; ?>
		</div>
	</section>
<?php get_footer() ?>

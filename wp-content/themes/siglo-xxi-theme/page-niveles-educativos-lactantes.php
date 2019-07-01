<?php get_header() ?>

    <?php $page_eduaction_labels_lactantes = new Cltvo_Page_Education_Lactantes(); ?>
	
	<!-- Menu con scroll -->
	<?php  themeInc('/inc/header.php');  ?>
	
	<section>
        <div class="niveles__parallax-mobil" data-parallax="scroll" data-image-src="<?= THEMEURL ?>/images/parallax-niveles-aldoble.png"></div>
		<div class="niveles__parallax-desktop" id="section-2"></div>
	</section>

	<section class="niveles__background-orange">

		<!-- <div class="niveles__parallax"></div> -->

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

	<?php if (!empty($page_eduaction_labels_lactantes->intro["title"].$page_eduaction_labels_lactantes->intro["subtitle"]) ): ?>
		<section class="niveles__background-orange">
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-6 grid__col-offset-1-3 niveles__colmd">
						<div class="niveles__etapa wow fadeInRight" data-wow-iteration="1" data-wow-duration="1.5s" >
							<h3 class="niveles__edad" ><?= nl2br($page_eduaction_labels_lactantes->intro["title"]); ?></h3>
							<h4 class="niveles__descripcion"><?= nl2br($page_eduaction_labels_lactantes->intro["subtitle"]); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<section class="niveles__content">
		<div class="grid__row">
			
            <section class="niveles__content">
                <div class="grid__row">
                    
                    <div class="grid__container" id="inicial">
                        <div class="grid__col-1-6 grid__col-offset-1-3 niveles__colmd">
                            <div class="niveles__inicial">
                                <h5 class="niveles__inicial-title" >Educación inicial: lactantes y maternales</h5>
                                <p class="niveles__inicial-sbtitle"><?= nl2br($page_eduaction_labels_lactantes->initial_education["sentence"]); ?></p>
                            </div>
                        </div>
                        <div class="grid__col-1-9 grid__col-offset-1-3" id="inicial">
                            <div class="niveles__inicial">
                                <h5 class="niveles__inicial-title-lactantes">lactantes: de 3 meses a 1 año y 5 meses</h5>
                                <div class="niveles__inicial-programa">
                                    <?php if (!empty( $page_eduaction_labels_lactantes->initial_education["lactating"]["left_col"])): ?>
                                        <ul class="niveles__inicial-areas">
                                            <?php foreach ($page_eduaction_labels_lactantes->initial_education["lactating"]["left_col"] as $key => $item): ?>
                                                <li class="niveles__inicial-areas--list"><?= nl2br($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <?php if (!empty( $page_eduaction_labels_lactantes->initial_education["lactating"]["right_col"])): ?>
                                        <ul class="niveles__inicial-materias wow slideInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                            <?php foreach ($page_eduaction_labels_lactantes->initial_education["lactating"]["right_col"] as $key => $item): ?>
                                                <li class="niveles__inicial-materias--list"><?= nl2br($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="niveles__inicial-icon wow slideInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                        <img class="niveles__inicial-icon--image" src="<?= THEMEURL ?>/images/niveles/icono-lactantes.svg" alt="Icono de payaso">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="grid__col-1-9 grid__col-offset-1-3">
                            <div class="niveles__inicial">
                                <h5 class="niveles__inicial-title-lactantes">Maternal I y II: de 1 año 6 meses a 2 años 11 meses</h5>
                                <p class="niveles__inicial-text">Ámbitos de experiencia:</p>
                                <div class="niveles__inicial-programa">
                                    <?php if (!empty( $page_eduaction_labels_lactantes->initial_education["maternal"]["left_col"])): ?>
                                        <ul class="niveles__inicial-areas">
                                            <?php foreach ($page_eduaction_labels_lactantes->initial_education["maternal"]["left_col"] as $key => $item): ?>
                                                <li class="niveles__inicial-areas--list"><?= nl2br($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <?php if (!empty( $page_eduaction_labels_lactantes->initial_education["maternal"]["right_col"])): ?>
                                        <ul class="niveles__inicial-materias wow slideInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                            <?php foreach ($page_eduaction_labels_lactantes->initial_education["maternal"]["right_col"] as $key => $item): ?>
                                                <li class="niveles__inicial-materias--list"><?= nl2br($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="niveles__inicial-icon wow slideInUp " data-wow-duration="1s" data-wow-delay="1.5s">
                                        <img class="niveles__inicial-icon--image" src="<?= THEMEURL ?>/images/niveles/icono-maternal.svg" alt="Icono de bote de pintura y brocha">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid__container">
                        <div class="grid__col-1--9 grid__col-offset-1-2">
                            <div class="niveles__boximg-mt">
                                <img class="" src="<?= THEMEURL ?>/images/niveles/niveles.svg" alt="Icono cuadritos">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			
		</div>
	</section>


<?php get_footer() ?>

<?php get_header() ?>

    <?php 
    
    $page_eduaction_labels_lactantes = new Cltvo_Page_Education_Lactantes(); 

	$page_eduaction_labels_preescolar = new Cltvo_Page_Education_Preescolar(); ?>
	
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
						<div class="niveles__etapa wow fadeInRight" data-wow-iteration="1" data-wow-duration="2s" >
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
                    <div class="grid__container" id="preescolar">
                        <div class="grid__col-1-6 grid__col-offset-1-3 niveles__colmd">
                            <div class="niveles__inicial">
                                <h5 class="niveles__inicial-title">Educación preescolar</h5>
                                <p class="niveles__inicial-sbtitle"><?= nl2br($page_eduaction_labels_preescolar->preschool_education["sentence"]); ?></p>
                            </div>
                        </div>
                        <div class="grid__col-1-9 grid__col-offset-1-3">
                            <div class="niveles__inicial">
                                <h5 class="niveles__inicial-title">Preescolar I, II y III: de los 3 a los 6 años</h5>
                                <p class="niveles__inicial-text">Aprendizaje clave:</p>
                                <div class="niveles__inicial-programa">

                                    <?php if (!empty( $page_eduaction_labels_preescolar->preschool_education["preschool"]["left_col"])): ?>
                                        <ul class="niveles__inicial-areas">
                                            <?php foreach ($page_eduaction_labels_preescolar->preschool_education["preschool"]["left_col"] as $key => $item): ?>
                                                <li class="niveles__inicial-areas--list"><?= nl2br($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if (!empty( $page_eduaction_labels_preescolar->preschool_education["preschool"]["right_col"])): ?>
                                        <ul class="niveles__inicial-materias wow slideInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                            <?php foreach ($page_eduaction_labels_preescolar->preschool_education["preschool"]["right_col"] as $key => $item): ?>
                                                <li class="niveles__inicial-materias--list"><?= nl2br($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <div class="niveles__inicial-icon niveles__inicial-icon--compu wow slideInUp clearfix" data-wow-duration="1s" data-wow-delay="1.5s">
                                        <img class="niveles__inicial-icon--image" src="<?= THEMEURL ?>/images/niveles/icono-preescolar.svg" alt="Icono de computadora">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			
		</div>
	</section>


<?php get_footer() ?>

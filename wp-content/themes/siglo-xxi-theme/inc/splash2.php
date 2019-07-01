<!-- <section class="splash">
	<h2>POR UNA NUEVA Y MEJOR HUMANIDAD</h2>
	<h1>CENTRO EDUCATIVO INFANTIL SIGLO XXI</h1>
</section> -->
<!-- <section class="splash">
	<div id="container" class="wrapper">
		<ul id="scene" class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" style=" transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
			<li class="layer" data-depth="0.00" style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;"></li>
			<li class="layer" data-depth="0.10" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(-2.03867px, -2.31px, 0px); transform-style: preserve-3d; backface-visibility: hidden;"><div class="background"></div></li>

			<li class="layer" data-depth="0.15" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(-3.05801px, -3.465px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
				<ul class="rope depth-10">
					<li><img src="<?= THEMEURL ?>/images/splash/estrellas.svg" alt="Rope"></li>
				</ul>
			</li>
			<li class="layer" data-depth="0.30" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(-6.11602px, -6.93px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
				<ul class="rope ">
					<li><img src="<?= THEMEURL ?>/images/splash/nubes.svg" alt="Rope"></li>

				</ul>
			</li>

			<li class="layer" data-depth="0.60" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(-12.232px, -13.86px, 0px); transform-style: preserve-3d; backface-visibility: hidden;"><div class="lighthouse depth-60"></div></li>
			<li class="layer" data-depth="0.60" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(-12.232px, -13.86px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
				<ul class="rope depth-60">
				</ul>
			</li>
			<li class="layer" data-depth="0.60" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(-12.232px, -13.86px, 0px); transform-style: preserve-3d; backface-visibility: hidden;"><div class="wave plain depth-60"></div></li>
		</ul>
		
	</div>
</section> -->
<section class="splash">
	<div id="contaier" class="splash__container">
		<div id="scene" class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" style=" transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
<!-- 			<div class="splash__scene-layer" data-depth="0.00" style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;"></div>
 -->			
			<!--4º plano: color de fondo, se mueve horizontal igual que 3º pero en otra velocidad (pequeña diferencia) -->
			<div class="splash__scene-layer--fondo splash__scene-fondo">
				<img src="<?= THEMEURL ?>/images/splash/fondo.svg" alt="">
			</div>

			<!-- 5º plano: nubes tienen un pequeño movimiento en infinito. (no con el mouse) -->
			<div class="splash__scene-layer splash__scene-quinto" data-depth="0.10">
				<div class="splash__scene-quinto--nubes">
					<img src="<?= THEMEURL ?>/images/splash/nubes.svg" alt="">
				</div>
			</div>

			<!-- 3º plano: con el mouse(izq derech)  se mueve horizontalmente el cielo mostrando el sol o la luna.
			*Las estrellas prende y pagan con opacity -->
			<!-- Estrellas -->
			<div class="splash__scene-layer splash__scene-tercero" data-depth="0.30">
				<div class="splash__scene-tercero--estrellas ">
					<img src="<?= THEMEURL ?>/images/splash/estrellas.svg" alt="">

				</div>
			</div>
			<!-- sol -->
			<div class="splash__scene-layer splash__scene-tercero" data-depth="0.30">
				<div class="splash__scene-tercero--sol ">
					<img src="<?= THEMEURL ?>/images/splash/sol.svg" alt="">
				</div>
			</div>

			<!-- 2º plano: La tierra rota un poco(max 20º de cada lado) , con el punto de rotación en medio del mundo.  La rotar se muestran niños de más abajo.. -->			
			<!-- mundo -->
			<style lang="">
				#mundo_container {
					height: 500px;
				}
			</style>
			<div class="splash__scene-layer splash__scene-segundo" data-depth="0.60">
				<div class="splash__scene-segundo--mundo">
					<div id="mundo_container">
						<?php themeInc('/images/splash/mundo.svg')?>
					</div>	
				</div>
			</div>
			<!-- sombra de mundo -->
			<div class="splash__scene-layer splash__scene-segundo" data-depth="0.60">
				<div class="splash__scene-segundo--mundo sombra-mundo">
					<img src="<?= THEMEURL ?>/images/splash/sombra-mundo.svg" alt="">
				</div>
			</div>
			<!-- niños -->
			<div class="splash__scene-layer splash__scene-segundo" data-depth="0.60">
				<div class="splash__scene-segundo--ninos">
					<img src="<?= THEMEURL ?>/images/splash/ninos.svg" alt="">
				</div>
			</div>
			
			
		
			
			<!-- 1º plano: con el mouse (izq-der) se mueve la type muy poco, siempre centrado -->
			<!-- <div class="splash__scene-layer splash__scene-primer" data-depth="0.90">
				<div class="splash__scene splash__scene-primer--logo ">
					<img src="<?= THEMEURL ?>/images/splash/centro_educativo.svg" alt="">
				</div>
			</div> -->
		</div>
	</div>
</section>
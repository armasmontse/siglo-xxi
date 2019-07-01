<style>
	.scene, .layer {
	    display: block;
	    height: 100%;
	    width: 100%;
	    padding: 0;
	    margin: 0;
	}

</style>

<div class="splash" style="height: calc(100vh - 15px);">
	<a href="#nextSection">
	<ul id="scene" class="scene">
		
		<li class="layer" data-depth="0.8">
			<div id="background-layer" class="background-layer"></div>
		</li>

		<li class="layer" data-depth="0.2">
			<div id="estrellas-layer" class="estrellas-layer">
				<img class="stars stars-1" src="<?php echo THEMEURL ?>/images/splash/estrellas1.svg" alt="">
				<img class="stars stars-2" src="<?php echo THEMEURL ?>/images/splash/estrellas1.svg" alt="">
				<img class="stars stars-3" src="<?php echo THEMEURL ?>/images/splash/estrellas1.svg" alt="">
			</div>
		</li>

		<li class="layer" data-depth="0.7">
			<div id="sol-luna-layer" class="sol-luna-layer"></div>
		</li>

		<li class="layer" data-depth="0.1">
			<div id="nubes-layer" class="nubes-layer">
				<img class="clouds clouds-1" src="<?php echo THEMEURL ?>/images/splash/nubes1.svg" alt="">
				<img class="clouds clouds-2" src="<?php echo THEMEURL ?>/images/splash/nubes2.svg" alt="">
				<img class="clouds clouds-3" src="<?php echo THEMEURL ?>/images/splash/nubes3.svg" alt="">
			</div>
		</li>

		<li class="layer" data-depth="0.2">
			<div id="world-layer" class="world-layer">
				<img class="world" src="<?php echo THEMEURL ?>/images/splash/world.svg" alt="">
			</div>
		</li>

		<li class="layer" data-depth="0.3">
			<div id="logo-layer" class="logo-layer">
				<h1 class="logo-text">
					Por una nueva y mejor humanidad <br>
					<small>Centro educativo infantil siglo XXI</small>
				</h1>
			</div>
		</li>
	</ul>
</a>
</div>
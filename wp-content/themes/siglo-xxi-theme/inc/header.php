<nav class="header__JS <?php if (!is_front_page()): ?>header__JS--fix<?php endif ?>">
	<div class="header__contentNavbar">
		<div class="header__brand">
			<a class="header__logo" href="<?= get_site_url(); ?>">
				<img class="header__logo-image" src="<?= THEMEURL ?>/images/logo-menu.svg" alt="">
				<img class="header__logo-image--mobil" src="<?= THEMEURL ?>/images/logo-popup.svg" alt="">

			</a>
			<button class="header__logo-close" id="header-close_JS">MENÚ</button>
		</div>
		<ul class="header__items" id="header__items_JS">
			<li class="header__link niveles <?php if(is_active('niveles-educativos')): ?>active<?php endif ?>">
				<a>Niveles educativos</a>
				<ul class="header__items-sub niveles">
                    <li class='header__items-sub--sublink <?php if(is_active('niveles-educativos-lactantes')): ?>active<?php endif ?>'><a href='<?= specialPagePermalink("niveles-educativos-lactantes"); ?>'>Inicial</a></li>
                    <li class='header__items-sub--sublink <?php if(is_active('niveles-educativos-preescolar')): ?>active<?php endif ?>'><a href='<?= specialPagePermalink("niveles-educativos-preescolar"); ?>'>preescolar</a></li>
                </ul>

			</li>
			<li class="header__link <?php if(is_active('filosofia-de-la-escuela')): ?>active<?php endif ?>">
				<a href="<?= specialPagePermalink("filosofia-de-la-escuela"); ?>">Filosofía de la escuela</a>
			</li>
			<li class="header__link <?php if(is_active('servicios-y-beneficios')): ?>active<?php endif ?>">
				<a href="<?= specialPagePermalink("servicios-y-beneficios"); ?>">Servicios</a>
				<ul class="header__items-sub">
                    <li class='header__items-sub--sublink'><a href='<?= specialPagePermalink("servicios-y-beneficios"); ?>#beneficios'>Beneficios</a></li>
                    <li class='header__items-sub--sublink'><a href='<?= specialPagePermalink("servicios-y-beneficios"); ?>#servicios'>Servicios <br> Opcionales</a></li>
                </ul>
            </li>
			<li class="header__link <?php if(is_active('contacto')): ?>active<?php endif ?>">
				<a href="<?= specialPagePermalink("contacto"); ?>">contacto</a>
            </li>

            <li class="header__link">
				<a href="http://blog.centroeducativosigloxxi.edu.mx" target="_blank">Blog</a>
			</li>

		</ul>
	</div>
</nav>

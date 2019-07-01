<header class="header__micro">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-1 header__micro-menu">
				<?php $page_contact = new Cltvo_Page_Contacto(); ?>
				<?php if (!empty($page_contact->social_net["phone"]) ): ?>
					<div class="header__micro-menu--phone">
						<span class="text">T. <?= $page_contact->social_net["phone"] ?></span>
						<span class="icon"></span>
					</div>
				<?php endif; ?>
				<?php if (!empty($page_contact->social_net["mail"]) ): ?>
					<div class="header__micro-menu--email">
						<a href="mailto:<?= $page_contact->social_net["mail"] ?>" target="_blank" class="text"><?= $page_contact->social_net["mail"] ?></a>
						<a href="mailto:<?= $page_contact->social_net["mail"] ?>" target="_blank" class="icon"></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>
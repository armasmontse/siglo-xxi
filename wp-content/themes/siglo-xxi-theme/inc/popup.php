<?php
 // solo funciona en el index requere el objeto $home_page
 ?>
<?php if (!empty($home_page->last_news["news"]) && $home_page->last_news["end_date"] >= $home_page->last_news["now"]): ?>
    <div class="pop-op" id="pop-op_JS">
        <div class="pop-op__container">
            <div class="pop-op__logo">
                <img class="pop-op__logo-image" src="<?= THEMEURL ?>/images/logo-popup.svg" alt="Logo">
            </div>
            <div class="pop-op__content">
                <div class="pop-op__content-date"><?= $home_page->last_news["news_date"]   ?> </div>
                <div class="pop-op__content-text"><?=nl2br($home_page->last_news["news"])  ?></div>
            </div>
            <div class="pop-op__close">
                <button class="pop-op__close-button pop-op__close-button_JS">CERRAR</button>
            </div>
        </div>
    </div>
<?php endif; ?>

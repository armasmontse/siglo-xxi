<?php get_header() ?>
    <?php $page_terms = new Cltvo_Page(); ?>
	
	<!-- Menu con scroll -->
	<?php  themeInc('/inc/header.php');  ?>

	<section class="aviso">
		
		<div class="grid__container">

			<div class="grid__col-1--6 grid__col-offset-1-2 aviso__box">

				<div class="grid__box">
				
					<div class="aviso__ttl title-parallax">
					    
					    <?php if (!empty($page_terms->post->post_title) ): ?>
					    
					        <?= $page_terms->post->post_title  ?>
					    
					    <?php endif; ?>
				    
				    </div>

				    <div class="aviso__content paragraph-text">
					
						<?php if (!empty($page_terms->post->post_content) ): ?>
					
							<?= wpautop($page_terms->post->post_content)  ?>
					
						<?php endif; ?>
				    
				    </div>							

				</div>

			</div>

		</div>

	</section>

<?php get_footer() ?>

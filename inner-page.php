<?php
/**
 * Template Name: InnerPage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @author Alexey Suprun
 * @package km_mebli
 */

get_header(); ?>

	<div id="innerPage" class="content-area">
		<div class="container">

					<div class="main-banner-logo-and-contacts">
						<div class="main-banner-logo">
							<div class="main-banner-logo__img">
								<a href="/"><img src="/wp-content/themes/km-mebli/assets/img/logo-black.svg" alt="Логотип"></a>
							</div>
							<div class="main-banner-logo__text">
								<!--  -->
							</div>
						</div>	

						<div class="main-banner-contacts">
							<a href="tel:<?php the_field('phone-number__one', 'option'); ?>"><span><?php the_field('phone-number__one', 'option'); ?></span> <i class="fab fa-telegram-plane"></i> <i class="fab fa-viber"></i> <i class="fab fa-whatsapp"></i></a>
							<a href="tel:<?php the_field('phone-number__two', 'option'); ?>"><?php the_field('phone-number__two', 'option'); ?></a> 	
						</div>	
					</div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-page', 'content-page' );
			endwhile; // End of the loop.
			?>				
		</div>
	</div><!-- #innerPage -->

<?php
get_footer();

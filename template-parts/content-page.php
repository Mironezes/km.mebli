<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package km_mebli
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="inner-page-header">
		<?php the_title( '<h1 class="inner-page-header__title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="inner-page-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

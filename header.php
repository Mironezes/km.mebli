<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @author Alexey Suprun
 * @package km_mebli
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1"> -->


	<link rel="preload" href="/wp-content/themes/km-mebli/fonts/Muller-Light.woff" as="font" type="font/woff" crossorigin>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-content-wrapper">

	<header class="header">
		<div class="container">
			<div class="top-navigation-and-links">
				<nav class="top-navigation">
					<ul>
						<li class="top-navigation__link"><a href="#advantages"><span>Наши преимущества</span></a></li>
						<li class="top-navigation__link"><a href="#gallery"><span>Наши работы</span></a></li>
						<li class="top-navigation__link"><a href="#reviews"><span>Отзывы клиентов</span></a></li>
						<li class="top-navigation__callback-link"><i class="fas fa-phone"></i> <span>Заказать обратный звонок</span></li>	
						<li class="top-navigation__email"><a href="mailto:<?php the_field('email', 'option'); ?>"><i class="fas fa-envelope-open-text"></i> <span>Написать на почту</span></a></li>						
					</ul>
				</nav>
				<div class="top-links">
					<span>Мы в социальных сетях:</span>
					<ul>
						<li><a href="<?php the_field('facebook-link', 'option'); ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
						<li><a href="<?php the_field('instagram-link', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div> <!-- top-navigation-and-socials -->
		</div> <!-- .container -->
	</header> <!-- .header -->

		
<?php
/**
 * Template Name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @author Alexey Suprun
 * @package km_mebli
 */

get_header(); ?>

		<main id="homepage-content">

			<section class="main-banner">
				<div class="container">

					<div class="main-banner-logo-and-contacts">
						<div class="main-banner-logo">
							<div class="main-banner-logo__img">
								<img src="/wp-content/themes/km-mebli/assets/img/logo.svg" alt="Логотип">
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


					<div class="main-banner-text">
						<h1><?php the_field('main-banner__heading-text', 'option'); ?></h1>
						<h2><?php the_field('main-banner__sale-text', 'option'); ?></h2>

						<span class="main-banner__button button">Узнать стоимость со скидкой</span>
					</div>

					
					<div class="main-banner-features">
						<div id="main-banner-features-tile__delivery" class="main-banner-features-tile">
							<div class="main-banner-features-tile__img">
								<img src="/wp-content/themes/km-mebli/assets/icons/main-banner/delivery-icon.svg" alt="Доставка">							
							</div>
							<div class="main-banner-features-tile__text">
								<span><strong>Бесплатная</strong><br> доставка по Киеву</span>								
							</div>
						</div>

						<div id="main-banner-features-tile__guarantee" class="main-banner-features-tile">
							<div class="main-banner-features-tile__img">
								<img src="/wp-content/themes/km-mebli/assets/icons/main-banner/guarantee-icon.svg" alt="Доставка">							
							</div>
							<div class="main-banner-features-tile__text">
								<span><strong>Гарантия</strong><br> качества</span>								
							</div>
						</div>

						<div id="main-banner-features-tile__metering" class="main-banner-features-tile">
							<div class="main-banner-features-tile__img">
								<img src="/wp-content/themes/km-mebli/assets/icons/main-banner/metering-icon.svg" alt="Доставка">							
							</div>
							<div class="main-banner-features-tile__text">
								<span><strong>Бесплатный</strong><br> замер. Проект</span>								
							</div>
						</div>
					</div>
				</div>
			</section> <!-- .main-banner -->


			<section id="advantages" class="advantages section">
				<div class="container">
					<div class="advantages-inner section-inner">
						<div class="advantages-header section-header">
							<h2 class="section-header__title">Качество по доступной цене</h2>
							<span class="section-header__title__desc">За 2018 год мы изготовили и установили <strong>более 150 изделий</strong></span>				
						</div>

						<div class="advantages-slider-wrapper">
							<div class="advantages-slider owl-carousel owl-theme">						
								<?php 
								    $params = array( 
								    ); 

								    $slider = pods( 'slider', $params ); 

								    if ( 0 < $slider->total() ) { 
								        while ( $slider->fetch() ) { 
								?>
								<div class="advantages-slider-tile">
									<div class="advantages-slider-tile-img">
										<img src="<?php echo $slider->display( 'slider-img' ); ?>" alt="Преимущества">
									</div>
									<div class="advantages-slider-tile-text">
								    	<h3 class="advantages-slider-tile__heading">
											<img class="advantages-slider-tile__heading-icon" src="<?php echo $slider->display( 'slider-icon' ); ?>" alt="Преимущества">
								    		<span class="advantages-slider-tile__heading-text"><?php echo $slider->display( 'slider-heading' ); ?></span>
								    		</h3> 
								    	<span class="advantages-slider-tile__text"><?php echo $slider->display( 'slider-text' ); ?></span> 										
									</div>
								</div>
								<?php 
								        }
							    } 				
							    ?>	
							</div>
							<div class="advantages-slider-counter"></div>
							<div class="advantages-slider-navigation">
								<span class="advantages-slider-navigation__prev"><i class="fas fa-chevron-left"></i> Назад</span>
								<span class="advantages-slider-navigation__next">Вперед <i class="fas fa-chevron-right"></i></span>
							</div>							
						</div>

					</div>
				</div>
			</section> <!-- .advantages -->			
			

			<section id="gallery" class="gallery section">
				<div class="container">
					<div class="gallery-inner section-inner">
						<div class="gallery-header section-header">
							<h2 class="section-header__title">Галерея</h2>
							<span class="section-header__title__desc">наших лучших изделий за 2018-2019 год</span>									
						</div>

						<div class="gallery-tabs">
							<div class="gallery-tabs-control">
							  <button data-target="cupboards" class="gallery-tabs-control__item active">Шкафы</button>
							  <button data-target="kitchens" class="gallery-tabs-control__item">Кухни</button>
							  <button data-target="others" class="gallery-tabs-control__item">Комоды. Столы. Тумбы</button>
							</div>

							<div id="cupboards" class="gallery-tab-content opened">
								<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'shkafy', 'slug' ); } ?>
								<a class="gallery-tab-content__link button" href="/shkafy/" target="_blank">Посмотреть все работы</a>
							</div>

							<div id="kitchens" class="gallery-tab-content">
								<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'kuhni', 'slug' ); } ?>
								<a class="gallery-tab-content__link button" href="/kuhni/" target="_blank">Посмотреть все работы</a>
							</div>

							<div id="others" class="gallery-tab-content">
								<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'komody-stoly-stulya', 'slug' ); } ?>
								<a class="gallery-tab-content__link button" href="/raznoe/" target="_blank">Посмотреть все работы</a>								
							</div>
						</div>
					</div>
				</div>
			</section> <!-- .gallery -->	


			<section class="bonuses section">
				<div class="container-fluid">
					<div class="bonuses-inner">
						<div id="bonus-tile-first" class="bonuses-header bonus-tile">
							<div class="bonuses-header-img">
								<img src="/wp-content/themes/km-mebli/assets/img/bonuses/bonuses-img.jpg" alt="Изображение">								
							</div>
							<div class="bonuses-header-text">
								<h2 class="section-header__title">Мы предлагаем вам</h2>	
								<p>Индивидуальный подход и внимательное отношение ко всем Вашим пожеланиям.</p>
								<p>Разработку индивидуального 3D — проекта с учетом Ваших пожеланий, помощь в подборке нужных материалов, цветов, оттенков, фурнитуры (все образцы в наличии).</p>
								<p>Только после полученного от Вас одобрения эскиза, мы приступаем непосредственно к производству мебели.</p>				
							</div>
						</div>

						<div id="bonus-tile-second" class="bonus-tile">
							<span class="bonus-tile__number">1</span>
							<div class="bonus-tile__text">
								<h3>Регулировка фурнитуры</h3>
								<span>Бесплатная регулировка<br>
								в течении гарантийного срока<br>
								Если вы будете периодически заботиться<br>
								о фурнитуре, мебель прослужит<br>
								вам более 10 лет.</span>							
							</div>
						</div>

						<div id="bonus-tile-third" class="bonus-tile">
							<span class="bonus-tile__number">2</span>
							<div class="bonus-tile__text">
								<img src="/wp-content/themes/km-mebli/assets/img/bonuses/guarantee-img.png" alt="Изображение">
								<h3>Гарантия на наши изделия</h3>	
								<span>Вы получите гарантию на<br>
								изделия высокого качества.<br>
								Гарантия бесплатна!</span>						
							</div>
						</div>
					</div>
				</div>
			</section> <!-- .bonuses -->	


			<section class="assembling" section>
				<div class="container">
					<div class="assembling-inner section-inner">
						
					</div>
				</div>
			</section> <!-- .assembling -->	


			<section id="reviews" class="reviews section">
				<div class="container">
					<div class="reviews-inner section-inner">
						<div class="reviews-header section-header">
							<h2 class="section-header__title">Отзывы</h2>
							<span class="section-header__title__desc">наших клиентов</span>									
						</div>

						<div class="reviews-slider owl-carousel">
							<?php 
							    $params = array( 
							    ); 

							    $books = pods( 'reviews', $params ); 

							    if ( 0 < $books->total() ) { 
							        while ( $books->fetch() ) { 
							?>
							<div class="reviews-slider-tile">
							    <span class="reviews-slider-tile__author"><?php echo $books->display( 'review-author' ); ?></span> 
							    <span class="reviews-slider-tile__text"><?php echo $books->display( 'review-text' ); ?></span> 								
							</div>
							<?php 
							        }
						    } 				
						    ?>							
						</div>

						<div class="reviews-slider-navigation">
							<span class="reviews-slider-navigation__prev"><i class="fas fa-chevron-left"></i> Назад</span>
							<span class="reviews-slider-navigation__next">Вперед <i class="fas fa-chevron-right"></i></span>
						</div>

					</div>
				</div>
			</section> <!-- .reviews -->	

		</main><!-- #homepage-content -->

<?php
get_footer();

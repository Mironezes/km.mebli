<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @author Alexey Suprun
 * @package km_mebli
 */

?>


<footer class="footer">
	<div class="container">
		<div class="footer-inner">
			

			<div class="footer-calculate-price-form">
				<h2>Уже делали просчет в салонах?<br>
				Узнайте стоимость напрямую<br>
				от KM-Mebli!</h2>
				<span>Загрузите фотографию, 3D-проект или эскиз и<br>
				мы сообщим примерную стоимость за 30 минут</span>

				<span class="footer-calculate-price-form__button button"><i class="fas fa-link"></i> Загрузить файл</span>
			</div>

			<div class="footer-contacts">
				<div class="footer-contacts__logo">
					<img src="/wp-content/themes/km-mebli/assets/img/logo-white.svg" alt="Логотип">					
				</div>
				<div class="footer-contacts__phones">
					<a href="tel:+38 (099) 392-63-23"><span>+38 (099) 392-63-23</span> <i class="fab fa-telegram-plane"></i> <i class="fab fa-viber"></i> <i class="fab fa-whatsapp"></i></a>
					<a href="tel:+38 (097) 334-28-78">+38 (097) 334-28-78</a> 						
				</div>
			</div>

		</div>
	</div>
</footer> <!-- .footer -->


<div class="main-callback-modal modal">
	<div class="modal-content">
		<span class="modal-close"><i class="fas fa-times"></i></span>
		<div class="modal-header">
			<h2>Заявка на обратный звонок</h2>
			<span>Заполните поля ниже и<br>менеджер свяжется с вами<br>в течение 30 мин.</span>		
		</div>
		<div class="modal-body">
			<?php gravity_form(2, false, false, false, '', true, 12); ?>		
		</div>
		<div class="modal-footer">
			<span class="modal-footer__secured-data"><i class="fas fa-lock"></i> Ваши данные находятся в безопасности<br>и не будут переданы третьим лицам</span>
		</div>		
	</div>
</div>


<div class="share-callback-modal modal">
	<div class="modal-content">
		<span class="modal-close"><i class="fas fa-times"></i></span>
		<div class="modal-header">
			<h2>Заполните поля ниже<br>
			и получите скидку 10%</h2>
			<span>Заполните поля ниже и<br>менеджер свяжется с вами<br>в течение 30 мин.</span>		
		</div>
		<div class="modal-body">
			<?php gravity_form(3, false, false, false, '', true, 12); ?>		
		</div>
		<div class="modal-footer">
			<span class="modal-footer__secured-data"><i class="fas fa-lock"></i> Ваши данные находятся в безопасности<br>и не будут переданы третьим лицам</span>
		</div>		
	</div>
</div>


<div class="calculate-callback-modal modal">
	<div class="modal-content">
		<span class="modal-close"><i class="fas fa-times"></i></span>
		<div class="modal-header">
			<h2>Загрузите фотографию,<br>
			3D-проект или эскиз</h2>
			<span>Размер выбранного файла не должен<br>
			превышать 25 мегабайт</span>		
		</div>
		<div class="modal-body">
			<?php gravity_form(1, false, false, false, '', true, 12); ?>		
		</div>
		<div class="modal-footer">
			<span class="modal-footer__secured-data"><i class="fas fa-lock"></i> Ваши данные находятся в безопасности<br>и не будут переданы третьим лицам</span>
		</div>		
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>


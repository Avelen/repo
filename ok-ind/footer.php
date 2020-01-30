<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage ok-ind
 */
?>
<?php 
if(!is_front_page()): $class = "child-page";
else : $class = "home-page";
endif; ?>
<footer class="<?php echo $class; ?>">
	<section class="footer__top-panel">
		<div class="container">
			<div class="footer__top-panel__block">
				<div class="row border-btm">
					<div class="col-md-3 col-xs-6">
						<div class="footer__top-panel__block__logo">
							<img src="<?php echo get_theme_mod('logo_footer', '/wp-content/themes/ok-ind/img/logo-blue.svg'); ?>" alt="" width="160px;">
						</div>
					</div>
					<div class="col-md-6 hidden-xs">
						<div class="footer__top-panel__block__fast-panel">
							<div class="row">
								<div class="col-md-4">
									<a href="#callback-form" class="footer__top-panel__block__fast-panel__icon-item calc fancybox-inline">Калькулятор<br> стоимости</a>
								</div>
								<div class="col-md-4">
									<a href="#callback-form" class="footer__top-panel__block__fast-panel__icon-item callback__button fancybox-inline">Заказать<br> звонок</a>									
								</div>
								<div class="col-md-4">
									<a href="#callback-form" class="footer__top-panel__block__fast-panel__icon-item gauge fancybox-inline">Вызвать<br> замерщика</a>									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-2 col-xs-6">
						<div class="row">
							<div class="col-md-12">
								<div class="footer__top-panel__block__fast-panel__info-block">
									<div class="footer__top-panel__block__fast-panel__info-block__phone">
										+7 499 399 31 22
									</div>
									<div class="footer__top-panel__block__fast-panel__info-block__open hidden-xs">
										Пн-Пт с 9:00 до 18:00
									</div>
								</div>
							</div>							
						</div>						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_1') ) : ?>
					<?php endif; ?>
				</div>
				<div class="col-md-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_2') ) : ?>
					<?php endif; ?>
				</div>
				<div class="col-md-2">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_3') ) : ?>
					<?php endif; ?>
				</div>
				<div class="col-md-4">
					<div class="footer-bottom__pandalogo">
						<a href="http://mediapanda.ru/" target="_blank">							
							<img src="/wp-content/themes/ok-ind/img/pandalogo.png">
						</a>						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="powered">
		<div class="container">
			<div class="row">
				<div class="powered__text text-center white-text">
					<p>© 2008—2017 Официальный сайт компании Оконная Индустрия. Все права защищены.</p>
					<p>Сайт не является публичной офертой и носит информационный характер.</p>
				</div>
			</div>
		</div>
	</section>
</footer>
<div class="fancybox-hidden">
	<div id="callback-form" class="callback-form">
		<?php echo do_shortcode('[contact-form-7 id="1716" title="Заполните форму"]'); ?>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * @package WordPress
 * @subpackage ok-ind
 * Template Name: Главная
 */
get_header(); ?>

<section class="first-screen">
	<div class="absolute-background"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="first-screen__block__absolute-text">ЛУЧШИЙ ПРОИЗВОДИТЕЛЬ В РОССИИ</div>
				<div class="first-screen__block">
					<div class="first-screen__block__title white_text">
						Пластиковые <br>окна REHAU
					</div>
					<div class="first-screen__block__description white_text">
						Крупнейший современный производитель пластиковых окон, металлических дверей и ворот в России по инновационным технологиям
					</div>
					<div class="first-screen__block__button btn calc_btn">
						<a href="#callback-form" class="fancybox-inline">РАСЧИТАТЬ СТОИМОСТЬ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="second-screen">
	<div class="container">
		<div class="second-screen__white-bg-block">
			<div class="row">
				<div class="col-md-12">
					<div class="second-screen__white-bg-block__title h2 text-center black_text">Каталог продукции</div>
					<div class="second-screen__white-bg-block__description mini-desc text-center">
						К основным характеристикам профильных систем REHAU относят толщину стеклопакета, наличие воздушных камер, системную глубину, звуко- и теплоизоляционный критерии.
					</div>
				</div>
			</div>
			<div class="second-screen__white-bg-block__catalog">
				<div class="row">
					<div class="col-md-8">
						<div class="second-screen__white-bg-block__catalog__title first-title white_text">Пластиковые<br> окна</div>
						<img src="/wp-content/themes/ok-ind/img/prod-7.jpg" alt="Пластиковые окна">
					</div>
					<div class="col-md-4">
						<div class="second-screen__white-bg-block__catalog__title second-title white_text">Балконы<br>и лоджии</div>
						<img src="/wp-content/themes/ok-ind/img/prod-5.jpg" alt="Балконы и лоджии">
					</div>

					<div class="col-md-4 float-md-right">
						<div class="second-screen__white-bg-block__catalog__title second-title white_text">Пластиковые <br>двери</div>
						<img src="/wp-content/themes/ok-ind/img/prod-4.jpg" alt="Пластиковые двери">
					</div>

					<div class="col-md-4">
						<div class="second-screen__white-bg-block__catalog__title second-title white_text">Окна и двери из	<br>теплого алюминия</div>
						<img src="/wp-content/themes/ok-ind/img/prod-3.jpg" alt="Окна и двери из теплого алюминия">
					</div>

					<div class="col-md-4">
						<div class="second-screen__white-bg-block__catalog__title second-title white_text">Металлические <br>двери и ворота</div>
						<img src="/wp-content/themes/ok-ind/img/prod-6.jpg" alt="Металлические двери и ворота">
					</div>
					

					<div class="col-md-6">
						<div class="second-screen__white-bg-block__catalog__title second-title white_text">Рольставни <br>и жалюзи</div>
						<img src="/wp-content/themes/ok-ind/img/prod-1.jpg" alt="Рольставни и жалюзи">
					</div>
					<div class="col-md-6">
						<div class="second-screen__white-bg-block__catalog__title second-title white_text">ТЕПЛОЕ ОСТЕКЛЕНИЕ <br>БАЛКОНОВ</div>
						<img src="/wp-content/themes/ok-ind/img/prod-2.jpg" alt="ТЕПЛОЕ ОСТЕКЛЕНИЕ БАЛКОНОВ">
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>

<?php get_template_part("template-blocks/additionally"); ?>


<section class="home-description">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 no-padding">
				<img src="/wp-content/themes/ok-ind/img/master.jpg" width="100%" class="home-description__image">
			</div>
			<div class="col-md-6">
				<div class="home-description__caption">
					<div class="home-description__caption__gray-border"></div>
					<div class="home-description__caption__white-bg-block">
						<div class="home-description__caption__white-bg-block__title h2 black_text">
							Пластиковые окна <br>на заказ
						</div>
						<div class="home-description__caption__white-bg-block__decription-block">
							<p><b>Оконная индустрия</b> — это крупнейший производитель пластиковых окон, 
							металлических дверей и ворот в России. Современное производство по 
							инновационным технологиям, контроль качества на каждом этапе, 
							адаптированные под российские климатические условия системы установки 
							делают нашу продукцию лидирующую по количеству продаж вот уже 10 лет.</p>
							<p><b>Мы рады предложить Вам:</b></p>
							<ul>
							<li>Современные пластиковые окна, балконные конструкции, 
							рольставни, металлические двери и ворота по доступным ценам.</li>
							<li>Оперативный и качественный монтаж нашей продукции 
							по ГОСТу, который выполняется профессиональными специалистами.</li>
							<li>Квалифицированный подход к решению самых трудных задач.</li>
							<li>Гарантию высочайшего качества нашей продукции.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_template_part("template-blocks/callback-block"); ?>
<?php get_template_part("template-blocks/service-block"); ?>
<?php get_template_part("template-blocks/advantages"); ?>
<?php get_template_part("template-blocks/number"); ?>
<?php get_template_part("template-blocks/reviews"); ?>
<?php get_template_part("template-blocks/contact-form"); ?>
<?php get_template_part("template-blocks/partners"); ?>
<?php get_template_part("template-blocks/projects"); ?>

<?php get_footer(); ?>
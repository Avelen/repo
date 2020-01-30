<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage ok-ind
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>		
	<section class="header__top-panel">
		<div class="container">
			<div class="row border-btm">
				<div class="col-md-3 col-xs-6">
					<div class="header__top-panel__logo">
						<a href="/">
							<img src="<?php echo get_theme_mod('logo', '/wp-content/themes/ok-ind/img/logo.svg'); ?>" alt="" width="160px">
						</a>
					</div>
				</div>
				<div class="col-md-6 hidden-xs">
					<div class="header__top-panel__fast-panel">
						<div class="row">
							<div class="col-md-4">
								<a href="#callback-form" class="header__top-panel__fast-panel__icon-item calc fancybox-inline">Калькулятор<br> стоимости</a>
							</div>
							<div class="col-md-4">
								<a href="#callback-form" class="header__top-panel__fast-panel__icon-item callback__button fancybox-inline">Заказать<br> звонок</a>									
							</div>
							<div class="col-md-4">
								<a href="#callback-form" class="header__top-panel__fast-panel__icon-item gauge fancybox-inline">Вызвать<br> замерщика</a>									
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="row">
						<div class="col-md-8">
							<div class="header__top-panel__fast-panel__info-block">
								<div class="header__top-panel__fast-panel__info-block__phone">
									+7 499 399 31 22
								</div>
								<div class="header__top-panel__fast-panel__info-block__open hidden-xs">
									Пн-Пт с 9:00 до 18:00
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="header__top-panel__fast-panel__burger-menu"></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section class="header__bottom">
		<div class="container">
			<div class="row">
				<div class="header__bottom__menu hidden-xs">
					<?php $args = array( 
							'theme_location' => 'top',
							'container'=> false,
					  		'menu_id' => 'service-menu',
					  		'items_wrap' => '<ul id="%1$s" class="header__bottom__menu__nav nav navbar-nav %2$s">%3$s</ul>',
							'menu_class' => 'top-menu',
					  		'walker' => new bootstrap_menu(true)		  		
				  			);
							wp_nav_menu($args);
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="modal-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-5 white_text">
					<div class="modal-menu__item">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_1') ) : ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-7 menu-left">
					<div class="modal-menu__item white_text">
						<div class="row">
							<div class="col-md-6">
								<div class="modal-menu__item">
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_2') ) : ?>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="modal-menu__item">
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_3') ) : ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</header>

<?php if(!is_front_page()): ?>
<section class="page-header blue-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs white_text" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="<?php if (get_field('header_img')): echo 'col-md-7'; else : echo 'col-md-8'; endif;?>">
				<div class="page-header__caption">
					<div class="page-header__caption__title h2 white_text"><h1><?php the_title(); ?></h1></div>
					<div class="page-header__caption__description white_text">
						<?php if (get_field('sub_title')):?>
						<?php echo get_field('sub_title'); ?>
						<?php else: ?>
						Крупнейший современный производитель пластиковых окон, металлических дверей и ворот в России по инновационным технологиям
						<?php endif; ?>
					</div>
				</div>				
			</div>
			<?php if (get_field('header_img')):?>
			<div class="col-md-4">
				<div class="page-header__image">
					<img src="<?php echo get_field('header_img'); ?>" >					
				</div>
			</div>
			<?php endif; ?>		
		</div>
	</div>
</section>
<?php endif; ?>


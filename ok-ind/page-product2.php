<?php
/*
  Template Name: Страница продукции с услугами
 */
get_header(); ?>

<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block no-padding">
			<div class="row">
				<div class="col-md-2 col-xs-1"></div>
				<div class="col-md-8 col-xs-10">
					<?php echo get_field('text_before'); ?>
				</div>
				<div class="col-md-2 col-xs-1"></div>
			</div>
			<br>
			<?php get_template_part("template-parts/page","product2"); ?>
		</div>
	</div>
</section>

<?php get_template_part("template-blocks/additionally"); ?>

<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block">
			<div class="row">
				<div class="col-md-12">
					<?php echo get_field('price_tab'); ?>
				</div>				
			</div>
		</div>
	</div>
</section>

<?php get_template_part("template-blocks/contact-form"); ?>
<?php get_template_part("template-blocks/reviews"); ?>
<?php get_template_part("template-blocks/works"); ?>
<?php get_template_part("template-blocks/advantages"); ?>

<section class="bottom-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
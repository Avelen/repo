<?php
/*
  Template Name: Страница продукции
 */
get_header(); ?>

<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block">
			<div class="row">
				<div class="col-md-12">
					<?php echo get_field('text_before'); ?>
				</div>
			</div>
			<div class="row">
				<?php get_template_part("template-parts/page","product"); ?>
			</div>
		</div>
	</div>
</section>

<?php get_template_part("template-blocks/additionally"); ?>
<?php get_template_part("template-blocks/reviews"); ?>
<?php get_template_part("template-blocks/contact-form"); ?>
<?php get_template_part("template-blocks/service-block"); ?>

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
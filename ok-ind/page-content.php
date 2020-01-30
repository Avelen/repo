<?php
/*
  Template Name: Страница с контентом
 */
get_header(); ?>

<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block">
			<div class="row">
				<div class="col-md-12">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>				
			</div>
		</div>
	</div>
</section>

<?php get_template_part("template-blocks/advantages"); ?>
<?php get_template_part("template-blocks/number"); ?>
<?php get_template_part("template-blocks/reviews"); ?>
<?php get_template_part("template-blocks/callback-block"); ?>
<?php get_template_part("template-blocks/partners"); ?>

<?php get_footer(); ?>
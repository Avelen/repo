<?php
/*
  Template Name: Страница наши работы
 */
get_header(); ?>

<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center"><?php echo get_field('h2'); ?></h2>
					<div class="mini-desc text-center"><?php echo get_field('h2_desc'); ?></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<?php get_template_part("template-parts/page","works"); ?>	
				</div>				
			</div>
		</div>
		<div class="bottom-content">
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



<?php get_footer(); ?>
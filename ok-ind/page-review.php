<?php
/*
  Template Name: Страница отзывы
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

		<?php get_template_part("template-parts/page","reviews"); ?>

		</div>
	</div>
</section>



<?php get_footer(); ?>
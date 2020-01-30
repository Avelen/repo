<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage ok-ind
 */
get_header(); ?>
<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block">
			<div class="row">				
				<div class="col-md-12">
					<div class="alignright">
						<?php the_post_thumbnail('medium'); ?>						
					</div>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>				
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

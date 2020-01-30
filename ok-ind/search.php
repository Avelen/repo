<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage ok-ind
 */
get_header(); ?> 
<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block">
			<div class="row">				
				<div class="col-md-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('loop'); ?>
					<?php endwhile;
					else: echo '<p>Нет записей.</p>'; endif; ?>	 
					<?php pagination(); ?>
				</div>				
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
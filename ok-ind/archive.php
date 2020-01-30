<?php
/**
 * Страница архивов записей (archive.php)
 * @package WordPress
 * @subpackage ok-ind
 */
get_header(); ?> 
<section class="content-page">
	<div class="container">
		<div class="content-page__white-bg-block no-padding">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center"><?php the_archive_title('Все '); ?></h2>					
					<br><br>
					<?php get_template_part('loop'); ?>					
				</div>				
			</div>
		</div>
		<div class="content-page__pagination text-center">			
			<?php pagination(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
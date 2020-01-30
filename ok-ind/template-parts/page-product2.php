<?php 
 $product = new WP_Query( array( 
						 	'post_type' => 'product', 
							'posts_per_page' => -1,						 	
						 	'tax_query' => array(	
						 		array(
									'taxonomy' => 'cats',
									'terms' => get_field('cat_id')
								)
							) 
						 ) 
			);  
?>
 <?php $i = 0; while ( $product->have_posts() ) : $product->the_post(); ?>
<?php $i++; if ($i == 1): ?>
<div class="archive__item">
	<div class="row">
		<div class="col-md-6 col-xs-12 no-padding">
			<div class="archive__item__image">
				<?php the_post_thumbnail('arhive_img'); ?>
			</div>
		</div>
		<div class="col-md-6 col-xs-12 no-padding azure-bg">
			<div class="archive__item__title h3"><?php the_title(); ?></div>
			<div class="archive__item__description"><?php the_content(); ?></div>
			<div class="archive__item__sales">
				<div class="archive__item__sales__title"><?php echo get_field('price'); ?></div>
				<div class="archive__item__sales__button btn calc_btn"><a href="#callback-form" class="fancybox-inline">Вызвать замерщика</a></div>
			</div>
		</div>
	</div>
</div>
<?php else : ?>
	<div class="archive__item">
	<div class="row">
 		<div class="col-md-6 col-xs-12 no-padding azure-bg">
			<div class="archive__item__title h3"><?php the_title(); ?></div>
			<div class="archive__item__description"><?php the_content(); ?></div>
			<div class="archive__item__sales">
				<div class="archive__item__sales__title"><?php echo get_field('price'); ?></div>
				<div class="archive__item__sales__button btn calc_btn"><a href="#callback-form" class="fancybox-inline">Вызвать замерщика</a></div>
			</div>
		</div>
		<div class="col-md-6 col-xs-12 no-padding">
			<div class="archive__item__image">
				<?php the_post_thumbnail('arhive_img'); ?>
			</div>
		</div>						
	</div>						
</div>
<?php $i = 0;  endif; ?>
<?php endwhile; ?>	 
<?php wp_reset_postdata(); ?> 
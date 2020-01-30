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
 <?php while ( $product->have_posts() ) : $product->the_post(); ?>
 	<div class="col-md-6 col-xs-12">
	 	<div class="product-description">
	 		<div class="row">
		 		<div class="col-md-5 col-xs-12">
					<a href="<?php echo get_the_post_thumbnail_url(get_the_ID() ,'full'); ?>" class="fancybox" >
						<?php the_post_thumbnail('thumbnail'); ?>
					</a>
		 		</div>
		 		<div class="col-md-7 col-xs-12">
		 			<div class="product-description_product-caption">	
		 				<div class="product-description_product-caption_title h3"><?php the_title(); ?></div>
		 				<div class="product-description_product-caption_description">
		 					<?php the_content(); ?>
		 				</div>
		 				<div class="product-description_product-caption_info">		
		 					<div class="price">
		 						<?php echo get_field('price'); ?>		
		 					</div>
		 					<div class="button">
		 						<div class="btn calc_btn"><a href="#callback-form" class="fancybox-inline">Вызвать замерщика</a></div>
		 					</div>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
	 	</div>					 							 		
 	</div>
 <?php endwhile; ?>
<?php wp_reset_postdata(); ?> 
<div class="reviews">
	<div class="row flexed align-top">	
		<?php $review = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => -1 ) ); ?>
		 <?php while ( $review->have_posts() ) : $review->the_post(); ?>
		 	<div class="col-md-6">
		 		<div class="reviews__item text-center">
					<div class="reviews__item__author h2 text-center"><?php the_title(); ?></div>
					<div class="reviews__item__content mini-desc text-center"><?php the_content(); ?></div>
			 	</div>
		 	</div>		 		
		 <?php endwhile; ?>
		<?php wp_reset_postdata(); ?> 
	</div>
</div>
<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="reviews <?php echo $class; ?>">
	<div class="container">
		<div class="reviews__white-bg-block">		
			<div class="row">
				<div class="col-md-12">
					<div class="reviews__white-bg-block__slider-review slider-single-item">
						<?php $review = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => 4 ) ); ?>
						 <?php while ( $review->have_posts() ) : $review->the_post(); ?>
						 	<div class="reviews__white-bg-block__slider-review__review-item text-center">
								<div class="reviews__white-bg-block__slider-review__review-item__author h3"><?php the_title(); ?></div>
								<div class="reviews__white-bg-block__slider-review__review-item__content"><?php the_content(); ?></div>
						 	</div>	
						 <?php endwhile; ?>
						<?php wp_reset_postdata(); ?> 
					</div>
					<div class="reviews__white-bg-block__button-group text-center">
						<div class="reviews__white-bg-block__button-group__button btn calc_btn">							
							<a href="/otzyivyi-pokupateley/">Смотреть все</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
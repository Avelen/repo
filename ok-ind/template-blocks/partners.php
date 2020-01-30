<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="partners <?php echo $class; ?>">
	<div class="container">
		<div class="partners__white-bg-block">		
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="partners__white-bg-block__title h2 text-center">Партнеры</div>
				</div>
			</div>	
			<?php $partners = new WP_Query( array( 'post_type' => 'partners', 'posts_per_page' => 6, 'orderby' => 'date', 'order'  => 'ASC' ) ); ?>
			 <?php $i = 0; while ( $partners->have_posts() ) : $partners->the_post();  ?>
			 <?php $i++; if ($i == 1): ?>
				<div class="partners__white-bg-block__item">
					<div class="row">
						<div class="col-md-6 no-padding">
							<div class="partners__white-bg-block__item__image">
								<?php the_post_thumbnail('full'); ?>
							</div>
						</div>
						<div class="col-md-6 no-padding azure-bg">
							<div class="partners__white-bg-block__item__title h3"><?php the_title(); ?></div>
							<div class="partners__white-bg-block__item__description"><?php the_content(); ?></div>
						</div>
					</div>
				</div>
			 <?php else : ?>
			 	<div class="partners__white-bg-block__item">
					<div class="row">
				 		<div class="col-md-6 no-padding azure-bg">
							<div class="partners__white-bg-block__item__title h3"><?php the_title(); ?></div>
							<div class="partners__white-bg-block__item__description"><?php the_content(); ?></div>
						</div>
						<div class="col-md-6 no-padding">
							<div class="partners__white-bg-block__item__image">
								<?php the_post_thumbnail('full'); ?>
							</div>
						</div>						
					</div>						
				</div>
			 <?php $i = 0;  endif; ?>
			 <?php endwhile; ?>
			<?php wp_reset_postdata(); ?> 				
		</div>
	</div>
</section>
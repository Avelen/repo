<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="additionally <?php echo $class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="additionally__title h2 text-center black_text">Дополнительно</div>
				<div class="additionally__description mini-desc text-center">
					К основным характеристикам профильных систем REHAU относят толщину стеклопакета, наличие воздушных камер, системную глубину, звуко- и теплоизоляционный критерии.
				</div>				
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<?php 
			if(!is_front_page()): $id = get_field('dop_id');
			else : $id = '35';
			endif;

			 $dop = new WP_Query( array( 
									 	'post_type' => 'dop', 
									 	'posts_per_page' => -1,
									 	'tax_query' => array(	
									 		array(
												'taxonomy' => 'dopcat',
												'terms' => $id
											)
										) 
									 ) 
						);  
			?>
			<?php while ( $dop->have_posts() ) : $dop->the_post(); ?>
				<?php if (get_field('page_href')): ?>
					<div class="col-md-2 additionally__item text-center href" onclick="location.href = '<?php echo get_field('page_href'); ?>'; ">
						<div class="additionally__item__image">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="additionally__item__title"><?php the_title(); ?></div>
					</div>
				<?php else : ?>
					<div class="col-md-2 additionally__item text-center">
						<div class="additionally__item__image">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="additionally__item__title"><?php the_title(); ?></div>
					</div>
				<?php endif; ?>	
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<div class="projects">
	<?php $projects = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 4 ) ); ?>
	 <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
	 	<div class="projects__item">
	 		<div class="row flexed">
	 			<div class="col-md-6">
	 				<div class="projects__item__image">
		 			<?php the_post_thumbnail('slider_img'); ?>
			 		</div>
	 			</div>
	 			<div class="col-md-6">	 				
			 		<div class="projects__item__caption">
			 			<div class="projects__item__caption__title h3"><?php the_title(); ?></div>
			 			<div class="projects__item__caption__list">
			 				<ul class="projects__item__caption__description list-unstyled">
			 					<?php if (get_field('location')):?>
			 					<li><b>Место объекта:</b> <?php echo get_field('location'); ?></li>
			 					<?php endif; ?>
			 					<?php if (get_field('tasks')):?>
			 					<li><b>Задачи:</b> <?php echo get_field('tasks'); ?></li>
			 					<?php endif; ?>
			 					<?php if (get_field('materials')):?>
			 					<li><b>Материалы:</b> <?php echo get_field('materials'); ?></li>
			 					<?php endif; ?>
			 					<?php if (get_field('term')):?>
			 					<li><b>Сроки:</b> <?php echo get_field('term'); ?></li>
			 					<?php endif; ?>
			 				</ul>
			 			</div>
			 		</div>
	 			</div>
	 		</div>	 		
	 	</div>
	 <?php endwhile; ?>
	<?php wp_reset_postdata(); ?> 
</div>
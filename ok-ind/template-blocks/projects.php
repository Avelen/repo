<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="projects <?php echo $class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="projects__title h2 text-center">НАШИ РАБОТЫ</div>
				<div class="projects__slide-block slider-single-item">
					<?php $projects = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 4 ) ); ?>
					 <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
					 	<div class="projects__slide-block__item">
					 		<div class="projects__slide-block__item__image">
					 			<?php the_post_thumbnail('slider_img'); ?>
					 		</div>
					 		<div class="projects__slide-block__item__caption">
					 			<div class="projects__slide-block__item__caption__title h3 text-center"><?php the_title(); ?></div>
					 			<div class="projects__slide-block__item__caption__list">
					 				<ul class="projects__slide-block__item__caption__description list-unstyled">
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
					 <?php endwhile; ?>
					<?php wp_reset_postdata(); ?> 
				</div>
				<div class="projects__button-block text-center">
					<div class="projects__button-block__button btn calc_btn"><a href="/nashi-rabotyi/" class="white_text">Смотреть все</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
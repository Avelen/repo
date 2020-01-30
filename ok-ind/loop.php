<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage ok-ind
 */ 
?>

<?php if (have_posts()) : $i = 0; while (have_posts()) : the_post(); ?>
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
				<?php if (get_field('sales')): ?>
					<div class="archive__item__sales__title"><?php echo get_field('sales'); ?></div>
					<div class="archive__item__sales__button btn calc_btn"><a href="#callback-form" class="fancybox-inline">Вызвать замерщика</a></div>
				<?php endif; ?>
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
				<?php if (get_field('sales')): ?>
					<div class="archive__item__sales__title"><?php echo get_field('sales'); ?></div>
					<div class="archive__item__sales__button btn calc_btn"><a href="#callback-form" class="fancybox-inline">Вызвать замерщика</a></div>
				<?php endif; ?>
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
<?php endwhile;
else: echo '<p>Нет записей.</p>'; endif; ?>	 
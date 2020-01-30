<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="bottom-content <?php echo $class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Фото выполненных работ</h2>
				<br><br>
				<?php echo do_shortcode('[gallery columns="4" link="file" ids="1647,1645,1643,1634,1633,1632"]'); ?>
			</div>
		</div>
	</div>
</section>
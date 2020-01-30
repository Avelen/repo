<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="number <?php echo $class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="number__num num_300"><img src="/wp-content/themes/ok-ind/img/300.png"></div>
				<div class="number__text">окон В СУТКИ <br> ПРОИЗВОДИМ ЕЖЕДНЕВНО</div>
			</div>
			<div class="col-md-5">
				<div class="number__num num_87000"><img src="/wp-content/themes/ok-ind/img/8700.png"></div>
				<div class="number__text">окон УСТАНОВИЛИ В МОСКВЕ <br> И ОБЛАСТИ</div>
			</div>
			<div class="col-md-3">
				<div class="number__num num_10"><img src="/wp-content/themes/ok-ind/img/10.png"></div>
				<div class="number__text">лет лидерства на рынке <br> окон и дверей</div>
			</div>
		</div>
	</div>
</section>
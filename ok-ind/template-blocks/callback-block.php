<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="callback-block blue-bg <?php echo $class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>			
			<div class="col-md-8">
				<div class="callback-block__caption">
					<div class="callback-block__caption__title h2 white_text">Вызвать специалиста на замер</div>
					<div class="callback-block__caption__description white_text">Крупнейший современный производитель пластиковых окон, металлических дверей и ворот в России по инновационным технологиям</div>
				</div>				
			</div>
			<div class="col-md-3">
				<div class="callback-block__button btn calc_btn">
					<a href="#callback-form" class="fancybox-inline">РАСЧИТАТЬ СТОИМОСТЬ</a></div>
			</div>
		</div>
	</div>
</section>
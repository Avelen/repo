<?php 
if(!is_front_page()): $class = "children-page";
else : $class = "home-page";
endif; ?>

<section class="contact-form <?php echo $class; ?>">
	<div class="container">
		<div class="contact-form__absolute-text  white_text">ЛУЧШИЙ ПРОИЗВОДИТЕЛЬ В РОССИИ</div>
		<div class="contact-form__block">
			<div class="row">				
				<div class="col-md-1 hidden-xs"></div>
				<div class="col-md-6">
					<div class="contact-form__block__title white_text">ЗАКАЗАТЬ <br>БЕСПЛАТНЫЙ <br>ЗАМЕР</div>
					<div class="contact-form__block__description white_text">Мы вам перезвоним в близжайшие 10 мнут <br>и согласуем дату визита</div>
					<div class="contact-form__block__button btn calc_btn">
						<a href="#callback-form" class="fancybox-inline">Вызвать мастера</a></div>
				</div>
			</div>
		</div>		
	</div>
</section>
<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

	<section class="hero">
		<div class="container">
			<h1>магазин красивых автомобильных номеров премиум-класса</h1>
			<a href="#" class="btn hero__btn catalog_open">посмотреть каталог</a>
		</div>
	</section>

	<section class="work">
		<div class="container">

			<h2>Наши работы</h2>

			<div class="work__list">
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work1.png" alt="">
					<a href="<?php echo get_home_url(); ?>/nashi-raboty/" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work2.png" alt="">
					<a href="<?php echo get_home_url(); ?>/nashi-raboty/" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work3.png" alt="">
					<a href="<?php echo get_home_url(); ?>/nashi-raboty/" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work4.png" alt="">
					<a href="<?php echo get_home_url(); ?>/nashi-raboty/" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work5.png" alt="">
					<a href="<?php echo get_home_url(); ?>/nashi-raboty/" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work6.png" alt="">
					<a href="<?php echo get_home_url(); ?>/nashi-raboty/" class="btn">подробнее</a>
				</div>
			</div>

			<a href="<?php echo get_home_url(); ?>/distancionnyj-pereves/" class="work__new">
				<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/new.svg" alt=""> Новинка</h2>
				<div class="work__new_hr"></div>
				<div class="work__new_info">
					<h3>Услуга дистанционного <br>переоформления номера</h3>
					<p>Переоформим номер на вас из другого региона</p>
				</div>
			</a>

			<?php get_template_part( 'parts/contacts' ); ?>
		</div>
	</section>

<?php get_footer(); ?>
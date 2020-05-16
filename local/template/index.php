<?php
	/**
		* Template name: Главная
	*/
 ?>

<?php get_header(); ?>

	<section class="hero">
		<div class="container">
			<h1>магазин красивых автомобильных номеров премиум-класса</h1>
			<a href="#" class="btn hero__btn">посмотреть каталог</a>
		</div>
	</section>

	<section class="work">
		<div class="container">

			<h2>Наши работы</h2>

			<div class="work__list">
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work1.png" alt="">
					<a href="#" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work2.png" alt="">
					<a href="#" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work3.png" alt="">
					<a href="#" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work4.png" alt="">
					<a href="#" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work5.png" alt="">
					<a href="#" class="btn">подробнее</a>
				</div>
				<div class="work__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/work6.png" alt="">
					<a href="#" class="btn">подробнее</a>
				</div>
			</div>

			<div class="work__new">
				<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/new.svg" alt=""> Новинка</h2>
				<div class="work__new_hr"></div>
				<div class="work__new_info">
					<h3>Услуга дистационного перевеса</h3>
					<p>Переоформим номер на вас из другого региона</p>
				</div>
			</div>

			<div class="work__contacts">

				<div class="work__contacts_map">
					<?php the_field('map', 'option'); ?>
				</div>

				<div class="work__contacts_info">
					<h2>Контакты</h2>
					<ul>
						<li>
							<span>телефон:</span>
							<b><a href="tel:<?php the_field('tel_url', 'option'); ?>"><?php the_field('tel', 'option'); ?></a></b>
						</li>
						<li>
							<span>Email:</span>
							<b><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></b>
						</li>
						<li>
							<span>Social media:</span>
							<span class="header__soc">
								<a href="<?php the_field('vk', 'option'); ?>" target="_blank" class="header__soc_link header__soc_vk">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/vk.svg" alt="">
								</a>
								<a href="<?php the_field('telegram', 'option'); ?>" target="_blank" class="header__soc_link header__soc_telegram">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/telegram.svg" alt="">
								</a>
								<a href="<?php the_field('viber', 'option'); ?>" target="_blank" class="header__soc_link header__soc_viber">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/viber.svg" alt="">
								</a>
								<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="header__soc_link header__soc_whatsapp">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/whatsapp.svg" alt="">
								</a>
							</span>
						</li>
						<li>
							<span>адрес:</span>
							<b><?php the_field('place', 'option'); ?></b>
						</li>
					</ul>

					<p><?php the_field('time_work', 'option'); ?></p>

					<a href="#" class="work__contacts_btn btn message_open">Связаться с нами</a>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
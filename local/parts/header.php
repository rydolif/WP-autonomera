<header class="header">
		<div class="header__container">

			<a href="/" class="header__logo">auto<b>nomera</b></a>

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

			<nav class="header__nav nav">
				<?php 
					wp_nav_menu( array(
					'menu'=>'menu',
					'menu_class'=>'list',
					'theme_location'=>'menu',
					) );
				?>
				<div class="header__nav_soc header__soc">
					<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__soc_tel"><?php the_field('tel', 'option'); ?></a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank" class="header__soc_link header__soc_vk">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/vk.svg" alt="">
					</a>
					<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="header__soc_link header__soc_whatsapp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/whatsapp.svg" alt="">
					</a>
					<a href="<?php the_field('telegram', 'option'); ?>" target="_blank" class="header__soc_link header__soc_telegram">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/telegram.svg" alt="">
					</a>
					<a href="<?php the_field('viber', 'option'); ?>" target="_blank" class="header__soc_link header__soc_viber">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/viber.svg" alt="">
					</a>
				</div>
				<a href="#" class="header__nav_btn btn order_open">Запрос на поиск номера</a>
			</nav>

			<div class="header__soc">
				<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__soc_tel"><?php the_field('tel', 'option'); ?></a>
				<a href="<?php the_field('vk', 'option'); ?>" target="_blank" class="header__soc_link header__soc_vk">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/vk.svg" alt="">
				</a>
				<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="header__soc_link header__soc_whatsapp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/whatsapp.svg" alt="">
				</a>
				<a href="<?php the_field('telegram', 'option'); ?>" target="_blank" class="header__soc_link header__soc_telegram">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/telegram.svg" alt="">
				</a>
				<a href="<?php the_field('viber', 'option'); ?>" target="_blank" class="header__soc_link header__soc_viber">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/viber.svg" alt="">
				</a>
			</div>

			<a href="#" class="header__btn btn order_open">Запрос на поиск номера</a>

		</div>
	</header>
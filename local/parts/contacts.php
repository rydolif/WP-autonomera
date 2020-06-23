

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
					<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="header__soc_link header__soc_whatsapp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/whatsapp.svg" alt="">
					</a>
					<a href="<?php the_field('telegram', 'option'); ?>" target="_blank" class="header__soc_link header__soc_telegram">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/telegram.svg" alt="">
					</a>
					<a href="<?php the_field('viber', 'option'); ?>" target="_blank" class="header__soc_link header__soc_viber">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/viber.svg" alt="">
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


	<footer class="footer">
		<div class="footer__container container">
			
			<div class="footer__col">
				<a href="/" class="header__logo">auto<b>nomera</b></a>
				<p class="footer__copy"><?php the_field('copyright', 'option'); ?></p>
			</div>

			<div class="footer__col">
				<?php 
					wp_nav_menu( array(
					'menu'=>'footer__menu',
					'menu_class'=>'footer__nav',
					'theme_location'=>'footer__menu',
					) );
				?>
				<p class="footer__soc header__soc">
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
				</p>
			</div>

			<div class="footer__info footer__col">
				<p>
					<b><a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__soc_tel">
						<?php the_field('tel', 'option'); ?>
					</a></b>
				</p>
				<p><b><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></b></p>
				<p><b><?php the_field('place', 'option'); ?></b></p>
			</div>

		</div>
	</footer>
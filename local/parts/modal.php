
<div class="modal" id="message">
	<button class="modal__close message_close" type="button">
		<span></span>
		<span></span>
	</button>

	<div class="form">

		<h3>Свяжитесь с нами</h3>
		<p>
			мы свяжемся с вами в ближайшее время
		</p>

		<?php echo do_shortcode( '[caldera_form id="CF5ec2b70799f20"]' ); ?>

	</div>
</div>

<div class="modal" id="order">
	<button class="modal__close order_close" type="button">
		<span></span>
		<span></span>
	</button>

	<div class="form">

		<h3>отправить запрос <br>на поиск номерного знака</h3>
		<p>
			и мы свяжемся с вами в ближайшее время
		</p>

		<?php echo do_shortcode( '[caldera_form id="CF5ec2aeb9ce7c1"]' ); ?>

	</div>
</div>

<div class="modal modal--catalog" id="catalog">
	<button class="modal__close catalog_close" type="button">
		<span></span>
		<span></span>
	</button>

	<div class="modal--catalog__wrap">
		<ul>
			<?php
				$args = array(
				'post_type' => 'nomer',
				'posts_per_page' => -1,
				);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ): $query->the_post();
			?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php
				endwhile; wp_reset_postdata();
			?>
		</ul>
	</div>
</div>


<div class="modal" id="buy">
	<button class="modal__close buy_close" type="button">
		<span></span>
		<span></span>
	</button>

	<h3>Свяжитесь с нами <br> через соц. сети</h3>

	<div class="modal__soc header__soc">
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
	</div>

</div>
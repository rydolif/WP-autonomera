

<?php get_header(); ?>

	<section class="page--nomera page">
		<div class="container">

			<ul class="crums">
				<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
				<li><span>/</span></li>
				<li><a href="#" class="catalog_open">Каталог</a></li>
				<li><span>/</span></li>
				<li><span><?php the_title(); ?></span></li>
			</ul>

			<h2><?php the_title(); ?></h2>

			<div id="photo-gallery">
				<div class="row page--nomera__list">
					<?php
					if( have_rows('list') ): 
						$total = count(get_field('list'));
						$count = 0;
						$number = 8;
						while ( have_rows('list') ) : the_row(); ?>
								<div class="page--nomera__item">
									<img class="img-gallery" alt="img" src="<?php the_sub_field('img'); ?>" />
									<p class="page--nomera__item_name"><?php the_sub_field('oblasts'); ?></p>
									<p class="page--nomera__item_price"><b><?php the_sub_field('price'); ?> ₽</b></p>
									<p class="page--nomera__item_text">под ключ</p>
									<a href="#" class="btn buy_open">Купить</a>
								</div>
							<?php
							if ($count == $number) {
								// we've shown the number, break out of loop
								break;
							} ?>
						<?php $count++; endwhile;
					else : endif;
					?>
				</div>
				
				<a id="gallery-load-more" class="page--work__more" href="javascript: my_repeater_show();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/load.svg" alt="">
					<b>Загрузить еще</b>
				</a>
			</div>

		</div>
	</section>

	<script type="text/javascript">
				var my_repeater_field_post_id = <?php echo $post->ID; ?>;
				var my_repeater_field_offset = <?php echo $number + 1; ?>;
				var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field'); ?>';
				var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
				var my_repeater = true;
				
				function my_repeater_show() {
					
					// make ajax request
					jQuery.post(
						my_repeater_ajax_url, {
							// this is the AJAX action we set up in PHP
							'action': 'my_repeater_show',
							'post_id': my_repeater_field_post_id,
							'offset': my_repeater_field_offset,
							'nonce': my_repeater_field_nonce
						},
						function (json) {
							// add content to container
							// this ID must match the containter 
							// you want to append content to
							jQuery('#photo-gallery .row').append(json['content']);
							// update offset
							my_repeater_field_offset = json['offset'];
							// see if there is more, if not then hide the more link
							if (!json['more']) {
								// this ID must match the id of the show more link
								jQuery('#gallery-load-more').css('display', 'none');
							}
						},
						'json'
					);
				}
				
	</script>
	
	<section class="work">
		<div class="container">

			<?php get_template_part( 'parts/contacts' ); ?>

		</div>
	</section>

<?php get_footer(); ?>
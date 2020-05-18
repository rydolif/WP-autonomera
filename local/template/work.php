<?php
/* Template name: Роботы */
?>

<?php get_header(); ?>

	<section class="work page">
		<div class="container">

			<h2>Наши работы</h2>

			<div id="photo-gallery">
				<div class="row work__list">
					<?php
					if( have_rows('work') ): 
						$total = count(get_field('work'));
						$count = 0;
						$number = 8;
						while ( have_rows('work') ) : the_row(); ?>
								<a href="<?php the_sub_field('img'); ?>" data-fancybox="gallery" data-img="<?php the_sub_field('img'); ?>" class="page--work__item work__item">
									<img class="img-gallery" alt="img" src="<?php the_sub_field('img'); ?>" />
								</a>
							<?php
							if ($count == $number) {
								// we've shown the number, break out of loop
								break;
							} ?>
						<?php $count++; endwhile;
					else : endif;
					?>
				</div>
				<a id="gallery-load-more" class="page--work__more" href="javascript: my_repeater_show_more();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/load.svg" alt="">
				<b>Посмотреть остальные</b>
			</a>
			</div>

			<script type="text/javascript">
				var my_repeater_field_post_id = <?php echo $post->ID; ?>;
				var my_repeater_field_offset = <?php echo $number + 1; ?>;
				var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
				var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
				var my_repeater_more = true;
				
				function my_repeater_show_more() {
					
					// make ajax request
					jQuery.post(
						my_repeater_ajax_url, {
							// this is the AJAX action we set up in PHP
							'action': 'my_repeater_show_more',
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

		</div>
	</section>

<?php get_footer(); ?>

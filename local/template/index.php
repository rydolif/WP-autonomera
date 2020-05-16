<?php
	/**
		* Template name: Главная
	*/
 ?>

<?php get_header(); ?>

	<section class="hero">
		<div class="hero__container container">
			
			<h1><?php the_title(); ?></h1>
			<span class="click"><a href="#filter" class="btn btn--hero">выбрать продукцию</a></span>
			<div class="hero__video">
				<a data-fancybox href="<?php the_field('video'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__play.png" alt="" class="hero__video_play"></a>
				<p>Узнай <b>всё о нас</b> <br>за 1 минуту</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__arrow.png" alt="" class="hero__video_arrow">
			</div>
		</div>
	</section>

	<section class="main">
		<div class="main__container container">
			
			<?php get_template_part( 'parts/filter' ); ?>

			<div class="main__content">

<!-- 				<?php get_template_part( 'parts/search' ); ?>
 -->
<!-- 				<div class="products__header">
					<h2>Популярное</h2>
					<div class="products__prev"></div>
					<div class="products__next"></div>
				</div> -->

				<div class="products__slider swiper-container">
					<div class="swiper-wrapper">

						<?php
							$args = array(
							'post_type' => 'tovar',
							'posts_per_page' => -1,
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

							$post_id = get_the_ID();

						?>

							<div class="products__slide swiper-slide">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								<h3><?php the_title(); ?></h3>
								<p class="products__number"><?php the_field('number'); ?></p>
								<p class="products__price">
									<?php if( get_field('price_no-sale') ): ?>
										<span class="products__price--no-sale">
											<?php the_field('price_no-sale'); ?>
										</span>
									<?php endif; ?>
									<?php if( get_field('price_sale') ): ?>
										<b class="products__price--sale">
											<?php the_field('price_sale'); ?>
										</b>
									<?php endif; ?>
									<?php if( get_field('price') ): ?>
										<b class="products__price">
											<?php the_field('price'); ?>
										</b>
									<?php endif; ?>
								</p>
								<span class="products__text">Цена за штуку</span>
								<a href="#" data-title="<?php the_title(); ?>" class="btn btn--products btn--hero products--<?php echo $post_id; ?>_open">Купить</a>
							</div>

							<div class="modal" id="products--<?php echo $post_id; ?>">

								<button class="modal__close products--<?php echo $post_id; ?>_close" type="button">
									<span></span>
									<span></span>
								</button>
								<p class="modal__title">Заказать <br><?php echo $title; ?></p>

								<?php echo do_shortcode('[contact-form-7 id="270" title="Заказать товар"]'); ?>

							</div>

						<?php
							endwhile; wp_reset_postdata();
						?>
					</div>
					<div class="products__pagination swiper-pagination"></div>

				</div>

				<?php
					if( have_rows('content') ):

					    // Loop through rows.
					    while ( have_rows('content') ) : the_row();

					        if( get_row_layout() == 'title' ):
					            $title = get_sub_field('title');
					        	?> 
					        	<h2><?php echo $title; ?></h2>
					        <?php  

					        elseif( get_row_layout() == 'text' ): 
					            $text = get_sub_field('text');
					        	?> 
								<div class="main__content_text">
									<?php echo $text; ?>
								</div>
					        <?php

					        elseif( get_row_layout() == 'list-number' ): 
					       		?> 

								<?php if( have_rows('list') ): ?>
									<div class="main__content_list">
									<?php while( have_rows('list') ): the_row(); 
										$number = get_sub_field('number');
										$text = get_sub_field('text');
										?>

										<div>
											<b><?php echo $number; ?></b>
											<span><?php echo $text; ?></span>
										</div>

									<?php endwhile; ?>
									</div>
								<?php endif; ?>
					        <?php

					        endif;

					    // End loop.
					    endwhile;

					// No value.
					else :
					// Do something...
					endif;
				?>

				<div class="main__content_icon">
					<div>
						<svg viewBox="0 0 463.55 463.34"><path d="M445.75,256.35l-179.9-180a50.17,50.17,0,0,0-35.6-14.8c-1.1,0-2.2,0-3.3.1l-130.1,8.6a28.39,28.39,0,0,0-26.4,26.4l-3.1,46.2a89.66,89.66,0,0,1-18.6-14.3c-13.9-13.9-22.5-31.2-24.3-48.8-1.7-16.7,3.1-31.6,13.5-42,22.1-22.1,62.8-17.2,90.9,10.8a12,12,0,0,0,17-17c-37.6-37.3-93.6-42.1-125-10.7C5.25,36.45-1.95,58.15.45,82.25c2.3,23.1,13.4,45.6,31.2,63.4a111.67,111.67,0,0,0,33.9,23.3l-3.8,57.9a50.29,50.29,0,0,0,14.7,39l180,180a59.74,59.74,0,0,0,42.6,17.6h0a60.16,60.16,0,0,0,42.6-17.6L446,341.55a60.11,60.11,0,0,0-.2-85.2Zm-16.9,68.1-104.4,104.4a36,36,0,0,1-25.6,10.6h0a36,36,0,0,1-25.6-10.6l-180-180a26.35,26.35,0,0,1-7.7-20.4l3.5-52.4c2,.3,4,.6,6,.8,3,.3,6,.5,8.9.5,20.5,0,38.8-7.2,52.4-20.8a12,12,0,0,0-17-17c-10.4,10.4-25.3,15.2-42,13.5-2.3-.2-4.5-.6-6.7-1l3.6-53.6a4.41,4.41,0,0,1,4.1-4.1l130.1-8.6c.6,0,1.2-.1,1.8-.1a26.57,26.57,0,0,1,18.7,7.7l179.9,179.9a36.21,36.21,0,0,1,0,51.2Z" transform="translate(0 -0.11)"/></svg>
						<p>лучшие цены</p>
					</div>
					<div>
						<svg viewBox="0 0 486.03 445.8"><path d="M420.73,85.41a222.86,222.86,0,0,0-317.2,2,12,12,0,0,0,17.2,16.8,197.41,197.41,0,0,1,142.4-60C372.83,44.11,462,133.31,462,243s-89.2,198.9-198.9,198.9S64.23,352.71,64.23,243v-2.5L84,260.31a12,12,0,0,0,8.5,3.5,12.21,12.21,0,0,0,8.5-3.5,12,12,0,0,0,0-17L60.83,203a12,12,0,0,0-17,0l-40.3,40.3a12,12,0,0,0,17,17l19.8-19.8V243a222.88,222.88,0,0,0,380.5,157.6,223,223,0,0,0-.1-315.2Z" transform="translate(0 -20.11)"/><path d="M326.92,161.91l-147.4,147.3a12,12,0,0,0,8.5,20.5,12.21,12.21,0,0,0,8.5-3.5l147.4-147.4a12,12,0,1,0-17-16.9Z" transform="translate(0 -20.11)"/><path d="M288.33,261.11a43,43,0,1,0,30.4-12.6A43,43,0,0,0,288.33,261.11Zm43.8,43.8a18.66,18.66,0,0,1-13.4,5.5,18.9,18.9,0,0,1-13.4-32.3,18.66,18.66,0,0,1,13.4-5.5,18.9,18.9,0,0,1,13.4,32.3Z" transform="translate(0 -20.11)"/><path d="M207.93,151.21a43,43,0,1,0,30.4,12.6A42.74,42.74,0,0,0,207.93,151.21Zm13.4,56.4a18.66,18.66,0,0,1-13.4,5.5,19.08,19.08,0,0,1-13.4-5.5,18.66,18.66,0,0,1-5.5-13.4,19.08,19.08,0,0,1,5.5-13.4,18.66,18.66,0,0,1,13.4-5.5,19.08,19.08,0,0,1,13.4,5.5,19.07,19.07,0,0,1,0,26.8Z" transform="translate(0 -20.11)"/></svg>
						<p>постоянные акции и скидки</p>
					</div>
					<div>
						<svg viewBox="0 0 436.2 473.8"><path d="M454.8,111.7a12.42,12.42,0,0,0-1.2-5.3,11.59,11.59,0,0,0-8.1-6.4L241.8,1.2a12.08,12.08,0,0,0-10.5,0L25.6,100.9a12,12,0,0,0-6.8,10.4V362a11.92,11.92,0,0,0,6.8,10.8l205.7,99.7c.1,0,.1,0,.2.1a3.55,3.55,0,0,1,.9.4c.1,0,.2.1.4.1l.9.3c.1,0,.2.1.3.1.3.1.7.1,1,.2h.3c.4,0,.9.1,1.3.1a5.7,5.7,0,0,0,1.3-.1h.3a3.55,3.55,0,0,0,1-.2c.1,0,.2-.1.3-.1l.9-.3c.1,0,.2-.1.4-.1a3.55,3.55,0,0,0,.9-.4c.1,0,.1,0,.2-.1l206.3-100a12.09,12.09,0,0,0,6.8-10.8V112C454.8,111.9,454.8,111.8,454.8,111.7ZM236.5,25.3l178.4,86.5-65.7,31.9L170.8,57.2Zm0,173L58.1,111.8l85.2-41.3L321.7,157ZM42.8,131.1l181.7,88.1V442.5L42.8,354.4ZM248.5,442.5V219.2l85.3-41.4v58.4a12,12,0,1,0,24,0V166.1l73-35.4V354Z" transform="translate(-18.8 0)"/></svg>
						<p>Резервирование и оперативная обработка заказа</p>
					</div>
					<div>
						<svg viewBox="0 0 481 417.9"><path d="M372.3,143.75c62,0,108.7-24.1,108.7-56.1s-46.7-56.1-108.7-56.1-108.7,24.1-108.7,56.1S310.3,143.75,372.3,143.75Zm0-88.1c51.7,0,84.7,19,84.7,32.1s-33,32.1-84.7,32.1-84.7-19-84.7-32.1S320.6,55.65,372.3,55.65Z" transform="translate(0 -31.55)"/><path d="M471.9,144.85a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,1,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12.07,12.07,0,0,0,471.9,144.85Z" transform="translate(0 -31.55)"/><path d="M471.9,206.05a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,1,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12.07,12.07,0,0,0,471.9,206.05Z" transform="translate(0 -31.55)"/><path d="M471.9,267.15a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,1,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12.07,12.07,0,0,0,471.9,267.15Z" transform="translate(0 -31.55)"/><path d="M471.9,328.35a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,1,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12,12,0,0,0,471.9,328.35Z" transform="translate(0 -31.55)"/><path d="M471.9,389.45a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,1,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12.07,12.07,0,0,0,471.9,389.45Z" transform="translate(0 -31.55)"/><path d="M208.2,267.15a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,0,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12.07,12.07,0,0,0,208.2,267.15Z" transform="translate(0 -31.55)"/><path d="M208.2,328.35a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,0,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12,12,0,0,0,208.2,328.35Z" transform="translate(0 -31.55)"/><path d="M208.2,389.45a12,12,0,0,0-15.4,7.1c-5.1,13.9-38.7,28.9-84.1,28.9-44.2,0-77.3-14.2-83.7-27.9a12,12,0,0,0-21.8,10.2c11.7,25,54.1,41.7,105.5,41.7,24.5,0,48.3-4,67.2-11.4,20.8-8.1,34.5-19.6,39.5-33.3A12.07,12.07,0,0,0,208.2,389.45Z" transform="translate(0 -31.55)"/><path d="M108.7,153.85C46.7,153.85,0,178,0,210s46.7,56.1,108.7,56.1S217.4,242,217.4,210,170.7,153.85,108.7,153.85Zm0,88.2c-51.7,0-84.7-19-84.7-32.1s33-32.1,84.7-32.1,84.7,19,84.7,32.1S160.4,242.05,108.7,242.05Z" transform="translate(0 -31.55)"/></svg>
						<p>Отстрочка платежа</p>
					</div>
					<div>
						<svg x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M418.2,443.4c-25,0-46.7-17.7-51.6-42.2l-1-4.9h-27.8l-0.4,0.1c-0.5,0.1-1.1,0.1-1.5,0.1H154.5l-1,4.9c-5,24.3-26.8,42-51.6,42s-46.6-17.7-51.6-42l-1-4.9h-40c-5.1,0-9.2-4.1-9.2-9.2V76.8c0-5.1,4.1-9.2,9.2-9.2h326.7c5.1,0,9.2,4.1,9.2,9.2v68.5l5.6,0.5c35.9,3.2,65.9,22.3,84.6,53.6l31.9,53.5l3.4,0c22.9,0.3,41.4,19.1,41.4,42v92.2c0,5.1-4.1,9.2-9.2,9.2h-32l-1,4.9C464.9,425.7,443.2,443.4,418.2,443.4zM418.3,356.4c-18.9,0-34.3,15.4-34.3,34.3s15.4,34.3,34.3,34.3c18.9,0,34.3-15.4,34.3-34.3S437.2,356.4,418.3,356.4z M101.9,356.4c-18.9,0-34.3,15.4-34.3,34.3	S83,425,101.9,425s34.3-15.4,34.3-34.3S120.8,356.4,101.9,356.4z M101.9,337.9c22.6,0,42.7,14.5,50,36l1.4,4.2h173.4V86H18.4v292h32.1l1.4-4.2C59.2,352.4,79.3,337.9,101.9,337.9z M418.3,337.9c22.6,0,42.6,14.4,49.9,35.8l1.4,4.2h24v-82.9	c0-13-10.6-23.6-23.6-23.6h-76.8c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2h52.5l-26.3-44.1c-15.1-25.3-39-41-67.4-44.3l-6.8-0.8	v214.2H367l1.4-4.2C375.7,352.3,395.7,337.9,418.3,337.9z"/></svg>

						<p>Бесплатная доставка до места погрузкиа</p>
					</div>
				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>
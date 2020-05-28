<?php get_header(); ?>

	<section class="article page--nomera page">
		<div class="container">

			<ul class="crums">
				<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
				<li><span>/</span></li>
				<li><span><?php the_title(); ?></span></li>
			</ul>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>

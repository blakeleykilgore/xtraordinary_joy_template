<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<section>
		<?php if (have_posts()) :
			/* OUR DATA CONTEXT IS DEFINED 	*/
			while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content();
			endwhile;
		endif; ?>
	</section>
    <section>
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>

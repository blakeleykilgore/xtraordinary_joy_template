<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<main>
		<h2 class="display_none">Xtraordinary Joy Donate Page</h2>
		<section>
	        <?php dynamic_sidebar('donate-banner'); ?>
	    </section>
		<section>
			<?php if (have_posts()) :
				/* OUR DATA CONTEXT IS DEFINED 	*/
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif; ?>
		</section>
	</main>
<?php get_footer(); ?>

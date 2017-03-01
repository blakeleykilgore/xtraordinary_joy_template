<?php /* Template Name: Event Page */ ?>
<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<main>
		<h2 class="display_none">Xtraordinary Joy Events Page</h2>
		<section>
	        <?php dynamic_sidebar('events-banner'); ?>
	    </section>
		<section>
	        <?php dynamic_sidebar('events-page-upcoming-events'); ?>
	    </section>
	</main>
<?php get_footer(); ?>

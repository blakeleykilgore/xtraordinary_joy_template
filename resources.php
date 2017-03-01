<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<main>
		<h2 class="display_none">Xtraordinary Joy Resources Page</h2>
		<section>
	        <?php dynamic_sidebar('resources-banner'); ?>
	    </section>
	</main>
<?php get_footer(); ?>

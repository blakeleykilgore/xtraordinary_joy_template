<?php /* Template Name: Donate Page */ ?>
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
	</main>
<?php get_footer(); ?>

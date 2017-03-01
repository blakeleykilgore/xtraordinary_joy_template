<?php /* Template Name: Volunteer Page */ ?>
<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<main>
		<h2 class="display_none">Xtraordinary Joy Volunteer Page</h2>
		<section>
	        <?php dynamic_sidebar('volunteer-banner'); ?>
	    </section>
		<section>
	        <?php dynamic_sidebar('volunteer-form'); ?>
	    </section>
	</main>
<?php get_footer(); ?>

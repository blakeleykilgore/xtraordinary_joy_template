<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
	<nav>
		<h2 class="display_none">Navigation</h2>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<main>
		<h2 class="display_none">Contact Page</h2>
		<section>
	        <?php dynamic_sidebar('contact-widget1'); ?>
	    </section>
		<section>
	        <?php dynamic_sidebar('contact-widget2'); ?>
	    </section>
		<section>
	        <?php dynamic_sidebar('contact-widget3'); ?>
	    </section>
	</main>
<?php get_footer(); ?>

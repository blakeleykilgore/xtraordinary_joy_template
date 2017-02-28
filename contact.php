<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<section>
        <?php dynamic_sidebar('contact-widget1'); ?>
    </section>
	<section>
        <?php dynamic_sidebar('contact-widget2'); ?>
    </section>
	<section>
        <?php dynamic_sidebar('contact-widget3'); ?>
    </section>
<?php get_footer(); ?>

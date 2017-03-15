<?php /* Template Name: Event Page */ ?>
<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
</div>
	<main>
		<h2 class="display_none">Xtraordinary Joy Events Page</h2>
		<section class="row events_banner">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('events-banner'); ?>
		</div>
	    </section>
		<section class="row">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('events-page-upcoming-events'); ?>
			</div>
	    </section>
	</main>
<?php get_footer(); ?>

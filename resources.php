<?php /* Template Name: Resources */ ?>
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
		<h2 class="display_none">Xtraordinary Joy Resources Page</h2>
		<section class="row">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('resources-banner'); ?>
			</div>
	    </section>
	</main>
<?php get_footer(); ?>

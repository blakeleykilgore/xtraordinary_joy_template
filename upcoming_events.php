<?php /* Template Name: Event Page */ ?>
<?php get_header(); ?>
	<header class="three columns pages_header">
		<a href="http://www.blakeleykilgore.com/xtraordinaryjoy"><img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/02/web_logo.png"></a>
		<h1 class="display_none"><?php bloginfo('name'); ?></h1>
		<p class="display_none"><?php bloginfo('description'); ?></p>
	</header>
	<nav class="pages_menu">
		<?php
			wp_nav_menu(array(
				'menu' => 'index_menu'
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

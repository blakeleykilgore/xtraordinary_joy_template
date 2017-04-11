<?php /* Template Name: Volunteer Page */ ?>
<?php get_header(); ?>
	<header class="three columns pages_header">
		<a href="http://www.blakeleykilgore.com/xtraordinaryjoy"><img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/02/web_logo.png"></a>
		<h1 class="display_none"><?php bloginfo('name'); ?></h1>
		<p class="display_none"><?php bloginfo('description'); ?></p>
	</header>
	<nav class="pages_menu">
		<h2 class="hidden">Navigation</h2>
		<?php
			wp_nav_menu(array(
				'menu' => 'index_menu'
			));
		?>
	</nav>
</div>
	<main>
		<h2 class="display_none">Xtraordinary Joy Volunteer Page</h2>
		<section class="row">
            <div class="twelve columns">
               <?php dynamic_sidebar('volunteer-banner'); ?>
            </div>
	    </section>
		<section class="row">
            <div class="twelve columns">
					<h3 class="hidden">Sign up form</h3>
	               <?php dynamic_sidebar('volunteer-form'); ?>
            </div>
	    </section>
	</main>
<?php get_footer(); ?>

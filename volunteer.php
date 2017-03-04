<?php /* Template Name: Volunteer Page */ ?>
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
		<h2 class="display_none">Xtraordinary Joy Volunteer Page</h2>
		<section class="row">
            <div class="twelve columns">
               <?php dynamic_sidebar('volunteer-banner'); ?>
            </div>
	    </section>

		<section class="row">
            <div class="twelve columns">
	               <?php dynamic_sidebar('volunteer-form'); ?>
            </div>
	    </section>
	</main>
<?php get_footer(); ?>

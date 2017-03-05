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
</div>
	<main>
		<h2 class="display_none">Contact Page</h2>
		<section class="row">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('contact-banner'); ?>
			</div>
	    </section>
		<section class="row">
			<div class="twelve columns">
				<?php dynamic_sidebar('contact-info'); ?>
			</div>
	    </section>
		<section class="row">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('contact-social-info'); ?>
			</div>
	    </section>
		<section class="row">
			<div class="twelve columns">
				<?php if (have_posts()) :
					/* OUR DATA CONTEXT IS DEFINED 	*/
					while (have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content();
					endwhile;
				endif; ?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>

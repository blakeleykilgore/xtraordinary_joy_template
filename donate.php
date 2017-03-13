<?php /* Template Name: Donate Page */ ?>
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
		<h2 class="display_none">Xtraordinary Joy Donate Page</h2>
		<section class="row">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('donate-banner'); ?>
			</div>
	    </section>
		<section class="row">
			<div class="twelve columns" id="fundraising-content">
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

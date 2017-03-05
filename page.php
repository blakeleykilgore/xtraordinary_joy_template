<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
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
    <section class="row">
		<div class="twelve columns">
        	<?php get_sidebar(); ?>
		</div>
    </section>
<?php get_footer(); ?>

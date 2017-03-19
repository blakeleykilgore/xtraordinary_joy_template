<?php /* Template Name: Spotlight Child Page */ ?>
<?php get_header(); ?>
	<header class="three columns pages_header">
		<img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/02/web_logo.png">
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
		<h2 class="display_none">Faces of Xq27.3-q28 DELETION</h2>
		<section class="row faces_single">
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
		<a href="http://www.blakeleykilgore.com/xtraordinaryjoy/resources/" class="learn_more_button">Learn more about Xq27.3-q28 DELETION</a>
	</main>
<?php get_footer(); ?>

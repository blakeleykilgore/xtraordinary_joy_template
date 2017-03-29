<?php /* Template Name: Thank-you */ ?>
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
	<main class="thank-you-page-content">
		<h2 class="display_none">Xtraordinary Joy Thank You Page</h2>
		<section class="thank-you-content">
			<?php if (have_posts()) :
				/* OUR DATA CONTEXT IS DEFINED 	*/
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif; ?>
		</section>
	</main>
<?php get_footer(); ?>

<?php /* Template Name: Partner Page */ ?>
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
		<h2 class="display_none">Xtraordinary Joy Partner Page</h2>
		<section class="row">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('partner-banner'); ?>
			</div>
	    </section>
		<section>
			<div class="row">
				<div class="twelve columns">
					<h3 id="sponsor_package_title">Sponsorship Packages</h2>
				</div>
			</div>
			<div class="row" id="package_top">
				<div class="six columns" id="xtreme">
					<?php
						$post_id = 75;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo $title;
						echo $queried_post->post_content;
					?>
				</div>
				<div class="six columns" id="xcaliber">
					<?php
						$post_id = 79;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo $title;
						echo $queried_post->post_content;
					?>
				</div>
			</div>
			<div class="row">
				<div class="six columns" id="xclusive">
					<?php
						$post_id = 83;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo $title;
						echo $queried_post->post_content;
					?>
				</div>
				<div class="six columns" id="xcellence">
					<?php
						$post_id = 81;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo $title;
						echo $queried_post->post_content;
					?>
				</div>
			</div>
		</section>
		<section class="row">
			<div class="twelve columns">
				<h3 class="hidden">Our Xtraordinary Sponsors</h3>
	        	<?php dynamic_sidebar('sponsors-slider'); ?>
			</div>
	    </section>
		<section class="row">
			<div class="twelve columns" id="view_events">
		        <h3><a href="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/sponsorshipform.pdf" download>Download Our Sponsorship Form</a></h3>
			</div>
	    </section>
	</main>
<?php get_footer(); ?>

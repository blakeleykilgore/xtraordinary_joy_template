<?php /* Template Name: Partner Page */ ?>
<?php get_header(); ?>
		<nav class="nine columns">
			<h2 class="display_none">Navigation</h2>
			<?php
				wp_nav_menu(array(
					'menu' => 'pages_menu'
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
					<h3>Sponsorship Packages</h2>
				</div>
			</div>
			<div class="row">
				<div class="six columns">
					<?php
						$post_id = 75;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo $title;
						echo $queried_post->post_content;
					?>
				</div>
				<div class="six columns">
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
				<div class="six columns">
					<?php
						$post_id = 83;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo $title;
						echo $queried_post->post_content;
					?>
				</div>
				<div class="six columns">
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
		        <h3><a href="http://www.blakeleykilgore.com/xtraordinaryjoy/upcoming_events">View Upcoming Events</a></h3>
			</div>
	    </section>
		<section class="row">
			<div class="twelve columns">
	        	<?php dynamic_sidebar('sponsors-slider'); ?>
			</div>
	    </section>
	</main>
<?php get_footer(); ?>

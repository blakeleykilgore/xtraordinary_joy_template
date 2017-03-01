<?php /* Template Name: Partner Page */ ?>
<?php get_header(); ?>
	<nav>
		<h2 class="display_none">Navigation</h2>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<main>
		<h2 class="display_none">Xtraordinary Joy Partner Page</h2>
		<section>
	        <?php dynamic_sidebar('partner-banner'); ?>
	    </section>
		<section>
			<h3>Sponsorship Packages</h2>
			<div>
				<?php
					$post_id = 75;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					echo $title;
					echo $queried_post->post_content;
				?>
			</div>
			<div>
				<?php
					$post_id = 79;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					echo $title;
					echo $queried_post->post_content;
				?>
			</div>
			<div>
				<?php
					$post_id = 83;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					echo $title;
					echo $queried_post->post_content;
				?>
			</div>
			<div>
				<?php
					$post_id = 81;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					echo $title;
					echo $queried_post->post_content;
				?>
			</div>
		</section>
		<section>
	        <?php dynamic_sidebar('partner-upcoming-events'); ?>
	    </section>
		<section>
	        <h3>Slick.js will go here</h2>
	    </section>
	</main>
<?php get_footer(); ?>

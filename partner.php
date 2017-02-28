<?php /* Template Name: Partner Page */ ?>
<?php get_header(); ?>
	<nav>
		<?php
			wp_nav_menu(array(
				'menu' => 'pages_menu'
			));
		?>
	</nav>
	<section>
        <?php dynamic_sidebar('partner-widget1'); ?>
    </section>
	<section>
		<h2>Sponsorship Packages</h2>
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

<?php get_footer(); ?>

<?php /* Template Name: Contact Page */ ?>
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
            <div class="twelve columns" id="follow-us-container">
                <img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/logo-icon-only-tilted.png" alt="Follow Us" title="Follow Us" id="follow_icon">
	        	<?php dynamic_sidebar('contact-social-info'); ?>
				<div class="social-links">
					<a href="https://www.facebook.com/xtraordinaryjoyinc/" target="_blank"><img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/facebook.png" alt="Facebook" title="Facebook"></a>
					<a href="https://twitter.com/XtraordinaryJoy" target="_blank"><img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/twitter.png" alt="Twitter" title="Twitter"></a>
					<a href="https://www.instagram.com/xtraordinary.joy/" target="_blank"><img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/instagram.png" alt="Instagram" title="Instagram"></a>
				</div>
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

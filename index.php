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
        <h2 class="display_none">Xtraordinary Joy Homepage</h2>
        <section class="row">
            <div class="twelve columns">
                <?php dynamic_sidebar('homepage-banner'); ?>
            </div>
        </section>
        <section class="row">
            <?php dynamic_sidebar('homepage-mission-statement'); ?>
        </section>
        <section class="row icon_links">
            <div class="four columns">
				<h3 class="hidden">Ways to Help</h3>
                <a href="http://www.blakeleykilgore.com/xtraordinaryjoy/campaigns/donate">Donate</a>
            </div>
            <div class="four columns">
                <a href="http://www.blakeleykilgore.com/xtraordinaryjoy/volunteer">Get Involved</a>
            </div>
            <div class="four columns">
                <a href="http://www.blakeleykilgore.com/xtraordinaryjoy/resources">Resources</a>
            </div>
        </section>
        <section class="row our_story">
            <div class="five columns homepage_our_story_image">
                <img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/moriah_profile-2.png">
            </div>
            <div class="seven columns">
                <?php dynamic_sidebar('homepage-our-story'); ?>
            </div>
        </section>
        <section class="row our_fundraising">
            <div class="two columns">
                <img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/donations_x_icon.png" alt="Donations Raised" title="Donations Raised" />
            </div>
            <div class="six columns">
                <?php echo do_shortcode("[campaigns]"); ?>
                <a href="http://www.blakeleykilgore.com/xtraordinaryjoy/campaigns/donate">Donate</a>
            </div>
            <div class="four columns">
                <?php dynamic_sidebar('homepage-money-raised'); ?>
            </div>
        </section>
        <section class="row">
            <?php dynamic_sidebar('homepage-upcoming-events'); ?>
        </section>
        <section class="row">
            <div class="homepage_faces">
                <h3>Faces of Xq27.3-q28 DELETION</h3>
                <?php query_posts('cat=10'); ?>
                <?php if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                    <div class="face_item">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>

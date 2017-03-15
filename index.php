<?php get_header(); ?>
        <header class="three columns">
            <img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/02/web_logo.png">
            <h1 class="display_none"><?php bloginfo('name'); ?></h1>
            <p class="display_none"><?php bloginfo('description'); ?></p>
        </header>
        <nav class="nine columns">
            <h2 class="display_none">Navigation</h2>
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
                <a href="http://www.blakeleykilgore.com/xtraordinaryjoy/donate">Donate</a>
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
            <?php dynamic_sidebar('homepage-faces'); ?>
        </section>
<?php get_footer(); ?>

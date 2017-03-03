<?php get_header(); ?>
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
                <img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/moriah_profile.png">
            </div>
            <div class="seven columns">
                <?php dynamic_sidebar('homepage-our-story'); ?>
            </div>
        </section>
        <section class="row">
            <div class="three columns">
                <img src="http://www.blakeleykilgore.com/xtraordinaryjoy/wp-content/uploads/2017/03/donations_x_icon.png" alt="Donations Raised" title="Donations Raised" />
            </div>
            <div class="six columns">
                <?php echo do_shortcode("[campaigns]"); ?>
                <a href="http://www.blakeleykilgore.com/xtraordinaryjoy/campaigns/donate">Donate</a>
            </div>
            <div class="three columns">
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

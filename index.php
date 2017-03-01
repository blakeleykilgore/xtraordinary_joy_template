<?php get_header(); ?>
    <nav>
        <h2 class="display_none">Navigation</h2>
        <?php
            wp_nav_menu(array(
                'menu' => 'index_menu'
            ));
        ?>
    </nav>
    <main>
        <h2 class="display_none">Xtraordinary Joy Homepage</h2>
        <section>
            <?php dynamic_sidebar('homepage-banner'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('homepage-mission-statement'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('homepage-icon-links'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('homepage-our-story'); ?>
        </section>
        <section>
            <?php echo do_shortcode("[campaigns]"); ?>
            <a href="http://www.blakeleykilgore.com/xtraordinaryjoy/campaigns/donate">Donate</a>
            <?php dynamic_sidebar('homepage-money-raised'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('homepage-upcoming-events'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('homepage-faces'); ?>
        </section>
<?php get_footer(); ?>

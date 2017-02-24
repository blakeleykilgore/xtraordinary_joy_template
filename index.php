<?php get_header(); ?>
    <nav>
        <?php
            wp_nav_menu(array(
                'menu' => 'index_menu'
            ));
        ?>
    </nav>
    <section>
        <?php dynamic_sidebar('homepage-widget1'); ?>
    </section>
    <section>
        <?php dynamic_sidebar('homepage-widget2'); ?>
    </section>
    <section>
        <?php dynamic_sidebar('homepage-widget3'); ?>
    </section>
    <section>
        <?php dynamic_sidebar('homepage-widget4'); ?>
    </section>
    <section>
        <?php echo show_olimometer(olimometer_id,olimometer_css);?>
    </section>
<?php get_footer(); ?>

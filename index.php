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
            <h3>Our Fundraising</h3>
            <?php dynamic_sidebar('homepage-widget5'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('homepage-widget6'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('homepage-widget7'); ?>
        </section>
<?php get_footer(); ?>

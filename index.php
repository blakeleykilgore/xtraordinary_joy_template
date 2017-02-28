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
        <h2>Our Fundraising</h2>
        <article>
            <?php dynamic_sidebar('homepage-widget5'); ?>
        </article>
    </section>
    <section>
        <?php dynamic_sidebar('homepage-widget6'); ?>
    </section>
    <section>
        <?php dynamic_sidebar('homepage-widget7'); ?>
    </section>
<?php get_footer(); ?>

<?php get_header(); ?>
    <section>
        <?php
			if ( have_posts() ) {
			    while ( have_posts() ) {
			        the_post();
			    } // end while
			} // end if
		?>
    </section>
<?php get_footer(); ?>

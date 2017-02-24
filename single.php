<?php get_header(); ?>
	<section>
        <?php
            if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif;
        ?>
	</section>
<?php get_footer(); ?>

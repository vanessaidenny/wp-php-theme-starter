<?php get_header(); ?>

    <!-- WP loop to fetch post data -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Data that belongs to the page has to go inside the WP loop -->
            <!-- Displays page title -->
            <h3><?php the_title(); ?></h3>

            <!-- Displays page content -->
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
<?php get_footer(); ?>
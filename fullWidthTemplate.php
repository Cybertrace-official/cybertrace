<?php

// Template Name: Full Width

?>

<?php get_header(); ?>


    <?php if (have_posts()) :

        $hide_title = true;
    ?>

        <?php while (have_posts()) : the_post(); ?>


            <?php the_content(); ?>


        <?php endwhile; ?>

    <?php endif; ?>


<?php get_footer(); ?>
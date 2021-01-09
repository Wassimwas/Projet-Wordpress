<?php

/**
 * Template Name: Contact
 */

get_header(); ?>

<div class="container">
    <?php the_title(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <?php the_content() ?>

    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>
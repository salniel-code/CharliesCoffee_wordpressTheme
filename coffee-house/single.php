<?php get_header(); ?>
<!-- Sida för de tre blocken på startsidans andra sektion -->

<div class="single-page">

    <?php
    if (have_posts()) { ?>
        <h3><?php the_title(); ?></h3>
        <?php
        while (have_posts()) {
            the_post();

        ?>


    <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            the_content();
        }
    }
    ?>
</div>
<?php get_footer(); ?>
<?php
/*
Template Name: Kontakt-sida
*/
?>
<?php get_header(); ?>

<!-- Kontaktsida -->

<div class="page-simple kontakt-page">

    <?php
    if (have_posts()) { ?>
        <!-- Skriver ut sidan innehåll -->
        <?php
        while (have_posts()) {
            the_post();
        ?>

            <h3 class="center-text"><?php the_title(); ?></h3>

            <?php the_content(); ?>

    <?php
        }
    }
    // Widget karta/maps
    get_sidebar(); ?>
</div>

<?php get_footer(); ?>
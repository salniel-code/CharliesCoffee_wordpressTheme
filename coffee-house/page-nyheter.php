<?php get_header(); ?>

<!-- Nyhetssida -->

<div class="news-page">
    <!-- Skriver ut sidans innehåll (titel och paragraf) -->
    <?php
    if (have_posts()) { ?>

        <?php
        while (have_posts()) {
            the_post();
        ?>
            <div class="center-text page-heading">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
    <?php
        }
    }
    ?>
</div>

<div class="news-grid">
    <!-- // Skriver ut inlägg från kategorin frontpage-section-1 -->
    <?php
    //  Antal inlägg som ska skrivas ut variabel-räknare
    $amountPost = 0;

    categoryPosts('nyheter');
    if (have_posts()) {
        while ((have_posts()) && ($amountPost < 9)) {
            ++$amountPost;
            the_post();
    ?>
            <a href="<?= the_permalink(); ?>">
                <div>
                    <h5><?= the_title(); ?></h5>
                    <?= the_excerpt(); ?>
                    <h6>Datum: <?= wp_date('Y-m-d'); ?> </h6>

                </div>
            </a>
    <?php
        }
    }
    wp_reset_postdata();

    ?>

<?php get_footer(); ?>
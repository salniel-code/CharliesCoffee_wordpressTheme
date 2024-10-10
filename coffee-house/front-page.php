<?php
/*
Template Name: Startsidan
*/
?>
<!-- Väljer headern som är specifikt gjord för startsida -->
<?php get_header('frontpage'); ?>

<div id="grid-1-startpage">
    <?php

    // Skriver ut inlägg från kategorin frontpage-section-1
    $categarg = array('category_name' => 'frontpage-section-1');
    query_posts($categarg);
    if (have_posts()) {
        while (have_posts()) {
    ?>
            <article>
                <div class="grid-1-text">
                    <!-- Lägger till kaffekanna ikon -->
                    <img src="<?= get_template_directory_uri(); ?>/images/coffepoticon.png" alt="coffepot icon">
                    <?php
                    // skriver ut inläggen
                    the_post();
                    ?>
                    <h3><?= the_title(); ?></h3>
                    <?php the_content(); ?>

                </div>
                <div class="grid-1-img">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('full');
                    }
                    ?>
                </div>
            </article>
    <?php

        }
    }
    wp_reset_postdata();

    ?>
</div>

<!-- Andra sektionen innehåll, med info om ekologisk innehåll -->
<div id="grid-2-startpage">
    <div class="eco-heading">
        <?php

        // Skriver ut inläggs-Titel från kategorin frontpage-section-2-rubrik
        $categarg = array('category_name' => 'frontpage-section-2-rubrik');
        query_posts($categarg);
        if (have_posts()) {
            while (have_posts()) {

                the_post();
        ?>
                <h3><?= the_title(); ?></h3>

        <?php

            }
        }
        // Ser till att queryn är återställd, så hem-sidans innehåll kan skrivas ut efteråt
        wp_reset_query();
        wp_reset_postdata();

        ?>
    </div>

    <!-- Skriver ut inlägg från kategorin frontpage-section-2 -->
    <div class="link-image-grid">
        <?php
        categoryPosts('frontpage-section-2');
        if (have_posts()) {
            while (have_posts()) {

                the_post();
        ?>
                <div>
                    <a href="<?php the_permalink(); ?>">
                        <h4><?= the_title(); ?></h4>
                    </a>
                </div>

        <?php

            }
        }
        wp_reset_postdata();

        ?>

    </div>
    <?php get_footer(); ?>
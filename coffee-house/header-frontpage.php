<!-- Av Sally Nielsen -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Style  -->
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>

<body>
    <!-- I container-startpage ligger allt synligt innehåll på sidan -->
    <div id="container-startpage">
        <header>
            <!-- Primär navigering -->
            <div class="main-navbar">

                <div class="nav-logo-container black-logo">
                    <!-- Lägger in dynamisk logotyp -->
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <!-- Meny  -->
                <div id="menu-icon" onclick="openmenu()">&#9776;</div>
                <div id="menu-icon-close" onclick="closemenu()">&times;</div>
                <nav id="nav-menu">
                    <?php
                    wp_nav_menu(array('theme_location' => 'main-nav'));
                    ?>

                </nav>
            </div>
            <div class="header-banner">
                <div class="banner-content">
                    <div class="white-logo start pages-logo">
                        <!-- Lägger in dynamisk logotyp -->
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                    <?php

                    // Skriver ut Header text från inlägg i kategorin header-rubrik
                    $categarg = array('category_name' => 'header-rubrik');
                    query_posts($categarg);
                    if (have_posts()) {
                        while (have_posts()) {

                            the_post();
                    ?>
                            <h3 class="big-heading"><?= the_title(); ?></h3>
                    <?php
                            the_content();
                        }
                    }
                    // Ser till att queryn är återställd
                    wp_reset_query();
                    wp_reset_postdata();

                    ?>
                    <a href="<?php echo get_option('siteurl'); ?>/kontakt"class="btn-transparent">Hitta oss</a>
                </div>
            </div>
            <div class="headerimg-container">
               <?php echo do_shortcode('[metaslider title="Nytt bildspel"]'); ?>
            </div>


  
    </header>
    <main>
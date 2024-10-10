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
        <header class="header-main">
            <!-- Primär navigering -->
            <div class="main-navbar">

                <div class="nav-logo-container black-logo">
               
                     <!-- Lägger in dynamisk logotyp -->
                     <?php
                    if( function_exists( 'the_custom_logo')){
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
            <div class="header-banner non-frontpage">
                <div class="banner-content">
                    <div class="white-logo pages-logo">
                    <!-- Lägger in dynamisk logotyp -->
                    <?php
                    if( function_exists( 'the_custom_logo')){
                        the_custom_logo();
                    }
                    ?></div>
                </div>
                <div class="headerimg-container">
                    
                <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>"
                width="<?php echo get_custom_header()->width;?>">
                </div>


            </div>
        </header>
        <main>

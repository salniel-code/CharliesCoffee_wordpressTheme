<?php
// Kod av Sally Nielsen
// Lägger till meny, som går att modifiera genom wp
add_action('init', 'register_my_menu');

function register_my_menu()
{
    register_nav_menu('main-nav', __('Huvudmeny'));
}

// Lägger till att sidebar-widgets fungerar
add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    register_sidebar(array(
        'name' => __('Primary Sidebar'),
        'id' => 'sidebar-map',
        'before-widget' => '<aside id="sidebar-map>',
        'after-widget' => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
// Gör dynamisk header-bild möjligt
$arg = array(
    'width' => 1290,
    'height' => 798,
    'flex-width' => true,
    'flex-height' => true,
    'default-image' => get_template_directory_uri() . '/images/headerimg1.jpg',
    'uploads' => true,
);
add_theme_support('custom-header', $arg);

// Gör det möjligt att välja logotyp
function themes_custom_logo_setup()
{
    $default = array(
        'height' => 500,
        'width' => 500,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $default);
}
add_action('after_setup_theme', 'themes_custom_logo_setup');

// Gör att (feature image) bilder fungerar
function talk_theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'talk_theme_setup');

// Sätter en maxgräns på antal ord för excerpt
function tn_custom_excerpt_length($length)
{
    return 10;
}
add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);


// Ser till att inlägg i kategorin frontpage-section-2 använder mallen single.frontpage-section-2.php
add_filter('single_template', function ($single_template) {

    if (has_category('frontpage-section-2')) {
        $single_template = dirname(__FILE__) . '/single-frontpage-section-2.php';
    }
    return $single_template;
}, PHP_INT_MAX, 2);

// För att skriva ut inlägg från specifik kategori
function categoryPosts($catName)
{
    $categarg = array('category_name' => $catName);
    query_posts($categarg);
}

// Funktion för att skriva ut inlägg från specifik kategori
function writeSpecPost($getThis)
{
    // Skriver ut inläggets innehåll från kategorin frontpage-section-1
    $categarg = array('category_name' => $getThis);
    query_posts($categarg);
    if (have_posts()) {
        while (have_posts()) {

            the_post();
            the_content();
        }
    }
    wp_reset_postdata();
}

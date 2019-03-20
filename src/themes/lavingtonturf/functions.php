<?php

wp_cache_flush();

/* Require */

/* BS Nav Walker */
require get_template_directory().'/includes/bootstrap-wp-navwalker.php';

/* Add ACF widget */
include_once get_template_directory().'/includes/acf-custom-widget.php';

/*
function homepage_callout()
{
    register_sidebar([
        'name' => __('Homepage CTA Widget Area'),
        'id' => 'homepage-widget-area',
        'description' => 'Add widgets here to appear on the homepage call to action section.',
        'before_widget' => '<div class="col-md-4"><div class="service-card">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'homepage_callout');
*/

/* Hooks */

if (!function_exists('enqueue_scripts')) {

    add_action('wp_enqueue_scripts', 'enqueue_scripts');

    function enqueue_scripts()
    {
        wp_enqueue_script('jquery', false, array(), false, false);

        wp_enqueue_style('style_file', get_stylesheet_directory_uri().'/style/style.css', [], '1.0.4');
        wp_enqueue_script('header_js', get_stylesheet_directory_uri().'/js/header-bundle.js', null, '1.0.4', false);
        wp_enqueue_script('footer_js', get_stylesheet_directory_uri().'/js/footer-bundle.js', null, '1.0.4', true);
    }
}

if (!function_exists('admin_init')) {

    function remove_posts_menu()
    {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }

    add_action('admin_init', 'remove_posts_menu');
}

/* Misc */

show_admin_bar(false);

// add_filter('login_errors', create_function('$a', "return null;"));

remove_action('wp_head', 'wp_generator');

remove_filter ('the_content', 'wpautop');
remove_filter ('the_excerpt', 'wpautop');

add_filter('gform_init_scripts_footer', '__return_true');

add_filter( 'gform_confirmation_anchor', '__return_false' );

/* Child Theme */

add_action('after_setup_theme', 'custom_after_setup_theme', 11);


function custom_after_setup_theme()
{
    remove_theme_support('custom-background');
    remove_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}
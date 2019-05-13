<?php

// ***********************************************************************//
// Admininistration / Dashboard modifications
// ***********************************************************************//

// Admin: Remove Admin Bar Items
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');

function remove_admin_bar_links()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');
}

function disable_default_dashboard_widgets()
{
    global $wp_meta_boxes;
    // wp..
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    // yoast seo
    unset($wp_meta_boxes['dashboard']['normal']['core']['wpseo-dashboard-overview']);

}
add_action('wp_dashboard_setup', 'disable_default_dashboard_widgets', 999);

function disable_wp_emojicons()
{
    // all actions related to emojis
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
}

/* Remove crap from header */
add_action('init', 'disable_wp_emojicons');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');

/* Change WP Logo Link on Login Page */
add_filter('login_headerurl', 'custom_loginlogo_url');

function custom_loginlogo_url($url)
{
    return get_site_url();
}

/* Redirect users to home after logout */
add_action('wp_logout', 'auto_redirect_after_logout');

function auto_redirect_after_logout()
{
    wp_redirect(home_url());
    exit();
}

// ***********************************************************************//
// Custom Administration Theme
// ***********************************************************************//
function additional_admin_color_schemes()
{
    //Get the theme directory
    $theme_dir = get_template_directory_uri();

    //Ocean
    wp_admin_css_color('pentesec', __('Pentesec'),
        $theme_dir . '/css/admin.css',
        array('#6CAEDF', '#B4CD39;')
    );
}
add_action('admin_init', 'additional_admin_color_schemes');

// ***********************************************************************//
// Disable API
// ***********************************************************************//
add_filter('rest_authentication_errors', function ($result) {
    if (!empty($result)) {
        return $result;
    }
    if (!is_user_logged_in()) {
        wp_safe_redirect('/');
        exit;
    }
    return $result;
});

// ***********************************************************************//
// Disable RSS Feeds
// ***********************************************************************//

function shape_disable_feed()
{
    wp_safe_redirect('/');
    exit;

}

add_action('do_feed', 'shape_disable_feed', 1);
add_action('do_feed_rdf', 'shape_disable_feed', 1);
add_action('do_feed_rss', 'shape_disable_feed', 1);
add_action('do_feed_rss2', 'shape_disable_feed', 1);
add_action('do_feed_atom', 'shape_disable_feed', 1);
add_action('do_feed_rss2_comments', 'shape_disable_feed', 1);
add_action('do_feed_atom_comments', 'shape_disable_feed', 1);

function remove_json_api()
{

    // Remove the REST API lines from the HTML Header
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    add_filter('embed_oembed_discover', '__return_false');

    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // Remove all embeds rewrite rules.
    add_filter('rewrite_rules_array', 'disable_embeds_rewrites');

}
add_action('after_setup_theme', 'remove_json_api');

// ***********************************************************************//
// Disable Author Archives to prevent user enumeration
// ***********************************************************************//
function shape_disable_author_archives()
{

    if (is_author()) {

        global $wp_query;
        $wp_query->set_404();
        status_header(404);

    } else {

        redirect_canonical();

    }

}
remove_filter('template_redirect', 'redirect_canonical');
add_action('template_redirect', 'shape_disable_author_archives');
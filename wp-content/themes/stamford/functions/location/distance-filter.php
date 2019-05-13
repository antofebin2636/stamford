<?php
// ***********************************************************************//
// AJAX - Find your nearest Locksmith
// ***********************************************************************//
add_action('wp_ajax_locksmith_nearest', 'locksmith_nearest_callback');
add_action('wp_ajax_nopriv_locksmith_nearest', 'locksmith_nearest_callback');

function locksmith_nearest_callback()
{

   $userLocation  = $_POST['location'];
   $userDistance  = 15; 

    // ***********************************************************************//
    // Basic Search Arguments
    // ***********************************************************************//
    
    $args = array(
        'suppress_filters' => false,
        'post_type' => 'locksmiths',
        'posts_per_page' => 1,
        'order' => 'DESC',
        'orderby' => 'post__in',
        'post_status' => 'publish'

    );

    // ***********************************************************************//
    // Filter the posts by location
    // ***********************************************************************//
    if ($userLocation) :

        list($center_lat, $center_long) = geocode_location($userLocation);  
        $include_locksmiths = find_nearby_locksmiths($center_lat, $center_long, $userDistance);
        
        if ( ! empty( $include_locksmiths ) ) :
        $args['post__in'] = $include_locksmiths;
        else :
        $args['post__in'] = array(0);
        endif;
        
    endif;

    // ***********************************************************************//
    // Go fetch the posts
    // ***********************************************************************//

    $locksmiths = get_posts( $args );
    $data = array();

    if ( ! empty( $locksmiths ) ) :

        $locksmith = $locksmiths[0];
        $locksmith_id = $locksmith->ID;
        $locksmith_title = $locksmith->post_title;
        $locksmith_phone = get_field('location_phone', $locksmith_id);
        $locksmith_url = get_field('location_url', $locksmith_id);
        $locksmith_email = get_field('location_email', $locksmith_id);

        $data['title'] = $locksmith_title;
        $data['phone'] = $locksmith_phone;
        $data['email'] = $locksmith_email;
        $data['url'] = $locksmith_url;

        echo json_encode($data);

    else :

        echo '0';
    
    endif;

    die();
}




// ***********************************************************************//
// AJAX - Check if any Locksmiths Found
// ***********************************************************************//
add_action('wp_ajax_locksmith_check', 'locksmith_check_callback');
add_action('wp_ajax_nopriv_locksmith_check', 'locksmith_check_callback');

function locksmith_check_callback()
{
   $userLocation  = sanitize_text_field($_POST['location']); 
   $userLocation  = stripcslashes($_POST['location']);
   $userDistance  = sanitize_text_field($_POST['distance']);
   $userService   = sanitize_text_field($_POST['service']);
   $userCompany   = sanitize_text_field($_POST['company']);

    // ***********************************************************************//
    // Basic Search Arguments
    // ***********************************************************************//
    
    $args = array(
        'suppress_filters' => false,
        'post_type' => 'locksmiths',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'post_status' => 'publish'

    );

    // ***********************************************************************//
    // If user has searched by business Name
    // ***********************************************************************//
    if (!empty($userCompany)) :

        $args['s'] = $userCompany;

    endif;

    // ***********************************************************************//
    // Add category filtering if required
    // ***********************************************************************//

    if (!empty($userService) && ($userService != 'all')) :

        $tax_query = array();

        $tax_query[] =
            array(
                'taxonomy' => 'sm-tag',
                'field'    => 'term_id',
                'terms'    => $userService,
                'operator' => 'IN'
            );

        $args['tax_query'] = $tax_query;

    endif;

    // ***********************************************************************//
    // Filter the posts by location
    // ***********************************************************************//
    if ($userLocation) :

        list($center_lat, $center_long) = geocode_location($userLocation);  
        $include_locksmiths = find_nearby_locksmiths($center_lat, $center_long, $userDistance);
        
        if ( ! empty( $include_locksmiths ) ) :
        $args['post__in'] = $include_locksmiths;
        else :
        $args['post__in'] = array(0);
        endif;
        
    endif;

    // ***********************************************************************//
    // Go fetch the posts
    // ***********************************************************************//

    $locksmiths = get_posts( $args );

    // $file = $_SERVER['DOCUMENT_ROOT'] . "/ajax-log.txt";

    // file_put_contents($file, 'args: ' . print_r($args, true));
    // file_put_contents($file, 'locksmiths: ' . print_r($locksmiths, true), FILE_APPEND);

    // echo $userLocation;

    if ( ! empty( $locksmiths ) ) :

        echo '1';    

    else :

        echo '0';
    
    endif;

    die();
}


// ***********************************************************************//
// Find location from user input
// ***********************************************************************//
function geocode_location($town)
{
    $town = urlencode($town);

    $location = $town;
  
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($location) . "&sensor=false&key=AIzaSyBiPEgNiC1lkgtopqy6xV4DsvQAptjphT8";
    
    $location =  wp_remote_get( $url );
    $location = json_decode($location['body']);

    $latlong = array();

    $latlong[] =  $location->results[0]->geometry->location->lat;
    $latlong[] =  $location->results[0]->geometry->location->lng;

    return $latlong;
    
    printr($latlong, true);
    
}

// ***********************************************************************//
// Filter posts by location
// ***********************************************************************//
function find_nearby_locksmiths($lat, $long, $distance = 5)
{

    global $wpdb;

    $sql = $wpdb->prepare("SELECT
            p.ID,
            (3959 * acos(cos(radians(%s)) * cos(radians(location_lat.meta_value)) * cos( radians(%s) - radians(location_lng.meta_value)) + sin(radians(location_lat.meta_value)) * sin(radians($lat)))) AS distance
            FROM wp_posts p
            JOIN wp_postmeta location_lat
            ON location_lat.post_id = p.ID AND location_lat.meta_key = 'location_lat'
            JOIN wp_postmeta location_lng
            ON location_lng.post_id = p.ID AND location_lng.meta_key = 'location_lng'
            WHERE p.post_type = 'locksmiths'
            AND p.post_status = 'publish'
            HAVING distance <= %s
            ORDER BY distance",$lat,$long,$distance);

    $results = $wpdb->get_results($sql);
    
    $locksmiths = array();
    foreach ($results as $result) $locksmiths[] = $result->ID;
    return $locksmiths;
}

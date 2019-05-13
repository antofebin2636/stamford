<?php

add_action( 'update_option_permalink_structure', 'shape_htaccess_cachebusting',1 );

function shape_htaccess_cachebusting() {
    $htaccess = ABSPATH . ".htaccess";

    $lines = array();
    $lines[] = 
    "<IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.+)\.(\d+)\.(bmp|css|cur|gif|ico|jpe?g|m?js|png|svgz?|webp|webmanifest)$ $1.$3 [L]
    </IfModule>";

    insert_with_markers($htaccess, "Shape Cachebusting", $lines);

}

add_action( 'update_option_permalink_structure', 'shape_htaccess_security_headers',1 );

function shape_htaccess_security_headers() {
    $htaccess = ABSPATH . ".htaccess";

    $lines = array();
    $lines[] = 
    '<IfModule mod_headers.c>
        Header set X-XSS-Protection "1; mode=block"
        Header always append X-Frame-Options SAMEORIGIN
        Header set X-Content-Type-Options nosniff
        Header set X-Download-Options "noopen"
        Header set Referrer-Policy "no-referrer"
        Header set X-Permitted-Cross-Domain-Policies "none"
    </IfModule>';

    insert_with_markers($htaccess, "Shape Security Headers", $lines);

}

add_action( 'update_option_permalink_structure', 'shape_htaccess_security_files',1 );

function shape_htaccess_security_files() {
    $htaccess = ABSPATH . ".htaccess";

    $lines = array();
    $lines[] = 
    '<Files wp-links-opml.php>
    Order Allow,Deny
    Deny from all
    </files>
    
    <Files xmlrpc.php>
    Order Allow,Deny
    Deny from all
    </files>';

    insert_with_markers($htaccess, "Shape Security File Protection", $lines);

}
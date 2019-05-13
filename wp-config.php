<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stamford_school_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9Mk8l7Th2*Xt1=J9|C~?FaGN? 6;)z#Fv+2*7VuGY(Y]tz$k/i8wY_!A>=!hZh}k' );
define( 'SECURE_AUTH_KEY',  ';=&`q$LBv3)`<Nl7{`:8>]6EXPP8xh[85ad5cv=-5,<z;Qq5@?,HYJ7AT{]%Z[y4' );
define( 'LOGGED_IN_KEY',    'x@^ddwAVfeU0vz]U80-c}x1bovmS^,k0pJj<T&Oz9?AAW?~P3:zOTV3-2-U`}:[)' );
define( 'NONCE_KEY',        '!Nq[1tpy~S0}0C,4?joR,v;Xyt:)PntjZ~Ys#}*3XzGToz]A%/)kVEZ3-nV+w(5G' );
define( 'AUTH_SALT',        'V-G1wR=1:-b[m$+q;1g6z],,R?qP1(3wp+5YF^2B(<9e]ey>VY@+;$JpY~qATF<S' );
define( 'SECURE_AUTH_SALT', 's-_Nb<]$)>t3lo3%K@I#R:pf}.&()iYI$AN=/j{><{Kr#1Nl#+:q1~`J9/e,Qt?v' );
define( 'LOGGED_IN_SALT',   'u3Qf8qAD)>bh6jWi{HlP.FXB6A>px6XXmS_FwKrcznHo,P-7[Rt?qSTUxNdYgWWj' );
define( 'NONCE_SALT',       'U9[;s)vPJwC@+|z0@xo/EMR.0I}6Mb*]7vaC;Z|DrPaB^VKY:dtnBRIY[PQwl0R]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

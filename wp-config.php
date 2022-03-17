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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          's=,vi>bvi,}o/}VP-e}d]:9vuX7+;I`vEukc!ga6Z/H>#5XS)mX1*IGXm?zI?u 4' );
define( 'SECURE_AUTH_KEY',   'u8xohz7NFDFU!B5+B_So,5nh<s[I7+L 9oQ;iro?9@YhU0^c/CV/nt+7EJ4O]q8=' );
define( 'LOGGED_IN_KEY',     'b/k<)+lu-8`(uG8v9=B#8Iak>hsU@hb1]il1Kg=i6zaMk_jCk0{5^F(TmN:d4n8i' );
define( 'NONCE_KEY',         ';5Y>GGW+}n.wvQd+T8`N8EP[J8a*?I1yc/8-MymsFct5qPKMA9i0 -^<,/xcxL9I' );
define( 'AUTH_SALT',         '|Ci5Aq[(L4wLnVD*Z*{3t;&s4Ahsq(%S@.:zn,!9R+A}Y/if(G^nq1(=JM<VLC~X' );
define( 'SECURE_AUTH_SALT',  'D@OhQ&!l9c<Q>df;@T<`tJ2<|J.2FM[udS9K@_fvRlptNkV|O_:,dXa[+64`v!^Y' );
define( 'LOGGED_IN_SALT',    'J.-Qn4^dV)OX:A;!@4L_7dT5)fAfeElhaod@}Ky7[LCej_]|)&1OO1EEv*oS_ xU' );
define( 'NONCE_SALT',        'x-GZFqilsnrRj.{6j=V8jiv-JvK2EqVF06an1m)hm|]9tt`Xv_TUyMx/q LEO51T' );
define( 'WP_CACHE_KEY_SALT', '0^[Q@F]9#=*z(Yy?>*PUQZP@~k=N%lu>)M+w]M;=}d@xu5$=D.lHI-B6[O1P,^-t' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://BlocksDevelopment.dsebao.repl.co' );
define( 'WP_SITEURL', 'https://BlocksDevelopment.dsebao.repl.co' );
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

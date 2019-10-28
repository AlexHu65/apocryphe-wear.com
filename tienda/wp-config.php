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
define( 'DB_NAME', 'apocryph_shop' );

/** MySQL database username */
define( 'DB_USER', 'apocryph_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S1st3m2s' );

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
define( 'AUTH_KEY',         'rQ6#1|o#Ra;gT>2uC5kOR[QVy^/ITQCWorQ&XH|KTcb3#V2f$Inm%2o/K=xFINqB' );
define( 'SECURE_AUTH_KEY',  '5b1.!S55BG. |By|q  {TVXdx-_+jR*[x<`4U7cEq#cG]#7St@t)oO|c>d)+:X[N' );
define( 'LOGGED_IN_KEY',    '/-lRjsw;{n@SYgb3/hz= (LN}H{@_2zG/5u1WlHhoAR~bT!WAUa|tAU+Z2[cQD~r' );
define( 'NONCE_KEY',        'Ww=XqZS2ZuFS?=^mGkS[4&$ZE<xICN=Og#{Ua<q![0>kwUJwQU0Gn2$(S|2]-*vZ' );
define( 'AUTH_SALT',        'g;l7R]aY>E(l2Fad_18fnmZs-Bm[/gv)# wvb.:*i~C^[AAV5H0E&B>tj`hmPJUq' );
define( 'SECURE_AUTH_SALT', 'mc=`1;E wPA$s8hS(!KS$[JQ71:WeK|E]nCv@:oj?+^*e(qgADa<q0SI#~/*+Ln7' );
define( 'LOGGED_IN_SALT',   '?!Fc-s*o~>h;DuV}uae )f9*`(*]jA}r5e5bI>M03,gcyu<0!8<gCZrLYkL$nC(&' );
define( 'NONCE_SALT',       '{Px:o?+Dh?_y]TQH1j.g|9[6*_-7oJ/5oU+9YtqT+`tJ{CL69{Y#cp^Dm^a5$8yX' );

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

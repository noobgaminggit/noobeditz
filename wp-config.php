<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'noobeditz_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~O9;t+,62pm`366pR8tn;)[zVpo4=U_q?X1vouR<22IYz]qxx<0V*xr~$9+l<(q=' );
define( 'SECURE_AUTH_KEY',  'bVo<FB.?K6(O0w[|@^A;Ua;B<-mC?)nKc%d~&<s&(kEZk>0y[J^V>gU*Z}:r4g3>' );
define( 'LOGGED_IN_KEY',    '<[Q{2yrG,kto,.cWF1oO}K`AY8C&v|(v_fIpK,oek<rGj-YDgX?4qgw2d-XR|(P<' );
define( 'NONCE_KEY',        'fJkd+_Vz#x<gu8oQ6`R|;qJz8[X^,rQUG2!^&pc.>&vMmu&n+MhIxSC9 S<E&x/4' );
define( 'AUTH_SALT',        '3 YePEPqES&aG[<H[G#(%PSaJ;}v/b5MI~|&d?g>_ztu#yUN=0n8Y*s5-BMjI&jF' );
define( 'SECURE_AUTH_SALT', '[1/dv,^_Uf<1aerDa_&(rAv52#*o!|1|(CHWC] aq-;)4Fm:9aj6wJd[{@3Na!Xr' );
define( 'LOGGED_IN_SALT',   'RrU3JYgd&Vhlw&l5-D3%Ts6>}OIgc5LZOh8Cj)e[#W/$&;e9+P@ihmm428<,Aj]%' );
define( 'NONCE_SALT',       'yb~X(J|>jWH3}u%vBU#Joz];Wh%/hJ-}D:-70C6O_521m3GTyQwh;k&`F/)Xxh6O' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

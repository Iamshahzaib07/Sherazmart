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
define( 'DB_NAME', 'sheraz_mart' );

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
define( 'AUTH_KEY',         'WAt|;%<q!}Ipb/5#DV*F2UI[,uZ*c5IJ)p{Xc|=~okD>TWJBd~P7nEMj$l|gV]C:' );
define( 'SECURE_AUTH_KEY',  'OTVW-HhYV>OD{Vs,e6uVj0wm;u.1bYUz8gC6,f*4OAYdQqA/4-C+VY3M?<iup[2[' );
define( 'LOGGED_IN_KEY',    'VjVc<;~VREnbw.|Jhz>a.+-ue5dQ|lVUey[wO|0?~jqG7g*AelJ?to74)(Xe4O>U' );
define( 'NONCE_KEY',        'Z5a=_k>aS$0g,/*|8iXg?,i=Agb**>+E2 ZNW5o$q6A<3b)uabgSUT.@p0(5g4>K' );
define( 'AUTH_SALT',        'r4@sL4VtH*B8y7sFA0)uZ])!+KtqoyK.h?tQYEN/.,2G2gk4Ejg1az C%+b*mbSq' );
define( 'SECURE_AUTH_SALT', 'XbQCNLiKGtq57!X4gwXiY%m+}Db|s|4Q# IRwuFc0pBg74xZBwCneeTi~,.<eZ2<' );
define( 'LOGGED_IN_SALT',   'nO<dt?g>P1MyUIHy`zqZY6~0r1`y_1DDD$~c<6h&aqq3AI[fnfvd:M:-jWh5R4 !' );
define( 'NONCE_SALT',       'Kp(b6<N}9#=@TYWTz-tsFdi}7Cxt_4<mSEpR8#lpf~a*Tsgn953wp@IP{22Lfz8n' );

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

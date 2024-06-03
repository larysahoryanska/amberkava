<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amberkava' );

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
define( 'AUTH_KEY',         's&_M:R(YWH{V1my*o:3/Exi*8XB[gw)`V(-T#G_4[{vxzSY)I7Mi-XE~Vn.}}3bM' );
define( 'SECURE_AUTH_KEY',  'H?!AkT.Z/KW90G[wHM+NQ?0^l2wK@5DQ`tY6G]^Z qg7{7]K]ex+?~w Q)zEO3}k' );
define( 'LOGGED_IN_KEY',    '..42+0B)1jnh4li,w~[CYQ*6pc#<U 9U7&cHQK&Nyc/>O: MNc,@@>r}3T}O8F!A' );
define( 'NONCE_KEY',        '2/)uLQe)eHbXNd8F*-;tyU>cyyu;e) ;-?8m0W<R/v&U,La [(7JPzkvP)zL{ W[' );
define( 'AUTH_SALT',        '4_Eee<coCv~uzc{*(>xGCaUIp?B{j;L  %Epjga4}fdvt?i!$q6)4hfO7E_-<8Dv' );
define( 'SECURE_AUTH_SALT', 'bBvZ7B[]<X0z+SD}OM:sh:.Z4y!&x)[8etY@;j(#x-#^:fGL9ee!QM8?VC?p2}2:' );
define( 'LOGGED_IN_SALT',   'KlQIUFA>qH#AruI!NH,w>W3&~o0&]f8V3KNfemub{IvqfFC@3S}toMot`[=GHwrv' );
define( 'NONCE_SALT',       'Z;6dva5F1n6S$eR1G5{oOrcTca%z=XU&R%/:HOG;&*;Z-~/lSfB[TGx:[4DQfF4t' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

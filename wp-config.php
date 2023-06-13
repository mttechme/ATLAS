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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u420421909_FvMzW' );

/** Database username */
define( 'DB_USER', 'u420421909_WUhb4' );

/** Database password */
define( 'DB_PASSWORD', 'nvhPE3xLq4' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '_[%W=O*:iTV!<xA3n/%qsGr *T`qyus(+_QFob2He7k$CNJ0m~_HFs+hlJ|qMzaw' );
define( 'SECURE_AUTH_KEY',   'vT,~U*exQ;&G %w2yi&f!5PpowDTZyoeKh~Et|Q>z%m&u)Z-hoZ=0KY= D(z->^_' );
define( 'LOGGED_IN_KEY',     ']m$zo0wFGm46`kyh}IyDcC]UP&tnPbUZxV<wL[dY>=b8O;9m#64I]6=DV2mtu0jo' );
define( 'NONCE_KEY',         '>Img/mQKV2.z`}yBPvrnpj{9=mniWq]z//vm6I.bH@C!mMEyBV|b,Nwto_U{fG[=' );
define( 'AUTH_SALT',         '(?2+gw4<Qh?o~j:d>CDWg5Vi;c(rj-=J5i=+?@:]ozCW[P.RL+Aa/=wp1TF}K|*L' );
define( 'SECURE_AUTH_SALT',  'Wly88j/I_3?9w1piFF@cmy=gI0wf!G(`*?7c#})Z[66;0$}&wPtYVdPRp%1v t[F' );
define( 'LOGGED_IN_SALT',    '{z+Bm_QLYvA/4n4S^k[>^ax3/.v0f[$ul/tm>/hpD,jvO&`?/|>`n<+g7hcDA7sD' );
define( 'NONCE_SALT',        '7&Q>_E;f22]+l9(AW:YEwC2nBOx])8mve]N96)ts_xcsm:Mp9%C|Pgo`ciEjQ LH' );
define( 'WP_CACHE_KEY_SALT', '*y]_0$>h$WJ<O8vj:9AJc@kj-^)k:Zs9NWS }4_q*X>j)$$0tH/x;<0,#Xsb?,el' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

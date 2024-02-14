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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv("WORDPRESS_DB_NAME") );

/** Database username */
define( 'DB_USER', getenv("WORDPRESS_DB_USER") );

/** Database password */
define( 'DB_PASSWORD', getenv("WORDPRESS_DB_PASSWORD") );

/** Database hostname */
define( 'DB_HOST', getenv("WORDPRESS_DB_HOST") );

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
define('AUTH_KEY',         'r8lg-ML,5nQZ<PpcAzYGG!/pRgWf)8Gk+S&xNW1RHt5uQ&,T)toI|CCq<Sm^o`_n');
define('SECURE_AUTH_KEY',  '&<5Kv[]5m{^__V9>.+1 L1eR,eIi>@Yurd|EZj<h[iw.hZDkU H@wEqs-^XN#+c%');
define('LOGGED_IN_KEY',    'b_^N#siv<NkSS--KhwI&){&I1pcQ2=>HB4Zs{i-4`73orQ.+!X8J_XwG}S+9h-b6');
define('NONCE_KEY',        'Z&!+H+/DqG5!/?aO`=:$d2-fGhP[qQc9wB hUT-9GIH`H/+^MB)l*H-Nh~MZuIRm');
define('AUTH_SALT',        '+3qNi).p;N2OAT|k~+a5Lv)lD)(Z.]T+RP8LBo*{|O#<EmngGpZs)zBva{OiEp+5');
define('SECURE_AUTH_SALT', '!q=9oxl-M[V.76$&*&3O0dnxV5Qx$dLh|NH8n,OS+Dzguac{Ctp0h#{l8~|iC]M9');
define('LOGGED_IN_SALT',   'r=~mRUlMD?d3|hKjGHPT(}IPH+W<Z(S<9g`(LZsa+|W<UQWah7P. !jT/.Ybkt[+');
define('NONCE_SALT',       'XoOQ_y5Y.1i]Ct#ZGkUB*[PFQLmO$e!7ZoeP8-)m(%1i^A];HJAQ%g!rlh_V#8_ ');

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

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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '+]j(GA>ryH}<(%G}$kq&}QkTy&g{IS/J~gEBSDww6Gk{hij:/L2fyx,l+T*OL0#e' );
define( 'SECURE_AUTH_KEY',   'B&eQ&ME1|<p`|x,o,aKzE)}c1Fr3j^5U>S^(MT`a:@ )3pMN@ F?YoF9(Qtfer,A' );
define( 'LOGGED_IN_KEY',     'q+N;W;K`A6JVzI^cC.7nm<#.EQ! h#dYn,ZU w$z+t`De]Qm.VlGWBC^>q_-$H1]' );
define( 'NONCE_KEY',         'WW8[zJ`%XC9I (K!%u=x!hNwIX kti 2pD?w=tWb/k8]F_uaZa/V8.Qe0kSnm+#q' );
define( 'AUTH_SALT',         ' lV>4<-dq/9NE@^XFp~wreNeopW5^m3D8fr-4/i}bOJMkI 0V;jCfbJ>~*b@h[{2' );
define( 'SECURE_AUTH_SALT',  'Ob*?`1AiifXpX _zf#G5#^`6$qi2oRU]tRlK*F*@|VB%qu4y]if|cRQmq{.QJNft' );
define( 'LOGGED_IN_SALT',    'G&%Hb|q/elG;!cP8LI&5h%ukL4L;DJeg:C+o@2p_u|mo1N74KIrx*~*K7;yk2&hV' );
define( 'NONCE_SALT',        '~Xv-HwO/2MGV=9~SX5>.s2VA~Z|LFk::b|T&8j.R(!{=t]9((!r.[Ic<k_A#mp)x' );
define( 'WP_CACHE_KEY_SALT', 'S#fI1o~PaQB9+K}cD$=t%vdB{?Lf4 C74^M#jh=7$FFcA8k72%$#U ?iDbY~y4u|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

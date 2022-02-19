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
define( 'DB_NAME', '322-20_AmBR' );

/** Database username */
define( 'DB_USER', '322-20_wpadmin' );

/** Database password */
define( 'DB_PASSWORD', '0c0a463853f0463df691' );

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
define( 'AUTH_KEY',         'U5dv%BG6[1J/f>?<sJmR],rx7Sx!0Nm~oElr L}GWfkkkbI:S^/5iS7|;S}5dD<+' );
define( 'SECURE_AUTH_KEY',  'b##J]Wm;mZRyuc9G&G5R:3$^Ur-}-Fse(@FP4$V+X7x8QW?@3OK4.jErw$Rg0bLC' );
define( 'LOGGED_IN_KEY',    '6mBr=I,1_|[xCGPkI*$cB3|zXnQx{x(]oyZEEaje_sCC=s[38dN~P3IX#70qsH' );
define( 'NONCE_KEY',        '}2i^ Ms0YKH_BDVHW^Lmx%NJ]znN5=:cR*5F;yBuJ./C3Eb9eH7ys0dG}ZIZ[D2S' );
define( 'AUTH_SALT',        'BoS^ZYS<SvxH$&!l*VaIx<;Mj*IB5^iBwBVbw Oc~f:2*:9EvH_QyOLs0i5/McgK' );
define( 'SECURE_AUTH_SALT', 'P{s8df!.}N?M5R@K,058ITY(F|2I4Z~mFgAHK-H~0a0n+Dc3;,Mh(vV|@lzZo?jm' );
define( 'LOGGED_IN_SALT',   '-U&(j,X0^gSEEGy (q4B`pLD7hY2#^vuKJ6?`8%.unK4[@@+DW~b&TQ/{|C8&|m3' );
define( 'NONCE_SALT',       '[rX2W?o:A}g[;|nfL5!cEE[W5a%d=[a=:+ZTkX8MYt/AS2bSrfk4)&*wTQ4=X@cF' );

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
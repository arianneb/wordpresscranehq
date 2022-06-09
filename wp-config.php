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
define( 'DB_NAME', 'wordpresscranehq' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*q_&}Ct9O4qt7]9O^{:zZ.P]h|~M$cqID%)R3>f:qVfdU4xP:hTL1w#M`4J#4--f' );
define( 'SECURE_AUTH_KEY',  '|<Va1Z?8swZh>jCN|#Qy:|.~-5HLYbU8E^nq6uv`@ 6)`e8D1EF}q)q.Tz^.rGZi' );
define( 'LOGGED_IN_KEY',    'w~Q#AX.Y+i&OYR:UF F2lzfT  O$Qv4{G9:tjc%~C7x/--xCtIryAv4Ji1j^q OT' );
define( 'NONCE_KEY',        'H=U)wASfD]*2G`!{Je7Et%}tgbG,d(9qdc~tH#M{p1PNuq%(Np2dGSGBu-nFF62M' );
define( 'AUTH_SALT',        'MvyNQZ:Vhr;SkZ#J  GlF=Kqmf`+!msV<~@0k.*;<.@6.,Z[w}v%*M:#D0&4hVc#' );
define( 'SECURE_AUTH_SALT', '+$d9d64`YJI;c[%E T]^qq5%}=owZ>^+Y++.[sR/%rX9fFU/E5&fO-)<&7 Av?9A' );
define( 'LOGGED_IN_SALT',   '$w>CFD!MD>OJe{%d2?RlQkW<XPj@_i?VuW}38Ji4F?s?K+y:e7T~e:y~cN62wet3' );
define( 'NONCE_SALT',       'c=EkJq<.lvS~zE,]4aE=Bvxp]>]R[bOf27GaHZ/3VvNk0-I+yGZ,?z^%Wk)].5dX' );

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

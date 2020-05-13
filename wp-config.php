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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j$+#^PuG@mIDqAZaL{KljU>:cG9r]x1[=](*aYzL{ |J!%H/|Ca}]!:!4<P=[iF>' );
define( 'SECURE_AUTH_KEY',  'WYK436CCv[?w_`TZ@:DLctM_V,xC6udge0|XJpb9PR %B4Q@_-xCY?AG(mkx$!p ' );
define( 'LOGGED_IN_KEY',    '|=504R=REYtiugWkJIP-r!koV0J?>m|=!-Eo%y*HM9m0E8;^Pq!}+W+[Tp*:OWLo' );
define( 'NONCE_KEY',        '6$-9Zun>O_dY=^DD<t z,TtX+PZ]A+b,w0&07v>9mgl%kF>Wrg+$K|Od6[xTo1on' );
define( 'AUTH_SALT',        'jl^*5{Ty6F]+a47Bf.;f ^aVIa}R7Jt99@{rWt_yy*ZWv35NI_EO=6;Y0n9uIbMT' );
define( 'SECURE_AUTH_SALT', 'gUNDk{qh!E8!]A9Qk5w;7@yY.``]5Gw=vRVS1/?a6^lA)k&|d6u_CnghwF4~`Idv' );
define( 'LOGGED_IN_SALT',   'H4b]mq7;}]wQ&lskFo!yni$0~VYAjN9;[~S`7/L; ~C9,~m,C=K<1%TsNGAwxN:0' );
define( 'NONCE_SALT',       '54uI2xWfId4Db@lP{=oFTcGVT;@7?j^F;+Xk}cX0%sYg  APRy1F}j-_nXyCe~R<' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

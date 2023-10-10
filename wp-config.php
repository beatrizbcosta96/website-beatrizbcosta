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
define( 'DB_NAME', 'beatrizbcosta_db' );

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
define( 'AUTH_KEY',         ')hY]5jz{a44_d}x`45ZOs&JCq9DtDT@X{Wk0m%l-Vh]krGdtxEvAZ.T]&Z}JW)uK' );
define( 'SECURE_AUTH_KEY',  'yOux21w$Y^O/Q0@fN9mwY&d[Yf7yx{l^]4@xRyJm4*8.A?%@`z7Kg^f-C7O[,>m$' );
define( 'LOGGED_IN_KEY',    'AN=lNFWt9A-X6?Ox^%I!{w?APw@^1=z12Gyk,/?z^h5!iSu7z/H8OpmV!wDU.ZSh' );
define( 'NONCE_KEY',        'ci?!N[<`y)y 2au`+.a]co*HPvm6RHWGL6gMD0sC(bXG<ER>SPpRLznC:^rDkhW ' );
define( 'AUTH_SALT',        'Q#y_c<}Z3n_2.8+Vz;oHhBI>PNGf!&SV]L h7G7M7P~~!z|?!zj~;$Ib4b5~jQ`l' );
define( 'SECURE_AUTH_SALT', 'i>&~=5}Gbr-v 3!yZ#ux9eQ@1R1`qIlFU0or#bT.QGcxM=4H.c!16>LU5tpq~bqa' );
define( 'LOGGED_IN_SALT',   '<ZvtjfF~R8&H|GW/U2d# -@):)@|>?)JPcZgq}ymAjgh{=r$#m1W[U]Z0UiMVzSi' );
define( 'NONCE_SALT',       'u+F{1ZyZ@,%/X?Ck*I#_(hdGG=j0],8t/45}gw}[JR_aycA s3NZ5gS:mA}-o6D?' );

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

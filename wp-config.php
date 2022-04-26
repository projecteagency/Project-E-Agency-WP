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
define( 'DB_NAME', 'projecteagency_db' );

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
define( 'AUTH_KEY',         '%9+I+wHDTkxS9[J~4ZM(Af:tzEuK C+xqEsBB~#xkI%iC2ro}He62G{e#&`Uj3hd' );
define( 'SECURE_AUTH_KEY',  'uP+:2t:!0_<S8us;hFAbT@S,^H#J[ceFGRd}/w)V/dAfC[wW][q!uvB?b4,fJ6}~' );
define( 'LOGGED_IN_KEY',    '(%ApaHbOE3S~0@(,%(#l`LFmQQYwBTe`9QWUC>r?=`C$ch:N{q)7sic-XjvoPprq' );
define( 'NONCE_KEY',        'xj[g}uwXDff)0IhSp[U0Chb[i9>y,/kw*odq*<X6F.5m(we0q2HmAN|Tbrnh;7[r' );
define( 'AUTH_SALT',        '&qLtxG8 A~X3ioH`Mxq>KIc#XC*z[VS8Ie.AkGFi)tSgb4+H8wHIj3%?`4e:+yqy' );
define( 'SECURE_AUTH_SALT', '(G13jYzR.rD)qN=n*>Xye[)3mr8TcI3.&wofaB%h[xO(%yw|Q+WMMLKVAG:AOmUy' );
define( 'LOGGED_IN_SALT',   'n12_ab7d#(PTb3T=3Qg&bj70]]klE+NsbL6,)M,El%,*]*z=[=qB;inM2}HsV>|:' );
define( 'NONCE_SALT',       ']nqXn:g)P]k,ul $^0>~2o&#bE@D.RD=;.)E(1x_3dM/3.+vLJJ7]k5u0z<.3Cgf' );

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

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'v>r^u5B34tSL/hlqxtDXeQt;(,U$:}E !3?GTcAr_ebT:H:4G6QU&*PMw1zkww+;' );
define( 'SECURE_AUTH_KEY',  'r7Kj=5%<^G6ce1%k0|apnuB#PjEyFqu};t^89teu8C!V,9[DNbO92md;*vqqfj| ' );
define( 'LOGGED_IN_KEY',    '?U6C&BDfp2Ei26MyXJtsIsDop!d|S#j[vmP1G%q|&&sL(ZeilwzD;^>cpj?!`1gR' );
define( 'NONCE_KEY',        'Np)F9(6%$-tL|kC824E}PVanlY@k1Q9Gko|q-l!D.PiPfC!gQU2]:)=w=luc`U;`' );
define( 'AUTH_SALT',        'MYjmJ3?qlQ49RK6zc* Hh/*a]U.cD[5Q(Yt/ryuNUi:GyP#s}vl[{^3:BGMkc91]' );
define( 'SECURE_AUTH_SALT', 'N]x>*d)d}iYu@WXle-s5xls3pvw[3F5e$)j-)c>L#9Ec p:,!Jis/xM)]MlpnWW&' );
define( 'LOGGED_IN_SALT',   'sJsb06mt;.p5%;iV($d.lBZP.]/p<PuAGv7CRT2vwmVTP714~M5+tbf5jO24;;u/' );
define( 'NONCE_SALT',       'sG&R+Dli]+BkhsdsvP8;)JPhD`4O<)sAt/9@J-pvd/Vr8EzrIV /uj+Z<Rh0xeN6' );

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

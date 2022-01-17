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
define( 'DB_NAME', 'shfcourse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'lH_lUSf6>J}ZJM J:P[Y<Q /u{.]k6@+|<:()gf--vO=%`*|y>B L5y,u=p!mK,b' );
define( 'SECURE_AUTH_KEY',  '/dB<k8Fld*QkKS_sS@]$Da.tKE[] 6/csf?f>=R4g*G7+$lI{5EvH|c9^&l#XBJV' );
define( 'LOGGED_IN_KEY',    'nAti-=|,;V@@8(ZvPhkM0_)ZPl1Ltf{VK(t:ZjS1VI@^66zjpDXmKc({Kg%YSsdU' );
define( 'NONCE_KEY',        'pai0CxzNNq7ml#6[;ENibax*Hp-taY,#!Wp$tC1(|t20 4O`Wrcp+:-|cyB]/{m<' );
define( 'AUTH_SALT',        ',hV#fIu2<]q+8*Y#0!n/qK/P{KZ.SVXjArx3`?~s5{1cj(db[nkEgbEiX?!B9DR1' );
define( 'SECURE_AUTH_SALT', '2bIZ4rx*/8GZn Q`FXr#:;KK1xmJVUqfDNNAJ|dZ*Hvc*1r}|,[ca*#mmUY@Q-Q<' );
define( 'LOGGED_IN_SALT',   '88XU2*~g?t?&,u51Y#^FD[K;E]17a3pq.Pz67[kD|Fk:=rFW]IFHv,pWb`dt/Zw>' );
define( 'NONCE_SALT',       '2DuV2^+9QSofjER|p#9d*!OL~f0b9lZ#$v5$M:1Vq8x#&,ej5r)ubG`3JN/ `A8V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shf15_';

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

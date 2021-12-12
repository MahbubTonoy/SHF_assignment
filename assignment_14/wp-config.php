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
define( 'AUTH_KEY',         'UI=:Qe?cv0k4/hy3JtVjw+RihdrR|Mr|D&/I+vDE~A<]a%0lQI kYMqTEzZvul?f' );
define( 'SECURE_AUTH_KEY',  'xke>>d=hJ-Tbw74SZhuO/Za]3=fy=VVJB82j$;(nTlY!;0Akss151h8_J38iO9>I' );
define( 'LOGGED_IN_KEY',    '_D`A-M2ACcD#~p(jnRnHQCpP~8e2tTzzkofavK~*{d`ZVo*IrJEQby:<m+VQuVhN' );
define( 'NONCE_KEY',        'J%->)-x?rzy+G91ik,lTS02^aED}C]dT}S,fCk(1 mH}!y*DGpv)CQ3ft?uz/X=r' );
define( 'AUTH_SALT',        ' EQe<|c*0(boHX=Uq_yff]98bj! $c6sDo`Vz:od}=OyqbT`$)225YKjW}CunM Q' );
define( 'SECURE_AUTH_SALT', '|rXQw$C]lebiU#5Q%nhoId[_L~)FIl,j=rwn8{7I dNWaeF0_X9 l~0M7AB:MM9h' );
define( 'LOGGED_IN_SALT',   '&B3.W.#%rr^E@:7)}9A[Vm+8:S<d,iU6ndm,R;Ms#16@UsKMptS<9$pl}Ld!%*cq' );
define( 'NONCE_SALT',       '_=I;Sv|hPJ-kt:o$|>=X+ADdT>G[|E(wmd?Rp2g6DseQr@uA*k|vwA,+{^r<U2+Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shf_';

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

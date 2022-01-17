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
define( 'AUTH_KEY',         'P Z;roewCpq sDB}P^q#s{p4s&bjCz2rpROAa7WK$+5v=iRnxz^B-cCob_KuHw&)' );
define( 'SECURE_AUTH_KEY',  '|pH8%a4rU${1UkBcpl%s`.Xj/O#`05;4K&iF5TJC1p2S5qY0|Ddl2/fMexe}LVeT' );
define( 'LOGGED_IN_KEY',    '^9jc4|4N_RF9^5!y@+S/F~%=O*L=nd^}I*I|q=0/@1d4[S,Nuo/#+jiwO5t)4*pM' );
define( 'NONCE_KEY',        'i><]9]E9$^P>q<F(;NNp_~O}E&KZLLQgds0c^O )ng]j8%cTYAGszdYtkWV_`hB ' );
define( 'AUTH_SALT',        'K<j3QqrD).(u1_l6px}s.C25!`k}&[tbB@.N .S w`dq6#*X[71i930uKryDSI?4' );
define( 'SECURE_AUTH_SALT', 'U%T?z#y6|o>.L|^3E_C.jcd2yR!4C!e7gccQ2Tw.EAj[k5/4.VuV?PIyE^N3e#rR' );
define( 'LOGGED_IN_SALT',   '}N;!7l1=U1-YO9l.]:E;rD+q<vj@V}I`ubFg1]e!=o86NvG**5Y?5[cU:mU[>>.x' );
define( 'NONCE_SALT',       '.Q::7:W$2=.Jy,TeJR/*r5-IfZ!cU.,vV)b>;bIL,yQp?%RTY:dt7wJHx!wp1a(D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shf17_';

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

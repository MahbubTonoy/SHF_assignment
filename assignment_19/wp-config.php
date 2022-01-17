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
define( 'AUTH_KEY',         'bo)4y~A;8`&;QBi%+duJ+.DR6|0-^)m_|;|3yA6*VN%Q|NOZ8-&dHCkKj_C0wL)%' );
define( 'SECURE_AUTH_KEY',  'xhEG` e}dK#p@#MG)t<_,PdM VnXx.| v[dU[y8Mj4YIu3x3P1:L ]Ut1u%EG+jd' );
define( 'LOGGED_IN_KEY',    '6-6;CE)1;T!(HCqI3xLg,=I*q^4-&9/GV)DGb?:zW2i*T]QM5`z) 5f?A/Us-IlF' );
define( 'NONCE_KEY',        ');A)/4d, id-lD=X+|P~GDlp!TJ2EvTqqdM4sd/F2FVp.RD~)D-!:C$^8UO}bl0%' );
define( 'AUTH_SALT',        'umRab %8O *MaEpRLHwE$FNKGO$X}bgRa>k_M/l;B 44&_/cK:i*}zn?TxURr$gz' );
define( 'SECURE_AUTH_SALT', 'v?11mgB2P5y[d/5@W+U ajWYn&MJA=/9pJ+SW(A(kL8z26{wG]CMZfm7&c)X/X`(' );
define( 'LOGGED_IN_SALT',   '|ni8Ny@:HBU}1uk;5z/^Aow4zKY25t;M^TgK8PVDnn0kE1;0rJdhvg;73s(^X?1g' );
define( 'NONCE_SALT',       'h0,:i^=G&;UNbEc9{HhnEhs*s|MQ()mkY)Y446`%v&~egT0YD)?4po>&x#$jn3vv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shf19_';

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

define('FS_METHOD', 'direct');

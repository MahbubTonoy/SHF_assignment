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
define( 'AUTH_KEY',         't1S5~4%6!c/^qo`OPY:xR#^<Z)ED+d=z2S;.2:S@hBo=DUZ=W]W80w:=;xEi<IS+' );
define( 'SECURE_AUTH_KEY',  'gyQ{4PwFmN{)-L1Dq&A6W?Vi#?syzbG7srgvPx^,?CPR#%q_yZ3Tj%o{5fYdK{A}' );
define( 'LOGGED_IN_KEY',    '4~-C(4xXZn?lNoGrb6ElZ*A%CUU|Wmoa}%@3F@h.q7f)@nm[)Dj?[ELC#A`w27ry' );
define( 'NONCE_KEY',        '(4+i>y42_ =LY%VPfJ?dG(<<P>$qm=v!w0=Mn*(+.<eMJ~UxsI0]&g}cG1p3:Rlc' );
define( 'AUTH_SALT',        '1I3O`8D?b.do,Iy3[BWJ8UqS{4c}=<QC)oz(tT(cc0:.KEC3j8$|Tu1+%>tlT]b(' );
define( 'SECURE_AUTH_SALT', 'u#2T4Jn*#>Y)v-mSk,R%;QI]TM#[Rlh~xKwW<|-C1wmz.6650UN N+|z~o ooBP=' );
define( 'LOGGED_IN_SALT',   '1q,H[Cf7TS7U.)Z$u8<IrnD7@[XOP57({--EqOS|Yf!xr7^[9EEIDP$nDnr$ MW^' );
define( 'NONCE_SALT',       '+;Rf)<-ZyR)Ul#e~Ij{gN3B%I^g+#[=[FId:?wYUi@Lc+0)ecfT@4)/xBxdt3rC@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shf18_';

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

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
define( 'AUTH_KEY',         '3Qa3Xv6:R$Z>MzhX`Py(RmJe9.Yvv*74~`aEpd=v7bDU+A15L$mEt=6TkSW)MIco' );
define( 'SECURE_AUTH_KEY',  'b>P+:~SNu0~5~[<+pQ3^6L$`~0H2,0>314<1^3rV=du#/x(E~D$2Ts,/!_>]]o&C' );
define( 'LOGGED_IN_KEY',    'iNh7X5JBPBhRlt]M.d23]aLu[SH[~pv9gRhtK%VqW>GA:SW})U^i6%M`j5vzraUs' );
define( 'NONCE_KEY',        '9q#0^dc]>mR%gu#VEGr/+&tQ]C.G%SvjcMA(*mMzsA($0Gn|g?-sAm<^Kt5MSJr_' );
define( 'AUTH_SALT',        'RYsR3iVbY?h7)*84FQ/5-<U fL!I-+z.jmh.v4,7b`9c)G}e5!bg_+mikGnZ 6${' );
define( 'SECURE_AUTH_SALT', 'G|`@DfJu_,zk%8AXLjKLvUC/r<H3LA)$3e7e2dq5`Ia)8~CKWY^hI7(9n3<[CA67' );
define( 'LOGGED_IN_SALT',   'hi2=Qr~lI_s[3 purV>{u}m,Gen:IXg-1_U4ZKIuL>V+6W$0aFx4d}BC=KO:%a,@' );
define( 'NONCE_SALT',       'IS[UE/-{T4M%CKEQZ*1[O_58wT=d{+>S385kV|K)q<]N&FKw,Lt%R%V(GOQmJO5e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shf16_';

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

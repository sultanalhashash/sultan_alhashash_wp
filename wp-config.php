<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '~x^@$uD}:%x@Mw%P?[K`Kd1R-;*Oa/CU`m#;_q1sf_Ei:r?w|C}^j<<J:D=Z+f`7' );
define( 'SECURE_AUTH_KEY',  'YG1T4v:#k&!%5?kSzJP.8f_eY~h5S@Z1nZ`tLh][U33(jEOpL40(?#_7#s0a{u+B' );
define( 'LOGGED_IN_KEY',    '$1IO/x<w~J.|% N>aMCe{<_Gkw.v038= M[,j zf;](Tm8Wp2)RpVIacoG2K,(_2' );
define( 'NONCE_KEY',        '6(3pCc!e$To )fmf4rd#q&mIh@gF:`[sBNU;kwNX|[,G,msWWAJ+X8WY;X[4}<M.' );
define( 'AUTH_SALT',        'VON0>d7kXFajGT8j(Bu7fBHPdt<.k#]f9Yw7*O7UHh5?4C9HiU5~~ivLLboUTor ' );
define( 'SECURE_AUTH_SALT', 'c.u;*h6f#OD!5d>e+F2$?`C=nA22p~2{n^2:PNG.U_|bO*hZT]me_&nNM*T`P1_i' );
define( 'LOGGED_IN_SALT',   'DcuC|![sQt_]:81;4%8hn3bum}a<u-A%+Q,4rt|erlOD6 u=866bBcO|Kl^J}gbW' );
define( 'NONCE_SALT',       '3O*k04wcbm8{=B,^|n=d7,2zZuCxC5@$=ik]qtg=o*i.r!wtNnP~18Uo8^S^ar*T' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

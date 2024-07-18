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
define( 'DB_NAME', 'SD_ID' );

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
define( 'AUTH_KEY',         'gH>owd,y<rCFWb5H35}|2$S~=nv!T%%xU?j!lnu@Xzo(x9`m(`ML1X6~Co5Cob]<' );
define( 'SECURE_AUTH_KEY',  'Pj<aC.FkE`?d#z3}dj%jbRPX0s@$9HAa^.hChO}U&:BBvka9T!>)JDgJ9=ri4BXK' );
define( 'LOGGED_IN_KEY',    'p)_rLh;[d~S_17dDsCaFv(6QrDPWCq+FfZOl88#KOxdDH>UI<Ew./U5H{11-$TK4' );
define( 'NONCE_KEY',        '=n122X7%ubfp.I7am*_z$-c^pM2De[SWD:@9L1qi.t4,Th]9Cn*[UWq{V)cOsK[n' );
define( 'AUTH_SALT',        'Q8~0_tK0*a&Ma:1!j(#+Ejm1z+sT1I:L30f>,PJSdlj8C;BqT(v(;u;Gmc:InHfQ' );
define( 'SECURE_AUTH_SALT', '6QxC ZIJ?ARMQz72Dm@P*T7fE8C._#2x}#dN|HV/J#>U3[qrm<C<eWTVM0_}ZL_w' );
define( 'LOGGED_IN_SALT',   '.O]qB$F?n>.8y:/n]hr 6Q%>]Yl,-au7)jTj`l6$.//X}%Ll;E4wEAHb@yrt-p#t' );
define( 'NONCE_SALT',       ']=oPW@#}mNfG5oqbBy$mTf/@ohCUI38@nVi%7x/J.r/1kAa_ztRD%9]O+1M1J%7f' );

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

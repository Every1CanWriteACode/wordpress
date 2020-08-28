<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' T[ A:F+`qMC ;1;R48n<=~M+4,}kBW&)zLx^mmXfDLXtJ}Za;`;hHFoIehn-h0R' );
define( 'SECURE_AUTH_KEY',  'MZ*mx9{ jmE8fJ90X]g[o_Jod`aS~K+mkZ4uW%Dr>zCT-4P>&9@9Q|4>OXXau*Fj' );
define( 'LOGGED_IN_KEY',    '`,_?[Y$l}gkSH,z{M/IAyMJtWY4l<E2;=u`zF#K.m=If-oMD,A+TQ_TiAc .]#)(' );
define( 'NONCE_KEY',        ',l 9y9}q0b)~VVO2mS_xM<o)pW94dsQ/ ]>WFY;Q0,)pA%yQzS=vrbE^KS$l|T(8' );
define( 'AUTH_SALT',        'zz[xVy7vY4vt;wX~/LAkV`dT=sFB^My;&!w}tYVV *;ZA,l{5jcVpHNJ;t02[$*F' );
define( 'SECURE_AUTH_SALT', '*5WF~IuTw$vA4AR3KpR1ni.#Zh*6/j;N?kj{elN{Vg}C&C~n`H/(D[t1h^X%KALX' );
define( 'LOGGED_IN_SALT',   '.VLjZLVOSe[*(W]GB2sbZ*ZM$0s#Uj]Xr,(4PeVS*SS4~>D$+AqYvJ3L[=3WVc;~' );
define( 'NONCE_SALT',       '.bt4?e#zgA:Y[ ra{-NQc-1DUDS5aV%)54xlgYM0Xl{/{hTK+y;~bmd!XMUQvX50' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_project3' );

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
define( 'AUTH_KEY',         'yY3V i#]FY6ZIjO_r@wqrE`m;y USbD+cCb:$ew a-TZfkCQTYt]QWBt3C^{&V@=' );
define( 'SECURE_AUTH_KEY',  'gpfLoe$YVR2p2L+[_Q/5bNOcM:/-$**s5o=aRvyMe-_K[1uV;k~:OXb%b&a*6*yN' );
define( 'LOGGED_IN_KEY',    '$7@aUOC@Ie(46V317}!o0HAtzR2bZ!Z*aA; V8=${pYcTXlxz}g=]y]HU]u0?-m$' );
define( 'NONCE_KEY',        'PiTbK[X.=nnR.JD<D6M!.3b:#&vamtxY><jI1iUFiX=|m]@v/P>W.9_1&0x1HpQ-' );
define( 'AUTH_SALT',        '9gT6PvsViE]<SmQdYS?T55:Jtnh_<V;)%:te8/)&$r,XK~<RCpO4JP:!/QJ2|mrA' );
define( 'SECURE_AUTH_SALT', 'W$Loj1+*TS1(]mJDN$yhV^BHestY7B5-~GXkzhK^X[1.~ @U]LsJ_ZEQX`>WTz%t' );
define( 'LOGGED_IN_SALT',   '<+k,ECP|W(.W FTgG-G,mkI6>Kf}PYRbsm@.]&RUyscJ)pF8)3fRIt;6y9]o/3E.' );
define( 'NONCE_SALT',       ']9!jL,LieA1c/$IF55X6dry9?rb~C_,0|^kjtl$ 1cN8W;IgXM_XfJ^#d)6%%l-R' );

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

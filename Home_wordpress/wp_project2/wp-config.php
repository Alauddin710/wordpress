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
define( 'DB_NAME', 'tokey_theme' );

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
define( 'AUTH_KEY',         '%e%sb2%5Q|)fkDI:HwGsR-Or5KqL^wx<y9eBbi:o =8l<f;xPPvXY.z:ihpA%f8+' );
define( 'SECURE_AUTH_KEY',  '/T/-*+[rZ8}~of<*MLjmG,!ukf,6cAKwJp4f*3U6K~[wRp5!>L>4QA../X6UJx.)' );
define( 'LOGGED_IN_KEY',    '-S-ChDmcO6)QuteoYQ^TNR2HPuMi<d{&xt ?1%g9H}r+6Sv4jjPGC|y7adFOF&:g' );
define( 'NONCE_KEY',        '<?_/^Lm<]X(L| %@%t,Eo u~XWW)wk[G^3JRTyv8S--$[M<_Nri!rC7^2Ee!T#5U' );
define( 'AUTH_SALT',        '5=2qm3c1K9+Yong:MbA4x9?m@z+QtFCt9Mmbbs+KNX.}hr%hU98!}x{viX|K|+-@' );
define( 'SECURE_AUTH_SALT', 'sML/3BdvZQi~kT{9=k*zF,a>4Nz a*[_;vS>gii0ZX%KM@ 0M)#=FoAUFTd3_ay:' );
define( 'LOGGED_IN_SALT',   '%JF<x/h(&`rKGB?gIO?igCs:Doc@sx+*L],X-#KD%5UdVK{.CeA*7){ $f!|mb2P' );
define( 'NONCE_SALT',       'XIeLwLs?{K5r{LO,}z1TZe;Flq=a~1L2$p0!%gm$Q4B,&s>R&r%0Y7&7F8Y7IQ.x' );

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

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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'kT:uWfdq+]KNmuL79vciLYSc,Cx#8[#-?Pf).;M9gq2O{S?3TmLm0bk-PIek|*{T' );
define( 'SECURE_AUTH_KEY',  'J2Z-ClX5j7xk$n*C`o1v!gQ*#:wj0N13Uajlw,_Oo__[BVf=$N%e?UX7KPDO9#64' );
define( 'LOGGED_IN_KEY',    '2K[po[+g;=%sBge^2 FTs+Xm}dy+%ttc3e2<q=%bQ^E^wggn]hB1=2vyJWeMqfwV' );
define( 'NONCE_KEY',        '|p!RsH3wFWqeGeX<o.bk0HxJR]gs[]G$zGg$GGk&JoID?@C!X^Iqe@/RA*j}|Wzi' );
define( 'AUTH_SALT',        'D]96puoNVI1Q Tc[A^$8smyZHu`o@4Ze,)2_9X-K&J(2HHx{;4*zl7^jqhdwE|>F' );
define( 'SECURE_AUTH_SALT', '4h5#[P8D@5l#%o6nrBv?2|gP{wc%XJx 5o;*ZT$J2r0c1CSN}iD65fV)}+K160#s' );
define( 'LOGGED_IN_SALT',   '*E}-ZX%+z08Op1>2xP-i:(3$=]]Rh$|6>|e09JeK;Ckb 2PB6PRa8g<I.Hxd^P.&' );
define( 'NONCE_SALT',       ']IScx6<gW=&UJ) Ov+X`<NZMwLvIS26!65&P-rJ,G;@t3t6#=^M>3jU)~O.P/VVB' );

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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onward' );

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
define( 'AUTH_KEY',         '@DIvoo?8a,C>?MrY(?s!uhHh*|F`k^Ls OZJTi7yb9qhMM[.YS+|t83%-cdVh}<9' );
define( 'SECURE_AUTH_KEY',  'r_^@B3]y[j:#Tv03VIpcwS^=i;or{)GzPnpY 8eCc,;=Ug(F4=%CM|!-xS4yRaY ' );
define( 'LOGGED_IN_KEY',    'g5P_?7X=lfo{MD&inL&AmY`;5u[>#&K,~}qx6$?wTzr93c6ESkRg^dixCs=*K^^i' );
define( 'NONCE_KEY',        '4vc1Y2*:pAc1={*4kX,3hf[Yc8Cvm4RhE(cFPL^=*YWYfez K,eFmjQA[I<>dPn]' );
define( 'AUTH_SALT',        '.Sa6p6a`NcHrc8C3HZSE}]!+]8E6<C|2)m6JwE`<lBl$1}A6lNI+(Tv%bpN:ct)j' );
define( 'SECURE_AUTH_SALT', 'GB|mb{>fAxoQ7^^8O@}74y[b9U(J#,>Qt;zkX99!8MBq?3#}87~~v?A/59^D)v6F' );
define( 'LOGGED_IN_SALT',   '_T|+g0!aL~sef?]5QNSwd_D+Ayrjtq-{w0b.Q>xBoHi RTNwP1,gAM_i!AZaAzIt' );
define( 'NONCE_SALT',       'O!&2IM7=>mGI(AQ5t(t(?%Xy4D|hG9<?IZXLX~N=1uk1U8mh;j>(nZtM(!n_+yr_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

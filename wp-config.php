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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'efashion' );

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
define( 'AUTH_KEY',         'zl(AT,)$3y[y*AS><$;|178EW.3WL)e,~`iH1_qE-t)EQ>W5(,IQ/T-MNN]:n1Wo' );
define( 'SECURE_AUTH_KEY',  '-VFPIQZq$|$tKk]:l>AgUNS]}zr00tT#Rcg#e~ZBM-sV0u_cVjpZjaFLCk*Ttlw}' );
define( 'LOGGED_IN_KEY',    'b:nj&;-c1^LOdQcK9la.{c%crF.9j= Um b$[pE8,2k}]`2+` gFw#<q0ETcam65' );
define( 'NONCE_KEY',        '?6rj>N*mZ0,KW2k*A,J+Si9%l;tXQES,|V$DncAS$b$Mn+i.Qh$$-<2mo>I|,LX/' );
define( 'AUTH_SALT',        '*m2TpB!5{L%12::r{< kj(T?>,.B|b_.hLOJjkWN8uukE?H0W2 <aOX4Iv5;Y[VK' );
define( 'SECURE_AUTH_SALT', '@5wrJ@6rR;UEP;#g:RD&&qlJ2luy:W#q^s[u$EteQqZjuCzunBA7M!m~*f;EtP]M' );
define( 'LOGGED_IN_SALT',   'ue=5yERfqiq4~+:gE@-}b;.tk{^TB+-0o^7{@`oh38d6Y~T{/)`O8tq$0[F6Ot^0' );
define( 'NONCE_SALT',       'uSJgS<H>bE<r~D&``6 fhJ>rVH*kvi1/0qw+{S ^Q:W,TcMpCJ07Ky,l!$D=5lcm' );

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
define('FS_METHOD', 'direct');

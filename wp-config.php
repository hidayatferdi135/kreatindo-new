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
define( 'DB_NAME', 'kreatindo' );

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
define( 'AUTH_KEY',         '/jMYA(MNVK={twF{GOt:}j?/PZ(bwotH$SeB3xf5p2XcW7fTtv?F</Au}!U<aO#X' );
define( 'SECURE_AUTH_KEY',  '}@uHC+RM<z}2wj,Tq3)rV=R.XP&n|=aH2?pFVHEX*Ev_z3HIt(C%*}Q;Cb{)]RiW' );
define( 'LOGGED_IN_KEY',    'NRty:YB?n>G .yCJK czgC7xi/@v/)&+2}Z0L>(,@qLcY=T1G;T4GK*?9Hhyx&<P' );
define( 'NONCE_KEY',        '9&X gil4Er/j>D2<p5S/i{}6kTLjteb|;bi#+rDT/EiN/4#B^sR.yF+X73OU*MF6' );
define( 'AUTH_SALT',        'nfaTIAa;^=;32rKG2sX126qeXev=q>:3mfpumMj`yDcHaK-Iu9@~xy2g}Q6TlcCe' );
define( 'SECURE_AUTH_SALT', 'Tz*=xa*F$mq:ILy7ZnwGu`!K57b[F@sajYuX:7/N|CY3mPg#u02a~R{#;2uE[R[1' );
define( 'LOGGED_IN_SALT',   'n$Z09k`-HKP~B(bFh;A<;/n4LeZ)?Aby+O>gqscTD(hPXPBrv:h`l?1x]t{urpY<' );
define( 'NONCE_SALT',       '0:$(ZHc03(hij*N%4js(<*B!C9x<A4=ygQ;eoxIcDBQ~mwr>`X?bp-6~d2{Ck=%|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_kreatindo';

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

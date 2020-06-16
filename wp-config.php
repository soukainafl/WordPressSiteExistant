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
define( 'AUTH_KEY',         'j;7Al,j_fP;lBZ4xr6@jejU!:A6nI{n1,fbGwYLl;5yFJ?)Y9+1KZ4-k1OH){B}H' );
define( 'SECURE_AUTH_KEY',  '#:n5%wU0jed eX9~}3CtBz@YS~k@3oSK:>y&I%^2B> q)}*Y/ T17}z&b!6vz*eW' );
define( 'LOGGED_IN_KEY',    '[JP0QrB+6h!CB{?J<9nStaby>:eDwZXT37q{iKt+JBaRoZrc}hiytZsVFDm@f/A$' );
define( 'NONCE_KEY',        'jI#(j]BHQm5`TD]A$<9jW&,g^a[((AuSO952?0.fn,2MJD;%jd >LBgf0qHN1>Ze' );
define( 'AUTH_SALT',        'qQa`{#)e_r:q8D),<p2d3&3TSW@u$~.,ktiw<8m*1X;}wW9pQL:IHMB}2AKp7T6-' );
define( 'SECURE_AUTH_SALT', 'xT7#5b0$ip^qFt#cxL=m0q/Oj?RH3YCzgB)|7VQ3?}.[^in<S.0a4-6t.SPW=W_C' );
define( 'LOGGED_IN_SALT',   'gh#z}9A#PZ>e,&tGKo%g%j<}gLINn/-yrk2XeAEuf_S.<zqCmyYPXlSh}aw_^?wH' );
define( 'NONCE_SALT',       'oi2NY:4=A{{q?lNT=9:/(m2TH`2:*Wlr<-L1*@q7sFiB1wH m+t[ka=J8PP(]r~*' );

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

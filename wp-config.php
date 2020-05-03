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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wzizelmy_primestaffit' );

/** MySQL database username */
define( 'DB_USER', 'wzizelmy_primeit' );

/** MySQL database password */
define( 'DB_PASSWORD', '@PrimeStaff2019' );

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
define( 'AUTH_KEY',         '8h[dr^BH-CzKB}0f*+5aTD6;_yiw<jxygCZ5zEd$pS$-o.?xC_K}+u@v1Z IB@m@' );
define( 'SECURE_AUTH_KEY',  'wsIs;<z[x0,=yL#]^S0B8mx%C~Ksky#t1<>-0[K/Qceuej49nUY<#F|^Hw^7X](g' );
define( 'LOGGED_IN_KEY',    '10!=g VqHfCHgj^MR[WOAFkwFo;(KJt,V4_YU-m8t~z[7}!oBA($![6!r,+}tGCi' );
define( 'NONCE_KEY',        'PwWdXb;boQb-y8,J.c)>sbJkDAyZc0&e;KJ:Ze|esI,BvT8Q%vy([:4/g*j-Ely_' );
define( 'AUTH_SALT',        'Ms4{?#4]6hux~M, OH/-nBKDGZ {NG1dhaAQV6XT+%(4b i/IEq?7:(sMdyl>9>H' );
define( 'SECURE_AUTH_SALT', '_AgsW1nF4E=xMC2 *yC}eUhdA2VnZ|odH%Wx#+l5QI)=)2%Cx:zF:9 tHt}m/_Pi' );
define( 'LOGGED_IN_SALT',   '^0VLTj?BP?DD9<ww>n<CN~P^kjFb*@8)Csrmitm`^9=?*g4fku&@`46S9jPJz@P1' );
define( 'NONCE_SALT',       'pNjCviw2RQ!,&s%Aw[CUrZ?bVNaN.qC^V5lhXo?GtaXyq_L G4Zg$0h%<.:c9EMY' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'PortFolio-Aqib' );

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
define( 'AUTH_KEY',         's,-{[<ip#V0,p$2BVUXKu#`Jb({.qgbePR6RQJ,1$Kz?smO&b8nRKw 9DFE@h; .' );
define( 'SECURE_AUTH_KEY',  'Ql;pLj{mnKU0A]8w{7@nKqUOR%p.5IJdO@yp4]g^[pG/2[$v[YiVw~E~:S}fq;3{' );
define( 'LOGGED_IN_KEY',    '>!163$m}_Wz](lXeIk[9.qa3$.@!D/dSt5m?U4s$i`kTNw[n`^cR[_<gc`2B=:6B' );
define( 'NONCE_KEY',        '_mqcjg|Wy54gD4+$C<p],:ln,3)sOT8R>qKZDukVW/#L?XlTJ$B}Ztb3)>_v!/G,' );
define( 'AUTH_SALT',        '0(r2&<>peuzu,eT23daLQ=xlN;*y zmJ mHYKhbNRa*UV8vrR}H{|vL%{Q>ZRtB%' );
define( 'SECURE_AUTH_SALT', '[Xlc<(Y@GPiZ$f1dSRDu_J+?yp$by8_NZJ^J9Uy+/#b+H;hn2P_R7;OSY%is.,CZ' );
define( 'LOGGED_IN_SALT',   'W4+?/BqbaHm%G-n#n<jbt %#B>@CplCnFe0-WMuADi=I_W|ER,q8zp$!MPPaAr.S' );
define( 'NONCE_SALT',       '[1[:1eKDcu`-x$e0Qk=:UXIU6z.VtvqO.k%k#T~uQQ[` >z/M..W&9e^b[c-hpf#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Aqibwp_';

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

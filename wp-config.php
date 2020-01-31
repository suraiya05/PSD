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
define( 'DB_NAME', '64XnoU3uyS' );

/** MySQL database username */
define( 'DB_USER', '64XnoU3uyS' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cVstbRJTo4' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'NMkKWe)zTxX@M[=e8ea*}k(-YHa18?62EeF:N[`S0}V(~G|M{9kxMmezm!1VL5az' );
define( 'SECURE_AUTH_KEY',  'Y=yL~|@@HS[dA;Wzi!bc~bq[|22A{*I=:3zs.M#_-m[~bQelCY{&/i.!pZ&srUv4' );
define( 'LOGGED_IN_KEY',    'wH/(}r;c49=2o2g5&1Kuo7N*q)/V*O uHT,8m02WK}^S;*lN9W;?wYJ.YUf4|R,b' );
define( 'NONCE_KEY',        '9/g}.8lp!AD[0OYrk&-Rl+*q=_*Dx?#iO(eBuU]Y.M4R|PI8JJId;F0.]mp/wE_V' );
define( 'AUTH_SALT',        'fi H/iI`%ZS6)Yhyt1grv~1:,xjdm5d[#5>g*8A<{%(YVP/9|PD5~DYzZ0JzOjz`' );
define( 'SECURE_AUTH_SALT', '@^I/_tag>s:!v:LgJ]_ktT$bFNM!HaKRjH~TlNJ?m6>@.fz<FZtn}7dCSl2B_pFv' );
define( 'LOGGED_IN_SALT',   'o(7ZXfU9CvaauQaNzm7V~^cZd3m}V~<T@ATdtk[9_w1-6~;p-@:f/7c!}*e>Nq%5' );
define( 'NONCE_SALT',       '5_#H0B71EouCnC+jmU:$0)1.E>fUHMG#3Nm=B]Ma%7` P.DIi^//l@eJ:BNa*$>o' );

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

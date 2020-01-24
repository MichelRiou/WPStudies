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
define( 'DB_NAME', 'flyinpizzas_wordpress' );

/** MySQL database username */
define( 'DB_USER', '155227' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Zt50hhDl7qa' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-flyinpizzas.alwaysdata.net' );

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
define( 'AUTH_KEY',         'J@-J)N{1)4WA`ueFclhd4qpaG(}EsrJD@0/fo,*rGBD~@O~}!RGc;J@KP=3(>aL;' );
define( 'SECURE_AUTH_KEY',  'a5B&t(Au)0qlZMpT=_VIsa,D*7S_Rmc`o~dGj_9mzVpg]mmf{ItoRq=J]+wZ9K{L' );
define( 'LOGGED_IN_KEY',    '<}7y]>r7aD1a6M/[fvweNs0l=W`K42,-DA5Cx7e?gJ.94*9)G)GPU!RfXAQ|f2C+' );
define( 'NONCE_KEY',        'Hr`!1)`m3U;y(- P*KXDb@csCP3!/f!,h*z)gWas}oDIvmNrbDXk[+O]pf,(X2t(' );
define( 'AUTH_SALT',        'A2IZ)$X2H/:>ZiSe{}@oH(@C4vdVY[4f<q)jY85PzGO^TFyxQ4pcd5 cM&eY_5+g' );
define( 'SECURE_AUTH_SALT', '&c_{iW6?]?zeHX4]r&]mX.Mc^NQ$F9FVh*,gxabFrnI<|=BE).muma+9ED!#A Dm' );
define( 'LOGGED_IN_SALT',   'oBI2a}(Fh;q|$$MLwsxC=zTnV0Bur>M+M-x7(jF%.n=s7n*/M=RtD[5m~. J~?bM' );
define( 'NONCE_SALT',       '$z( a}e]TJeaqRj5`Qs8S;2E,D.?F;s/z/zuuY?:&7WQV>/^Jp]XdUtEeC:}-s=$' );

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
 * Ajout d'après captain WP pour automatisation
 *  */
$is_localhost = ( $_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1" );

define( 'WP_DEBUG', $is_localhost );
/*define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

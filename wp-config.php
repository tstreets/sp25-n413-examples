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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'pfZLYknFJJ:M/6Re7[fU;q<d6<G;JC9]#b1-k#O,qkI+7eVvwG.21c:lSY,uE-x7' );
define( 'SECURE_AUTH_KEY',   '-[?/r-+bu+4nY4cs#)*SUK2XZ,v*cLqI`U_]:kCIt+P$M>@T0+DkbP?]2{jczDd7' );
define( 'LOGGED_IN_KEY',     'K%%eu4kDv<zY-T{@Shc*6E._u`6,*EB!d!F,dN}I?Yed^0kLcJz5{gLUn:eb_+el' );
define( 'NONCE_KEY',         'lqi4#)]Fj,S8!@`cc@M2=xs9eK>*n)c|(JJTlAsLo$!$xx(x%>RNge6@y/?e,)ct' );
define( 'AUTH_SALT',         ';u-P@t[Q,MwmC|i3FQASWs-pAnH)S:9H?^wnu8WYLd0*~b#fbGen>j{|fw~+:eY9' );
define( 'SECURE_AUTH_SALT',  '}5{+M+Ac%0$&?;CeTXlPP/ze#Bv(l/GS>JhKRsn($loI5nMB0by4Dl7d[,IL.fu*' );
define( 'LOGGED_IN_SALT',    'NIJ+&h0w|k%N(~F/!+x6r=V+h?[8n,l3PwN7ucc-S>)VQ,pDwx]b6gh+r_PZH}KQ' );
define( 'NONCE_SALT',        '}GICrg~SXxBnt{&h-II?dEzDkL!Q0IN*[Z&DEt<d9?|2(:Dhl/Ei3w93tK~WB+Xw' );
define( 'WP_CACHE_KEY_SALT', '91V9#O;+3#g~u%0L4!@F5/I`RX%m!_6R9NyMOb))uhB5#<WF7G!-F:HsiW:W& &s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

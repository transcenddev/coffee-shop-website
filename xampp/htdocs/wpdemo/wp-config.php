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
define( 'DB_NAME', 'wpdemo' );

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
define( 'AUTH_KEY',         'D5C-~;D3IIwFO-h{dhr!Pa:Y`eE;),GkR)?X!k0$i/7;TAT;4(MnY;9N>,H<,WtQ' );
define( 'SECURE_AUTH_KEY',  ']I|j3]`W]M+_Iep<uxFIl GPA +TmU*>3GTH/t;3LVC!O<:/@NP5[4`4*^Vn@?]&' );
define( 'LOGGED_IN_KEY',    '>{?=[u@|{h/*uf]gw_/UE<LEcKsnL,,Zh0~>`H_b7En;XbVA;|QoZ,s&_j/mO]#1' );
define( 'NONCE_KEY',        '{U},g2MI/h9Q3w,9hEuOp7T`C9u5lTDv~xi2h>o?.;o$Ny!lD;yjRMypQsq5]4n%' );
define( 'AUTH_SALT',        '#Xtj/A&wBTyT/tdm/1]Ih5t@alu>y(8he&ath_nE8&B/D$RrfLz U:`FM8xL]+s6' );
define( 'SECURE_AUTH_SALT', 'l.Xq81IvxvJ[91_G+&PPFaXYUH`Hk29Mx)2UX2nom`/%,P<+bQX <jo0ew8l$wkX' );
define( 'LOGGED_IN_SALT',   ',Px$H&G$l#k3uvO#jB8+$fad;BdO9vCS,>Z~#yc><kL+BQ@Gt5D|4{6~g1+vBvqa' );
define( 'NONCE_SALT',       'v^FD6IsH@/~Whg]ddX:}nUQKkW1-ulbdMGN<U@fQ,OpR*Ew%pg^3s[1ZJ|7F.XNS' );

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

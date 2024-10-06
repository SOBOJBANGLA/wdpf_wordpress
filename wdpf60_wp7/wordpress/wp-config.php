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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf60_wp7' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3310' );

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
define( 'AUTH_KEY',         'bL<d}j;r_cYt%RV{Co1W{wI`?P`OOZK8hxwAfZKg@l=~A=pO^hj~3Ym w>!#e0O6' );
define( 'SECURE_AUTH_KEY',  '%0Bvk!Q0hFZZH]jsV_;9S8:hR0BZ1agi_c)h.x#Ar3-gaM7evfA*/eTi_W{|X^A;' );
define( 'LOGGED_IN_KEY',    '&IP~v<qE:D.c=VC~Zto!|S%J0#9J<(?<!_^L6|{gWaXb:/l[w]MyjUMj%3roy~tP' );
define( 'NONCE_KEY',        'D-k2vf-A4Y?w0u]I=I~v)pb=is|>VkUt4chSE#=a5C=L>Yq^h?&QbV2D14XP+HE2' );
define( 'AUTH_SALT',        'v))y=*Rz5ZV@mE!FRR$3!u,d3rGqn,N?l%Q[nA(nn=M9etIEF|2_gQYaqXO6[zos' );
define( 'SECURE_AUTH_SALT', 'L#e`YcV(ev/Fi.^+&JFbzlQ1to[tP)7P4Fa25Z,%B;@0NedlLApq~#Mv5tr_8QhA' );
define( 'LOGGED_IN_SALT',   '}EsQB.HbSqz6-c1gY*Sn)%px?J`Sl[=^,Yc}m&<4:nsi-+-ZiZ!Ih4.w+b0oTgYW' );
define( 'NONCE_SALT',       'SGs&XN<1^g{B;RIMe+N<@:5>zN}Qhe$h.FtU`fGe7NV~V%S#k:+Na(Q<_x~;G:Zs' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

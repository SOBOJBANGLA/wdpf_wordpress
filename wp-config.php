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
define( 'DB_NAME', 'wdpf60_wp1' );

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
define( 'AUTH_KEY',         'E*,AOp WO&e$ vvq&0xkPUO3[mN9-5m`6$#NUi5g#]?[m^iwn?h#!lQbTt~u_<uE' );
define( 'SECURE_AUTH_KEY',  '=Am*s{n(_ts:S9r&9~B*cUgWsN8_vX(YcHoi] FoDQ!c^qAz_e+(Fbm)y S,pSEX' );
define( 'LOGGED_IN_KEY',    '^Vcx FhIRED{$<.i2#G?QKBtP^?POo.:+n(vpkF9BgiVT#!!_pO-YaX:t&z{x%wZ' );
define( 'NONCE_KEY',        'v1WICC574u423.B_1e#+hs764^9%BdNbi1#d|}4]ck64owBYyC7wVPc@KmFKocyl' );
define( 'AUTH_SALT',        'SPfFWtUqJ ]b%Q7&d#4`P5lF`~0`V&&#+6=23F_k2r6P*Z|7mkxzKb}UE#$EN7Z+' );
define( 'SECURE_AUTH_SALT', ').poo%:BQ|I59=9aIKQeykd@# (sx*vCgDQ^$_T)t$(|Vc.0_qLT7X4D94e>iWL2' );
define( 'LOGGED_IN_SALT',   '?bk3k jH3@B94?KP01mO:Y;+^5XR^eU?DSjv]*T[KDQ0b@h*0<+pB3(o7La7H+,B' );
define( 'NONCE_SALT',       ' ?VAku{%S*CPENV,;+}`decG~%7q`]uZBVdkNdyeUR|y@z+$8{TJ.LUg=[V6t+D,' );

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

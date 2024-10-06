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
define( 'DB_NAME', 'wdpf60_wp8' );

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
define( 'AUTH_KEY',         '}~bd~D-0!h0Zf{9avjeV0BLlF;Q}89!HUBrGDD!k)<$j;B].c2g-[+hk*xW;jLZJ' );
define( 'SECURE_AUTH_KEY',  'R~#kX@gbml7x&,6DVe*xYqi?me,-hBmSl)%RS?(P?u`,c?x/$ zrfvkOC}u(4N~)' );
define( 'LOGGED_IN_KEY',    '!Ac>k(rP8VzeBei?YKxVyc2Ox6g1@R](`qv8n,^&?w|`aDT) P+x+BEv=MxQfK-k' );
define( 'NONCE_KEY',        'w/;xFW[MhXSuKoj#Dcfv1M2mT`i,({did+pwE+$<RDZP^n_utzi.B2!Atl(PF6dw' );
define( 'AUTH_SALT',        'gJr=g[ilKraiKR-5nmJo;m4_A_VEmR5XE)?eDk@+e9m7,z/2)Gt.NWvnJg,l?s/q' );
define( 'SECURE_AUTH_SALT', '_9y#$1lj7)jxkGL}2$br>ng%(AkjAiocPl`|yB9P3js:$XQh_M2EI1WZjUZ,cRKr' );
define( 'LOGGED_IN_SALT',   'NJRB2jPX<}K8LPoa_Nm-tvc%mGn$ll8y1n0T` N3:`%$k!SNx/RiE/JX#?C{J@DS' );
define( 'NONCE_SALT',       '5E|G^y3J;SK.AD2!VzXAs^tHOl:i%&y]&Q(@PW|_+Qrx:}Y~Mkg-GiWv;-_5ys6`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'idb_';

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

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
define( 'DB_NAME', 'wdpf60_wp9' );

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
define( 'AUTH_KEY',         'C?mGY+vWW]G1B ^U-IN1j+d|;}zyo0t~Z$8A3%.2g~I+`^){~S^]K|gP~L!Uz4b@' );
define( 'SECURE_AUTH_KEY',  '4I@5N67E1&S1YZ0-J))[m0iP!dd:Il3^aP2!vHBAr0c%b#;# (Q Yw=zH{v*TGqW' );
define( 'LOGGED_IN_KEY',    '2;t`-kKw+?kN}ZTbF92bs%UC2YN5[aIv$x>[W.RN7rI[)?gJw2Xq[<E}<vu$?Y%=' );
define( 'NONCE_KEY',        '(gwJ/wJD^)%9b?2D;,t7&ADYPW5gvDODp*-X{;RNo|a&ASA[m&oKzW-}O*a_.?hv' );
define( 'AUTH_SALT',        'f(&},k]6Z3gTyBbo5x%>R+rpQCE#j3^|rD]YXM}c~wr^i5BvX=]4u,?zLM}4->O~' );
define( 'SECURE_AUTH_SALT', '6AD%W-tR/3{Q6v.wL>hnD|udZF(k^E=9y.J`w@BBV>`A3qN^dH/?#i|W^gHt%^77' );
define( 'LOGGED_IN_SALT',   '_#8S/nUVp3Z_BYtY6nWPI%I8&CGOh.e(BJBuF@Y0Vm->!C]y_$w66X{.n?Lib7[Q' );
define( 'NONCE_SALT',       'H^]ALk3 ap4w~`Y3sSa0S{4qwNiiL>>a<cP5NuP];h,L4~w_L2d8K}x|;]wJh3=|' );

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

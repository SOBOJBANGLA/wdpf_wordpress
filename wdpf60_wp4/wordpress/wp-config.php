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
define( 'DB_NAME', 'wdpf60_wp4' );

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
define( 'AUTH_KEY',         'Ifump7GG^6n/F#xjg6V@-hYzY{`=u2W$-rZYTsajxK|`0Aa?xN`B}agFlyB1VR(&' );
define( 'SECURE_AUTH_KEY',  't!.tTz99D|@sun$(jcv}Gf%?9xprH_A^@.IDi%/h=L2HM5chS)q-fdd:4J2J6i?c' );
define( 'LOGGED_IN_KEY',    '%d7+~;~(Mc`Nka}#}y1qXDP5f^|9p~VhqiB6`#gfir]h;vaeE2{$d%I<.Y%@}m%D' );
define( 'NONCE_KEY',        ' E#&sHRT0_ m-Vx =AKIC9N@/9L}SQpoBN>%bR{j=Tx|mBeh.9NdB,&C<H-s9Z7i' );
define( 'AUTH_SALT',        'Cnrw fh ~bB`&H%VJIiCd:~$4M>V>ZxE}a1s@2hpOQEe8gk6^Jj^$btYb4hw =]F' );
define( 'SECURE_AUTH_SALT', '%1,9sg k>`YH.:_1sJo1% Gl{S,ucS5rYDJHAHdPu3A`eDT,Voe|rX?$n$M5CkS~' );
define( 'LOGGED_IN_SALT',   'mH#EIV|v+m]:K[^d^Ox-N1s/h{BZ%h;}BW??k;tD]uE{8raY01n/bVmmCSL(Xy7a' );
define( 'NONCE_SALT',       'ReD! GN?ahVlX7_sPQ9h|>g}`4Qdt+=t#~6tcEL7q|CC|.U`Yoc15vEzrFT.?q1(' );

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

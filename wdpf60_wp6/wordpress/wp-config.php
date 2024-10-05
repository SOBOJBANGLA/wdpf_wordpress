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
define( 'DB_NAME', 'wdpf60_wp6' );

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
define( 'AUTH_KEY',         'EYUcx%hE{i)`L`#B4;H8W*usj)JK:BFb,0qkSss;1hXVUzK}VQ;hRo[~f-JE:hP4' );
define( 'SECURE_AUTH_KEY',  'o7%_LsX+f[CiWV)T)4?Qhc`0 N]88d<o@(aT/eE0 Q YOMT]`8=BiRX%cQ[r@BOj' );
define( 'LOGGED_IN_KEY',    'TKZOC{ :y:q{D{{X}z:B6PX1b{l#9@2C<QXzJ3c2]x+EXRSt$t4`0qLhFt,I+[Lh' );
define( 'NONCE_KEY',        '2%r#]#t#Sl>rm`~69ZRPl9hK$KQ1es7Q+walu<}{rd%Z|ZltW0Opb7(:#@b61)Po' );
define( 'AUTH_SALT',        '[D*.(H@Ay>aXT(F{@nPzw;06B[rT/T_%!RR 2ldat8OrewPQd5CV<!tG~9b>IWd!' );
define( 'SECURE_AUTH_SALT', '-l?9u~}s~~GMJw_hZmx;b,=dzXInF!@w6&!bL/vq%vyG)Z%Fk./U/Ir`XX5K~hYF' );
define( 'LOGGED_IN_SALT',   'q{G^`Nie:>W0Ndyl.@8T8J+}v-j^}I)>Ll:kU,FvblW>u<EFh.Ful^9FocsfV:Q>' );
define( 'NONCE_SALT',       'm1k:^9Ne{[t>w2/w55s8mbEZFUjSAx:U9jftmaz@`rIXO,GaI*zTzq/DM1r!h5oE' );

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

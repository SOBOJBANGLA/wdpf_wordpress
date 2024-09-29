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
define( 'DB_NAME', 'wdpf60_wp2' );

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
define( 'AUTH_KEY',         'n5`dh:cQoK~qq(f5a$(11@n1KV0hDXaB}Vh3tv,FSC*gqr=`oM[c&]dq1y&-LUd#' );
define( 'SECURE_AUTH_KEY',  '!dE8(^7+(i.4=ozNFkb79*2MRg$mx1~zf:6_Ri#gTe2Mlbp*ZQA5GTK,JmAw0K77' );
define( 'LOGGED_IN_KEY',    'fHJ7?-uPzW4;zXin*%7+ErNruzx(uE!rZ,)-G2O{]Xp-oae$nYjU&=UvT<fsUq>Z' );
define( 'NONCE_KEY',        ' )p9)bf^Yj*A$.Z$$nvT:*ZP&>fDrVy[y}A`CB8QgwGJq]rOPs4i%Y2t*,Gf}KJB' );
define( 'AUTH_SALT',        'k#hCsthN]-YV=q!ua*hU%f&u4<8Dx#sMBX|2 gHfmo_D|JkLpHVh{1&;*qM`M%Pm' );
define( 'SECURE_AUTH_SALT', ' 3.9,Z5ac,1ze)RCrnT7RS[.b<H&<7QH:Jw_$Dd=Nfks@6CG1ks/ew4U2BxLBosU' );
define( 'LOGGED_IN_SALT',   ']`Lm2m7VaLqSsG Xd$b1OVdgv g*Y{.JWxw)zZqu&(o|00EfL~oEkoa,gE4keCg(' );
define( 'NONCE_SALT',       '7!$k{$kWSi:> 2+Ff9)oL.w+OWiM[([!ZH:3HC$yavrp9J078`,rOlHeIN _Sy@)' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

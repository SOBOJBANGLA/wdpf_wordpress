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
define( 'DB_NAME', 'wdpf60_wp5' );

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
define( 'AUTH_KEY',         'h[|& rp-h$QIdo#HlMX]s6ax^q`x19~}Si<R:UB$s$hfCE2{~HC>PAER#eRx*EFT' );
define( 'SECURE_AUTH_KEY',  'Ma7^#P[BZ?4MS@ikuKqA*B~f5eTqq|o.a|jSbaaz(dTJ,ZMSNS{41.AxI^S1.w}[' );
define( 'LOGGED_IN_KEY',    'hs.y(~4sj3ko6nM&d1w*.}k9%K2q1oG?k6 I):+:&2L_9|<hAV(PE2GRa/aB~|-:' );
define( 'NONCE_KEY',        'MY(!$V@YYh]~S)7f4_VQW11P~IstL#Q2<Ob(575Y(3Q@29xVI&RY?jOCl+4*2|t|' );
define( 'AUTH_SALT',        '}wc(O3WRT-rM93Z;ljVz#JRj9Y[:|lRD1[*svEZb1mOmW0j<ko[F[xueALI.MR[3' );
define( 'SECURE_AUTH_SALT', 'KfKu2,M2~)Rs<Jw}[~bcMV21u.DGZo THf&#9gFk_b+ &~sbv22E!?6&0?==NKgc' );
define( 'LOGGED_IN_SALT',   'WXL{E3 B/nic3H1)I`ZpaS$F-]eYFauS$lSm~~d88V[Q^m-Mi&=zL.G17=<9L+%#' );
define( 'NONCE_SALT',       '.4g{wkyo6?vj9rW*3;<,dz;XN;_3gbK{,wycLfzeR+ lJ1eAvM(^$ $gu`D3x76#' );

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

define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wdpf60_wp5/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lkscms' );

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
define( 'AUTH_KEY',         '.UCiJWIyxWl]?%s{7#OaN^a#+v2aRN}+D+Dl87>c^;J%Vt/`3Fn@yh?a:Bu^!o^D' );
define( 'SECURE_AUTH_KEY',  'pOo{k8w[PFSDu&5}%3F&1`zooJ:^*8mz#}B*Cv}PAI1}}%?C=r`mhJH4R1qo$[/f' );
define( 'LOGGED_IN_KEY',    'V#YND(,zFw|!Q;_3[_8aaiH_b@r(}l,F*$iO8PCWRM3X0hvg_L63S#5/6H&%]r4}' );
define( 'NONCE_KEY',        'f~;&./*|{`u6a*r2o=6QiqWA>N1oM05^{Mg@3?R :o67QF0Z96JeW?L7@1I.1xx3' );
define( 'AUTH_SALT',        '@>Z.>JY0A,e`|F<tu>=|50x_@q]M:}krHBq~448Ck]C6na}i-w4YbZQFO %<hb.s' );
define( 'SECURE_AUTH_SALT', ':4uxL]I;th7!2CsS?5NT[{;38(}eg{Pu|)spoN0AZugK<so6<I_Sy# A^Qnmpp)s' );
define( 'LOGGED_IN_SALT',   ')ey|(BeUv>ArJV$n6^NP@(aXJ]Up5^GKA#fhO~C=W!}f(->?GjSe$y3FMsWZLUD?' );
define( 'NONCE_SALT',       'MoIDK3}tv%g3 $2R&A}C.QPuwE |!bzdHLE*]}^ZcALzFbg4] Zgq=MLnh)KLVb&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lks_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

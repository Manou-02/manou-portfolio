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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'rR$t0V[K,/[4rRDqSK50Bu,gsB==oWkQw=o$(b+:I_VFL^O4umX3! T_SOt9$vt5' );
define( 'SECURE_AUTH_KEY',  'wM5-#04t<J_G|7a)7n#1I($j<ns;Z~yz||Wm(um#7.=$WNHxSS#5!ci*,`1v&wqk' );
define( 'LOGGED_IN_KEY',    'YwrVvr6+&3i_m$1ld{X8;]i/b$nYN0Jh-TVCpiqCag>6-JXh^**p[;b-dP)X+Iv=' );
define( 'NONCE_KEY',        'H>P;n-VJt.%*U)uLhJpdN!wc{>[)zVM?IrDo$Gs![!ftYllfbw@nsW)D.tI0Y< d' );
define( 'AUTH_SALT',        'i8qPF.s_F=[@sSS&eNX;P9{h]c76qPqOz#m.efCgL$xZx!<4appRH7[@4]M{[+:0' );
define( 'SECURE_AUTH_SALT', 'u-JVs_`@rTO&,T^CoR5ndZ1lS/|7I}H$2q~3 .tfl?FowTc)z`&PH`!,.~=9nZ# ' );
define( 'LOGGED_IN_SALT',   '0y0x7twOL}N(#?cDRR,`*d/0c@=(q7fd..s6Fz9<O5P[4?QGJHG`EGD!/trL%+:@' );
define( 'NONCE_SALT',       '0k2<.2k*PZs?ET(SBl}4x]V1=o%9Qs-YT@S5<LqZAv:E?+U#GX,OC{;_ih6lP*+I' );

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

// define('WP_ALLOW_REPAIR', true);
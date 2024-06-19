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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#k*Jn]NSOPIJ_i@<~^5[[O,ljud>-:|cHDHcNd|C! <&PtM&dTs:5I7~rhO_mpp5' );
define( 'SECURE_AUTH_KEY',   '9mK>7gc&]3sC:@i<7zF2Q(R95q/c%y(YSbXd`LXRDDH^*DyS1t*=Deg*!ovbw e(' );
define( 'LOGGED_IN_KEY',     '6ru4L,#-J{:b%9oP:)*%d@By=pJD7fQb%DLV2z+4t&t^hrzlObl*oU9A|3a-cW&8' );
define( 'NONCE_KEY',         ':%ctZGA|{x^t+/e9Ny;62V]2anwsG(UO U1TKKm<W6$tcr4{vH].^UvR]G,gfu-m' );
define( 'AUTH_SALT',         '(c&JKUFS$i.%^12CB.uWN$5.PCSHrA$hUA71J4y{0&RYUrxmMu[)7(n&aHM5g-y5' );
define( 'SECURE_AUTH_SALT',  '`b!^yqp1IbEmS{o^G_5hJHcT>]^]^Zb%SE$5df%j~,q:b3$CQL4Qe<;f@D#$?~;8' );
define( 'LOGGED_IN_SALT',    '}(c4G7V;r%9J{-1C1R+Qbk+=?=DCT!Y?7E:z)ZCx:tPrIRFHY=yz;0$+MadCscqr' );
define( 'NONCE_SALT',        'iIIrL>(jW)E9bZf0lrE=}u#i<ou`/wc{;GrOD{;p+MR?Y4TUsA?zmtsA&hCsr^m.' );
define( 'WP_CACHE_KEY_SALT', '=fRE[Guqi^&rj1 yOY$fOZ0T2qhC[SiavFC=G7l1FHzewFx:zIr#?}|8Wt>3qh,Q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

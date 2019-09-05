<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_pruebas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^i&9iP[gHBv,P,5}mhC|PlBMz|]4pN`<ty~)-N1LV2#BM|OSU1FHFmjo+L1n+vfS' );
define( 'SECURE_AUTH_KEY',  '2AM1_Oqa _gB/?X}9sq3 (rAFYy``JKZ,pAMk_j-{P]hrePFitVLAj(RIZ1Th6+G' );
define( 'LOGGED_IN_KEY',    'L02yNal?^hMF]ppO?,&3- I;,N3>4~u]Dn@?!QZ~:u@Kr(@fX>,CpzDZGIy< c;f' );
define( 'NONCE_KEY',        'N.@]T N71dn{?FjXN,fr+-Zb!b:<Xv0A?,(odKTmjtAwm<9O3m9A$;%#w~.cI9Cf' );
define( 'AUTH_SALT',        'AQa|a2#c}4W&YGJ<lG:[J:b2=0Yi-h#!).h-E?Xx3oi .Hm}uU)HqW,;@3[]} j4' );
define( 'SECURE_AUTH_SALT', 'b1:,]7]@sn-zQ y4.]M/HH>T:<%m`$VEe2WsZ]`:7W}JGn4wn5-4}v2(QU3])t2f' );
define( 'LOGGED_IN_SALT',   ';?%Lw3`EKE2hjy2.kmtz@VdJDv`*]vM-Cg0WWAO87^xEgoy=u<[,Cg<+1[hrBh]#' );
define( 'NONCE_SALT',       '-17ev3_Ks3E?;}xTxK.fK-0 TC_(zQqOq!YNtVI@eu$Y<A:4rE;GHdPbv-1r%mPR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'fatsassy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$#^bSBm2Dr[nT%Fw:?gKTG_vzZA*j{H{voCTOBVR,]>T;|c5Nm[@%UAn$>2CV=dS' );
define( 'SECURE_AUTH_KEY',  'ye=]0|0<pnHg^dV<u]}[i(&-wbN9!E]i zg4^J]&]cw*$Bs,*JUl(KWNLbRU}:ij' );
define( 'LOGGED_IN_KEY',    '=H#HEtahfhfC/AE7M.m]5Aau2M;zC%&]S=otAhwi/U$_&=0*;TfQP-R{p*)E~74q' );
define( 'NONCE_KEY',        'mU~LgC%,FarwLu%+G*ExoQ=qh8b]$R:qX]u,ezLzxq3X|EnFc.@w>QD@%K>Fxs<=' );
define( 'AUTH_SALT',        'UUW!tH1|n0jGBk2ai$(7W{cQ DxY<rmFkt4)&v[u/$!>Khm #,j}n!NKe?lZzf@V' );
define( 'SECURE_AUTH_SALT', 'y8py?MNF^V9W+EP]{Q}C/|pAz<-*(bl3uYV3&4+%``KVcy.BX@OqTk@+,kZdA|yZ' );
define( 'LOGGED_IN_SALT',   '#$,L~J].+nDvD|VcQsp#M/-OW~WAr5IJh;^g9y7QRSFo3+#t!M*v:h`m1M> ctY=' );
define( 'NONCE_SALT',       'FCZMSK8?9AeD_`(5tB9|`lbZ<wLp29h-hewho(v}RR4qa7bt*/U`p*B~ds$60qAK' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{px(0dM9:iwGV}?p&}&iP/kHW.Kl%M~Klk7{h)qUhp,0OKPu@T+,sM96Jgcvt}=4' );
define( 'SECURE_AUTH_KEY',  '8@(3[fy;)-P&@2&<OS}8/PH&n-s&g.ASfb15%:`5{t9Jg:i<E@1Jv-JC$M;KltAk' );
define( 'LOGGED_IN_KEY',    ',&ojltLDT2KTtZb>RCeTn1(rXdhT@O5y|w1GBLBczVWg3ld$uw`V<<.|5R80!h&!' );
define( 'NONCE_KEY',        't`-6[SXfQ~%VaD^qEQ*F!u]CGb2P_H&g55VCD0@(}bvc}!8EJDD$pL{Yw$0RZq[q' );
define( 'AUTH_SALT',        'q|U0KCKjg^;/t9Dq_7TUe52-3iy&LsLp@]i8W}GcU/mAkgZ,,+mNU*IfA9^!R]tl' );
define( 'SECURE_AUTH_SALT', '~5~IDfy?bVhbOv6XK |d9F~Ed;s;*x2N9d+eC-@Q78Y[Pl,!mR=%FX-<o]-L_aVq' );
define( 'LOGGED_IN_SALT',   'WnR,(?Q&e46_z_gAqNE{_Ni pJ4~@9$)s<qg|z!H%-]?J&uYxx>ZY3amVG,+tuJ`' );
define( 'NONCE_SALT',       'T@OFI ;:?FgD/WA8xX.bd`b1zpKrCg!dzw!6#f~<lubCQH$P{mMgx#vGK!g7`=i:' );

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

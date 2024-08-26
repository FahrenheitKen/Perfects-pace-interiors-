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
define( 'DB_NAME', "wordpress" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'D&KgDu:*#p,ohby=QftQY]DkA:)mStw3?:giW|t<8i&Ue Loy)][$ASBtiA9K<4q' );
define( 'SECURE_AUTH_KEY',  'v.Uo8:0M+Kf8~)D~h7Mmj9~z4:&rUfEq2$jUm{^6-8|/<pzf%GjV}sXS=n5G`K:n' );
define( 'LOGGED_IN_KEY',    'qdNk5WmY;2FJa[5R{H@KVv|q4.[mOz~e8)/peL^<CsANoHWr.7]>{J<-w$-EA-+m' );
define( 'NONCE_KEY',        '+X+SDx4Eg:W4tL4PePJZ@dSl)r T~&@H/7KKWwO.P#s/8]ivm{x@e%M=~Z&H*.VA' );
define( 'AUTH_SALT',        'poou]Iu9<[mW |=<PP][8[jbhs@k?qOfq^ULq~g;J8k,0Sh ^>thDPFd1TgOswt(' );
define( 'SECURE_AUTH_SALT', ']0OS~}#`$NX(fr&rP]P2qE5?AZ5pVw;44f_y*K*ddLZ?PvIs*KCrpx0b9^Pu,x*$' );
define( 'LOGGED_IN_SALT',   '.r@~)S(IbX}u}{UFPlS8YG?Cl4|`PyaZhuzx$O!{*kRZ=+LZPvOEs!0t(;3%o*hu' );
define( 'NONCE_SALT',       'kznEsS&BF1uXn+dv8,2G49i3le:PIhWb3nz|fKW`|F!/#b15:(O@!otK}zq9gD81' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

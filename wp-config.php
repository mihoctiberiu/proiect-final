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
define( 'DB_NAME', 'iap' );

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
define( 'AUTH_KEY',         'EP%Z> $Dv:$l.rxa5-.GWZ<,5:_[$%bV/5el7`&PQ8*Mjd(Y#b5jSvv|+)Rr-9S_' );
define( 'SECURE_AUTH_KEY',  'x(14:A:][CZXZDJ7>=-yz^D<EUmP^5#(%txNYWIVPsyR^.r`2X.%]4AXQ],&.=$T' );
define( 'LOGGED_IN_KEY',    'gnp}5OFB+0aea`e}~y:#vJ!VK(vLi{Z=wng<*p!fZQdN9mdJ^lve:wl.[N.yOaTJ' );
define( 'NONCE_KEY',        '.GMYPg54z5S1PS{=]=^UY}2+qb`N+/Kc.xxOgGijFKqbDu-W2?qW#a+KW@!K^kV]' );
define( 'AUTH_SALT',        's^QRY+aU?9Wh( 7?Gv}qojsG#CTiKh-Cnx9b/}9S1X Doc4*v*2jzEP0*kdCk:.b' );
define( 'SECURE_AUTH_SALT', '[^T]c(j^8j|DNGaHIt/sAX:?v9={S8XPHzc5}%y}P ?fDcuoLFSeo&kaANN}SyGt' );
define( 'LOGGED_IN_SALT',   'Iv?)Ws8NG=+*$-H$A<E*=Zk)=2XLOd%)5*By1d`=RFf^,_k+vz5V{P^zhq-8<uyF' );
define( 'NONCE_SALT',       'k<w++~SZ;hXHtzHy;}U:<$U?le{^&{~rXg?i -%[:+=Z}00U=G7gX{egLZ+?L/%|' );

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

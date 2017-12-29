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
define('DB_NAME', 'wp_fixmedia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$0V^DZLmW5^R[/b5f+w1Li*b,4<H0n<r9N%j-umN)UtcX<Z5Ofj*`U$#!H1tF2bP');
define('SECURE_AUTH_KEY',  'P{c1@M@|R|88aIuK7|J!=L3UcbP>e@(E|Olc9$f`Ck<+bOf]p _hlR7m{.PxSSNr');
define('LOGGED_IN_KEY',    '+]Z3(+pOhu!.23*8l8EwtU-RQ$2rvT0$fcw{(kVz`wWnZp7 ps;e~Mqxw/T}uvPB');
define('NONCE_KEY',        '7onH*/|bRF>Bm&(CU52QB=gx3[`qA(~c$c jjTZ1 Gtd8?-*b5{)]g!/Z@n:u.Xz');
define('AUTH_SALT',        '-8H`4zXhFzRiT@cS(O_,x1cOXI1f% QA;4LF=jkBYOpVLmjRpU$? Wlt:ADf{v>C');
define('SECURE_AUTH_SALT', '{Y>9[1OI}>9c7[Np?x5OS^53fx)q[mLNy@`4`,[!@vO#h{siyVCD3G9r=R_M8/(M');
define('LOGGED_IN_SALT',   'IR)Vsk(?*g|jZ#9&qp }WchA%wa68$J,SYO3[z&MGe$pxePq (?4f*CcDG!B3>rV');
define('NONCE_SALT',       '>Iy/0@Uy4+I0{q3=Z<!`Gx)]d;3Ugg7K-2>Z`UB%}JGT5}g^<jzkR_C67Q_z;wd`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

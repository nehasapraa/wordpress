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
define('DB_NAME', 'wordpresstest1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '1+qnZWJa-`K.i;Isi~:B UnF-0}PjA3HW&lsq[2QZ|PO1rS8)g~PDJk-eqd]?Vo ');
define('SECURE_AUTH_KEY',  '^S&n}rg/J0Kv>-,w2{Bl)}YF.,s[cJa+s$?rNPy{C1i7>Th+y3b<L*giiWa+$nEN');
define('LOGGED_IN_KEY',    'f]l[WbKQ+__|p_q@?L#>L]uBTui4O+m+yss-IKXj+8=2O _jY-05L-s$EVYRHj#j');
define('NONCE_KEY',        '+m}zS64v,MaZIEEr jS08O3& a.lp4ShF)IaXiVC-{BQ?HSb&{KQip&erId+|itT');
define('AUTH_SALT',        'WuL<@4e[.W>#J*3@dRd<aNLSP*J=he-v]~q~#v+rqhSzA|aNENbxGMkta[|:Aip4');
define('SECURE_AUTH_SALT', '=Fv{he8Ivx4uI2h7W_-qVm`eex>oF;>(4fB*-Odz%qSXo/{.=)s|XDI]ar}V6c0W');
define('LOGGED_IN_SALT',   'yn,=XduE;a%Z)2q&Vz]!G!7g7!Ap57+7stOK#F@Onj;if0+Mv?~iDwIq{|+`p6$j');
define('NONCE_SALT',       'gavy_;L;L8UO,g1E,4FA7CR7!jM2$T//:?0d_b%/s8c(9)s1wJ0+8wBLvC/*L+_@');

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

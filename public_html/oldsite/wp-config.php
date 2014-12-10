<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'luluplew_pclawts_luluwp1');

/** MySQL database username */
define('DB_USER', 'luluplew_user1');

/** MySQL database password */
define('DB_PASSWORD', 'S#__6k&qI_@T');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Mo_$,:agoSE$EJe^).]WdOl_&_P(cc/S9#QEIBa[F-qQ-G>u4EE5_mp(dX_e!X6~');
define('SECURE_AUTH_KEY',  ']PY74[?i>6(g#R-vK*O@Ic]r]/1mfu:/Tm9X/s+TkI[ *B0FwxO6,X7#2MtF6S4;');
define('LOGGED_IN_KEY',    'lPx;1zTJ6ls,$,|1&ur`r~vn.nh%2*4L/&dmIBa%E-v+)uK<}Pr`Gml?#ROW$<f^');
define('NONCE_KEY',        'B2%scd50Sh?WuR$XD-]?xVT<<$}kR}D5j_P$$LtkU?uM~Y-1opsY@5?R||~mt,>z');
define('AUTH_SALT',        '4dJfghj@(3T.Lo*:[>W?D %h9!z|{W-76$40PxP/QN}rz fWIird+?`.PK$ik2T{');
define('SECURE_AUTH_SALT', '<L~qU[pi5 tZ{I=|xuO7kpo?I0Wk^m}bp^`S*_=?5$sWQZg%e+7xozmK>?w8dP7&');
define('LOGGED_IN_SALT',   '4z 8@HF-bexCOzin*yZ+0Bm~vb>_>2-P-+V%JqHxQ%k>px3#a LBteW]r|Rk]Ii~');
define('NONCE_SALT',       'zSt539.&wN3a[Lk`^0m*6N:y_a4Z.Kt2sMXl!i7pK9O0{i8-ko]vZp0V(0I]U8t#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

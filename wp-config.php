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
define('DB_NAME', 'fashionsprout_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'F(dX#2.%C7gj1IyyFh-dt{(CMEz@,Nj`pXw$. =[sXwbH&L)(0.rG$/F-5hmzoJ[');
define('SECURE_AUTH_KEY',  'jo!0LBRyr=|fgnSk::Ubt%EkVhu&GyIs3HM]WrzfF);l!JiL}<4Xl7kMewWfB#FG');
define('LOGGED_IN_KEY',    '$ku1?|z@KE,}dssr:)E[/ly<zy;y]+[^dqU~3mSVH1-9BfM-K-:yH- Z0)CbB7M6');
define('NONCE_KEY',        'r4YGCHMx[m!K?p+5%?m~4`}JS9p~[k&tX|~>dh4BZ<7xh15/ VuM|rY 41Y.I=xq');
define('AUTH_SALT',        'W<T:<%5Qsk%85MseUi8c0t4eN:G:]?zJi0,V+|L;g*?dJ)7/+YxwLeaQkfsK-Adx');
define('SECURE_AUTH_SALT', 'anr-g{{qD$L@Do?4CK|N{)r/~XQ*IV_~#8d}{L=vVej&mi6Nbv6x|{vq|aSDBE0r');
define('LOGGED_IN_SALT',   'O$<&|?(tORePM5CG:QwMh}KFHzmi]5%7u}3>Hjgby(Uug#KAyK30A;@2R1Fj`O}@');
define('NONCE_SALT',       'Msloup*2=A2OIgZkR*r/DPO)QWJ}V_s)&xRAv||0ge;R41ggw;dtM)YPlcx`kZVt');

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


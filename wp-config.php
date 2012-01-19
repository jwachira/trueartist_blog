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
define('DB_NAME', 'trueartist_blog');

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
define('AUTH_KEY',         'N,q|G>x+@H.sx$VN5b<eb$S9v}CC1:u^f}pYiqk_(N_UCIV8|tV|_a)tb9`03$cD');
define('SECURE_AUTH_KEY',  't-bhphDxxps<*Vx|G?(+O 30]Ax->M({HI]]hd77vx>t!|K<[+@lc%f}qpdPJ111');
define('LOGGED_IN_KEY',    'r:cdjIpO3|T/guGs(B$5pkE%+It%$a_K/nFc(~cyq`(?e-E|bhAcl/.J%K1UT}Q3');
define('NONCE_KEY',        '>.O.WrFDS?Nb|*zWWZViV6gDoA6O7<+0P7 HmBe$tRCP7t<J`<KK>$<A`?a/2U[;');
define('AUTH_SALT',        'Z2<jcI454$AoxYp/UK/lB#fviLS /f$yhYBbP,N$4dA!9u2ET|/XPw|}W)HPQlE4');
define('SECURE_AUTH_SALT', '=/]o-!a|JR6Pq&B 3F^C5(|OC 4Uv+wW/j_gw,,#L7u@Ux?%4e^CzzanE&mvgrFJ');
define('LOGGED_IN_SALT',   'lsp<?qZ(uFi7^xf_;vmEO)`bzr4pg8QRd+$Cq%]$jWH]=Tl3EZnan xKi|[[!H&]');
define('NONCE_SALT',       'BE?0Tw.<i7N5AQsAmj<}Lc6W/Q[O{S!ljypb+h7MuC6-_x}%GB!1(XYvkC9|R%43');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ta_';

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

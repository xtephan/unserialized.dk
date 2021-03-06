<?php
/**
 * The base configurations of the WordPress.
 *
 i* This file has the following configurations: MySQL settings, Table Prefix,
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
define('DB_NAME', 'unserialized.dk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dbadmin');

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
define('AUTH_KEY',         '}nPX %r^6_W}/8%J^x%Bn+5G|#Tu]WD+SjtTZ!3)+>P%xD4rYmzc e#M*hKyZV0W');
define('SECURE_AUTH_KEY',  'gg{1D]E/z#0}+7HXPoAcOZ57j>Vu^Hj8,~1l:>b3-fp6zuJ-S`/u9pFc#JiZJkgq');
define('LOGGED_IN_KEY',    'cYC|cx_6$f.H{SUE6h+i^*z!aQwycdQo=u-i]lE(%A@!+N%@{/Fs1EW53V2J1jIC');
define('NONCE_KEY',        'LX<)|&C&;<[D]V(Wm%>ALt]sr%r%A]b(#ajk3ZqBQP1<kG>5cY9>ls!|S 5aS6^q');
define('AUTH_SALT',        'FyN5`nIbk p=T>&UFOh46s-+3IA2EF*3U@GxnuD}ddXEVdUD(4}.wUh`.qPU?{*X');
define('SECURE_AUTH_SALT', 'p?|i(d,Lnm?OHLlUZR>ODGnzifq9Db15-}f,VpTQ?}qCDum-bP/TT6&4`qq880#K');
define('LOGGED_IN_SALT',   '4t*ub?CjB5Vt:C9FG%gBRmldD;-Wnf92C-97=}:OasCI>OC+U?;ZWuu&v*|96q|T');
define('NONCE_SALT',       '?@54k+xJ2R=}ci{~JRg(?)- }v*``Ldb;Bu/^!z9/m>D)q|{5p0JJK_U]~fK85-B');

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
define ('WPLANG', 'da_DK');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

//Setting developer URL

//Home network
//define('WP_HOME','http://192.168.1.103:8080/');
//define('WP_SITEURL','http://192.168.1.103:8080/');

//Host only network
define('WP_HOME','http://192.168.57.10/');
define('WP_SITEURL','http://192.168.57.10/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
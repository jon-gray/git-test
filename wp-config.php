<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'git-test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`X8ZAoUWPgdF!&([/2.$P@MaQFvE}$Z*&)B-e`oJZS^/1P~ lp,nz:FUqCFXfbPg');
define('SECURE_AUTH_KEY',  'o:hW<#iIqFFVxH0}WXkIBR1VlV%*wrqiXsmMeucfmv%x}-@Y|$yW-FAa@k*JR0ZN');
define('LOGGED_IN_KEY',    '.`UDZ^Md-U?4_ZD](5AvF&OVH>itO%@b(jc+a%S%+TOy<rogVEw!qnVkzUlXiz_n');
define('NONCE_KEY',        '(k|1+=qJ0xC=?:u^H.*N1TXy05ftQSET^3p1FXZ*0mm]T?2kb1|HHRCa++M3O]eC');
define('AUTH_SALT',        '!hd;SA.Nt2fQ];>I|^;Xu{f~OGc@zt^r/|@fmr%UB@GNNH])4v0+K.?V^*Fq-mB0');
define('SECURE_AUTH_SALT', '!%/?!i(T/cPz^PT||)A1/~>OY=P`!>jRTq@W};!r%L2=u~I zG$d6,$]P3R| x##');
define('LOGGED_IN_SALT',   'rM3qmlIIIuDE6+QG|iK$_(+_>A:hJ9R}7I/&y=okh?rhn+t5}p0BO91VILjO% [`');
define('NONCE_SALT',       '>ap/=v]ahQ.tD.!6 x!D4:j!8lRy8}s>+;M.(mt%@g~+t-Qrc{[WZSeQ:(TN<v8U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

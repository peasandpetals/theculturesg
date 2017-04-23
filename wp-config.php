<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/theculture.sg/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wp-production');

/** MySQL database username */
define('DB_USER', 'wp-production');

/** MySQL database password */
define('DB_PASSWORD', 'wp-production');

/** MySQL hostname */
define('DB_HOST', '10.1.78.1');

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
define('AUTH_KEY',         'G|jFD_f@hPL44+y5-Oj-ze]H>l>6Gea-)?-%cYOMt7?5nCyy<NpmO?fC*P)d%}d;');
define('SECURE_AUTH_KEY',  '()|{A3R-Lg5#;=9#;m[X)sEzDhH+PA3Jxg-l26Cl<-clyO|19U<BU;t/SKQ{] 75');
define('LOGGED_IN_KEY',    '(zh1:-Ig~<rOC4z;$@=o1Wo&o=X+*ro2+6iQ1A4SNU09HR V||F~@}Z=}]ue*Q`r');
define('NONCE_KEY',        'ME4TjG~R-}t6bi|?!GuauMJjN0{`+Yl=Q7~`N%JT+%fEe./ESx4dwN~MhI|BkpH`');
define('AUTH_SALT',        '8Z 6*4kSi#yFfi:oM# 4gV|b`-j3sC3S4s3nCg Xna`5`=Af1UZ5~JDnWhd0w`0$');
define('SECURE_AUTH_SALT', 'pQ+nv72T!Z?E2n&u[b,=TP+*V?n<iKo^4/{pY14q+^:a;+~bfG[1)D,/R8B>^`,2');
define('LOGGED_IN_SALT',   'Wgl=u/un,vT+xJan?A]jEbJ@N9KP,IiJa,f7H;?;}vL+dGVNc-UJ^2s~!@%CNUS7');
define('NONCE_SALT',       'v,J[@>I|.*Cpf8P8,|I6lG-<==>2F1XR&?f&<o_60AT|)~$QarS{Vsn_/E$x&JPT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tc_';

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

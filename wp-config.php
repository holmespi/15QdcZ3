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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'paul');

/** MySQL database password */
define('DB_PASSWORD', 'letmein');

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

define('AUTH_KEY',         's{h7;;UhPT{2+EhQ6_ e-]I(-7,,W+CD-M#>vOk%0aA5,h%+E>+jp:+P9<Z$j[Wt');
define('SECURE_AUTH_KEY',  '<;u Ba*e%Z 9shkq1r4g~4zp&r`| 5F=1jT+a;l!Fk@};+sO)L(C&qQheyf%$ .Z');
define('LOGGED_IN_KEY',    'g5hF2[1?2DH[ZuNC 50@e@4y+|{i#93[2-[_BV6 S|lFpmzz9(/N*vnf;4=pv>gR');
define('NONCE_KEY',        'gB=fyL%X2BX1Xl+d+i|y_TQ~s{F8&*KvL9-{r`}6Q,g+rDQC]geG+jGkNINo ?A-');
define('AUTH_SALT',        './.# K#+!14j<L?Z,8Pu_`_=G(>dIqQ6`>>p+Z*%~pjDFwqZ(!&S&V.uSu~-A PW');
define('SECURE_AUTH_SALT', '!jF0}V(RjiO#&8Jc?_nyJ@LQw}Z+RyvO R<Xn]tgk|d<w>m%%Sh`B5)@)e;G^+z9');
define('LOGGED_IN_SALT',   'oH`~>83g0+})MYTvL_@vmUGmW-ia:-Lz-r+J|UHBjUTnM[x)9KDdR}OIg,D/CZo1');
define('NONCE_SALT',       'V]B!-7a0Cfcn{[@ICz`RQi.0;)k<$RO+*|Cx5?,@xHxpvQHfiRYHlA%-95ZG&KVx');
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');

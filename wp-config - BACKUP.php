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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'jNWcMMo|z(=Xa|K8OMpZ<VfGJH?)o;[jpVc{;#e.1Xc.x.8*bkY2&@-upK/,+A--');
define('SECURE_AUTH_KEY',  'Py[.mV-TiDn%g5Wol|mNWl4sw/e0AyF?De@}S8gT(|E7568dxYQa+hy_kDPc+xnL');
define('LOGGED_IN_KEY',    'x6mN_}+ [FF<g.|~BE|8--VNkS~SS,v:{uc>+!n[7]}(h& Ov_L<NV`A.:5;d| a');
define('NONCE_KEY',        '-c!U8,8}}[`CK~!:9&jjrG368Mz]J`X>|/aS-J~>2k$[C#;0rqx0i_t!Iid?+?YS');
define('AUTH_SALT',        'BD~DuV2162f`)0h~*hi+4&/_Bs/- JXHnX&|C26/c&`[7z) 2y+p1Fig9j|Lp;9L');
define('SECURE_AUTH_SALT', 'J?{campGM6W!{k3smPF3IPm)N39il/NP.:{sl~hZo)RN3v$?tV%`[A?7]#6D#2J:');
define('LOGGED_IN_SALT',   'e5nd=_-k>j3n$kCH6|9EDrQ_3v=RN:dTTQm+*D?5w`DqP-Xfnn[PY@i@#;~w2CP;');
define('NONCE_SALT',       '~a}~W5?*oj9nS8i2lM}jlc7e]b7@dH.u93 +9!:4FU+Z|E#8/z:Ewu!i2gNxzz<)');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'lddev_imark_db_lefroy');

/** MySQL database username */
define('DB_USER', 'lddev_user_lefroy');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         '$`B9[Rx^|8zu@s]Xz4-4NH>tWhX&Ax!#:.DSlK<eTxr[h.7&T5*oV$(vrant%eH;');
define('SECURE_AUTH_KEY',  'L;>=eC9@}A@mq$h&hZY 1B,q.yCgD4A(_1sGmA8LwMgq]D;|K?@Du WM+z-.l/80');
define('LOGGED_IN_KEY',    '!_KOey2x#LaBATh;yu)OH#?Zz7at8V{PUUF1A4C=6l-QRXI;(!{SU^svy]8Z(+2f');
define('NONCE_KEY',        'UWmMvjgpw|t4dY17oDKt`2heF*&J`YKi0gI$x>wY&+lQbb9fB0tYW&Tgu.y+1f{M');
define('AUTH_SALT',        '[%(UXg$xlShZtfX6@pa4*+cf$s`n?VOIO4wXds#$Aa5%N)G B5DA]rr8g80HR5iO');
define('SECURE_AUTH_SALT', '-vT5^3+G=el)-u=~o:~-5ynCjp<y,%h(Jwg@5^*[&@({fc)VT58DXJ10tN[c0/rn');
define('LOGGED_IN_SALT',   '1=,Z+LH4@w!jO|!~KmV?&{etX5b^ 0cjG%&h)W~;^ja7,R%<?Jy,re#!)O7|,=]-');
define('NONCE_SALT',       '%m4r)yy$`&KWbX }[ <Xx|gqubJ Ld3gV0J <[&l4wLu+;uKD#MyreSr=|gEP-*d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lfd_';

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

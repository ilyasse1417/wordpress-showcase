<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fYwn6<={32v20,4go:l%*2NkOd&Ea7;i?.5YI!Js%c;.Jxp |R)i2mSTYq+3P:jL');
define('SECURE_AUTH_KEY',  'J~)0Hp>O6}z}bczXk0VA!%cIAJ]6HXP0bDy(55@~]-n:<6kAk+SMXHVZ4`c3IPKe');
define('LOGGED_IN_KEY',    'UY3R1n|%TgY9h1md|$=B=TUV~KJKU03P1;6hNv^N4 =_*Pl{LlZ|yt_,!ZjH*^cv');
define('NONCE_KEY',        '$jmr|LFsp$8eGo.((R)WSv_f c5LM^QOh m5LILsFPS<,y3oTRx&Z(}h4TgLGW&f');
define('AUTH_SALT',        'pnkff.V.GU+T)#&o`8d41})`BJM :6A?7@!ryC#V8+v=;PIO<$$BZIW4o]}]+;Hk');
define('SECURE_AUTH_SALT', '2F6_nL90MU6YR;qwp;y@eOEvoEBmudg!gHIljW_c^oXi0;HN4Z`7LWQyLsmCNNd5');
define('LOGGED_IN_SALT',   'HL}2m.ch.)~[:8q3g{x7C4rm-CzY&DuB0!@=JLTnr%8#OWo{L@ .gz9[g@^f/4lS');
define('NONCE_SALT',       'Y;?P1rGIzu(CGpL%OaZP&[NuYfp:}.0b}uX6W/tI 1kuG(YjJ]_T0k6ke,lPjgzu');
define('FS_METHOD', 'direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "ilyasse");
define("FTP_PASS", "picola");

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

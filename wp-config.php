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
define('DB_NAME', 'mjr_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' J~j9@6LxVf}}:<{^nt~b.b1:-UoV/F W{SC2aM6FM+}g4}k72,Z$MiH2#7WC&+q');
define('SECURE_AUTH_KEY',  '`X$8)tGM:y2-D`bu!N mtOOS|FM-x${Yr~|^D!J)wD1LI=yM:(UQRbg]_iyy#Xvx');
define('LOGGED_IN_KEY',    'r%>c+V)24o:-N IeTVrH2F@#ul}C=jHzw`+A2nrtI]qwcQ_K/M-=cf3F3e=3hT71');
define('NONCE_KEY',        'G=!I,$[mv6uby9OtWiin$W`1i0_?2>}4z+i+wddrZ[%| |VD(Tfj6E*z#>F6v$F&');
define('AUTH_SALT',        'R0-]Oqa^0EM/Q~$]a;qlvV0_Wh2-%?v!<WxO1:%hCqk}/!Mc-f`e51pbKoLkNw#{');
define('SECURE_AUTH_SALT', 'Licb:iG$^)#vd0jp#pUmWPZFN%!k=rZSV4.o~0rDq!-F`0*^ccQd`Qd,~IjM%-}0');
define('LOGGED_IN_SALT',   '%CBs+r(  {Pr3pqvH2tMM~0>Q)KrzxEk2_,G55kK*CVW6#)8jy* PW!{egqu-qgJ');
define('NONCE_SALT',       'C)W+;7:+:@p,](Ivj 7}kgpdh&E!ro};%X6R]8V(Z/.AL6VnA3Zs(@`Y;iS&44.d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

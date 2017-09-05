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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')?zPJ.J2=NVSd?lz&dkA#~~Y=S2oMx2L^u_?]2Z5&v`L0?~}s+^~{;}awQ$1W`%6');
define('SECURE_AUTH_KEY',  ' g]=UmnLC9EgES(fp1uzMPyQX6%)wgv?6O?R;_hZ2TVI~3k-m;fRhgjz`d0tj*U[');
define('LOGGED_IN_KEY',    'lCknljhUhj]$E;>|++yl>%Mf:%voibHVkaATB-%xRRx`[1bs8^HrdWjjdrn1[r58');
define('NONCE_KEY',        'r_!TyO|I/fa1r(Jng_?3Q!m_LW!gu%=z|lx!^k7+D6d3 a9/}ZB>QZ,`=sp`=;mO');
define('AUTH_SALT',        'Wzg=OFLBCi=)d?W*``4=l1_0U`[ARy0LMe9nAR~$.gvJC%O~e{x!e]08/DDj0&^H');
define('SECURE_AUTH_SALT', 'B,6:#(!Sa@y~HX.ZX>DtZI{%]IQP<HNM$H:C)C.tUXvFzo~i_wThgXC%KPkdj[~R');
define('LOGGED_IN_SALT',   'X_Xx~M8iQLs+-EdYz`AQ$]iy,rfhPd+Qno`gFGr8Y#rF0g}l?#k7rE2R)9K:qW N');
define('NONCE_SALT',       'Y5<?0u+ %z@Hk69(;Uh4+e*YvQm+:-P[1`;x+6_4Y=c|nP.CAZ9>Mrc6a!i,:>@m');

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

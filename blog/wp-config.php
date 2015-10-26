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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'izie');

/** MySQL database password */
define('DB_PASSWORD', 'izie');

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
define('AUTH_KEY',         'ZWo1Wf^SG`?0_8_zXwPNI$|<fj>K7UXVyQar*U1@CD$;f:zp0@uZMY|T?p42Z[)5');
define('SECURE_AUTH_KEY',  'pt1M@ `K0hM)_JIVI*vY++%h7EQsY%xV>mG&lPn]FCRB`V(;GZH*vMW}a=K.zDFG');
define('LOGGED_IN_KEY',    '/9oHuco7,dFx[^aO&Mjw>3-39n1():|)q^)RjzDm54R_G&;+F+x^+gbY4H_qi@3^');
define('NONCE_KEY',        'w}6jYJ+xAj=CK]Ufv^c[-Zw?Wh4!-p,(szL(Kb7F4?G]zuhyfS`;ex/0%[#6=wz0');
define('AUTH_SALT',        '{~%[!V(7@y74v9-Qm4NCL>EI_Tv9-P&%geK}BcrD:k?$oOwg9:K%~jc>XL_/6l}S');
define('SECURE_AUTH_SALT', '-[NV!s5i!u^=nW,VQ5Yp$(bP/(}<B:VDR^mK{ffD/b@tG?@LPq-I-M&ah7uB9+zt');
define('LOGGED_IN_SALT',   'T&`-5->.M@`)7#^Q%B8FtHQ,g8/X- !0A,$Vi-)+v*nS5?!!H9*b9oK-RKVB3lJ,');
define('NONCE_SALT',       'o=%~:G5j]UcEqwazBegb|00ZpR$q5]yfj)eIYs}sql-2T4s7SZNuo9X7vFe!SFw{');

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

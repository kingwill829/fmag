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
define('DB_NAME', 'fmag-smile');

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
define('AUTH_KEY',         'k9%Ax&bLtbbs6vp|LyG&d3Y7 cXGR:gZ~Imu1T!}S,HP -o.!L^M(OKe9d6qdwE<');
define('SECURE_AUTH_KEY',  'Cpy>|BK!,;eXx_o{_!UG|VyV$%yzQdNtaC`4q VMN(WHoX/6CG-iq<emWtHl`NV*');
define('LOGGED_IN_KEY',    '.?8M.aQo9GXZTz>,4R{:iup`LQf,w%{#Eeh}7au]I7U:K(xS4e[vSkL>YtbUN?DK');
define('NONCE_KEY',        'n$xN~h=xX(zTZrJkByG[R*U~ulNz8G()xT094l]d`{bgl=Zz*S<(||3ozQb:+cI|');
define('AUTH_SALT',        '{chy(VI+$Eg-(kdy3HDH7:wwOQFjM{a%=oX+V*} +Ebp5|cwZ-?U_ojYIJ)^&#yo');
define('SECURE_AUTH_SALT', 't*~@.57 n@C6-~xEbY2CCpqFJ1fKtDi]o5]`e%Q1{,Z{&FFXXPxG<3QB6!YrWt(0');
define('LOGGED_IN_SALT',   'zN{x@r-6U |&<!/QI7?kKpi4H_S|qZR bi:1K{`nMInW5=EUrnHLi2+K[~/iqMsP');
define('NONCE_SALT',       '!Wp30#hL@*d:)QcA%qg8Z%uEfa6B+A}|C,lX,i5c&KePo8(PW&1$7Y^,M!sQf5}z');

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

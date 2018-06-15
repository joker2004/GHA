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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'h @JuJS&YhYO+L7FKTzDEsf8[56ss1PrSx!9j2B7p4KS*)0[o?=6]O.GCG0Gf#>^');
define('SECURE_AUTH_KEY',  'bI}A/}?wXtwyAkFBS8kqS/qr1r@_g|V~ODS%[JWZ?7#b*}0-i08k**L9J?8L$@ @');
define('LOGGED_IN_KEY',    '?1v[Q-g2@8Y7jBu7Au9[Su-@NeZEe%Y_10;o(lr<PLaPZOPS13lX}#_oa>!x3VDS');
define('NONCE_KEY',        'pZ.f7au,a4*EPjP!o&G-__DD VXBj|HQ)*JdM]Xz+<[3x/HrR9{IlIh<;^s#8,QR');
define('AUTH_SALT',        'Xa[+fUVqiYo96=b:hw/ok~HC0DX|)d&gXN1Z>%BrsKQy/a;fu$0vA%2Dj>gh&i#=');
define('SECURE_AUTH_SALT', '<_Xyo/$;yx;Z0XAy_6<l<,tMT>0lQ`Kf?0e?c9WPf!~S`w[p9.}{T,hYQAH!t1b4');
define('LOGGED_IN_SALT',   'dU3fm9L&,/v{9Sv~*ig]n[u=e^;N?r`LU[:ds?q1GWWse4k/EoiABJ;?_S$+5DZ>');
define('NONCE_SALT',       'nyWYsKPy|wf||Wl/tp0(?ugZS`p!LnjuU[LnlH52RM$/}c#9,D`8$qa%w0;g)*tm');

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

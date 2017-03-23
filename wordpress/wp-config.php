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
define('DB_NAME', '0fe_18346691_wpress');

/** MySQL database username */
define('DB_USER', '0fe_18346691');

/** MySQL database password */
define('DB_PASSWORD', 'd3nt1st');

/** MySQL hostname */
define('DB_HOST', 'sql206.0fees.us');

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
define('AUTH_KEY',         'u*eHxvva-|o$o9tIo>h8f|nz]<X04G`;j2g#qJWF<3Rw;XT|>v5H+urxA*+2Q.7*');
define('SECURE_AUTH_KEY',  '}YrxT%0-vDc+HhBn|SCfH6iDhZlQS8bi:y)[iOAK&RH!+T6iK&L-T]dDePaoiR<=');
define('LOGGED_IN_KEY',    'M=MDSH;aW[3-:|63iD`BpGtz!U!Hg2UO!tKF]_N;m{fK1b_Qs>YeqaAJ5@?e1V}c');
define('NONCE_KEY',        '-Fcn+-U&9R>Lu|$IyyI@Jr0{c9- @Z]Y=.1:`LE[[Pd7+C2H|x:QUi}rV65r..P<');
define('AUTH_SALT',        ' =yt=TS&ZrN|[eQpTY``pdCjSnN`{b`{a4i|u5>]cIV)7JaF/hz||OURyS40uYbm');
define('SECURE_AUTH_SALT', 'ADs(Yr+NlY|m?ryN@8(3z]ET<5afQ03U2uO!$|Z2brZ}M-^!_u|8]b-?Rc-9PGa8');
define('LOGGED_IN_SALT',   '|$2SO6Z-<n-++&:Kx41?cj-;x9vj9oZ+EV,$|xPIN0,Ghd)[O>Kbq[y8z:}{e:^>');
define('NONCE_SALT',       'Y6;z&=|tS< {8GHKNJ^RN~6KT,69q~2c!ZV>,5k6^|e@L^6|$]ymH))W(pG>$.(C');

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

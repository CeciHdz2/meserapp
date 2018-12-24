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
define('DB_NAME', 'meserapp');

/** MySQL database username */
define('DB_USER', 'meserapp');

/** MySQL database password */
define('DB_PASSWORD', 'M3seR4p-lan4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** invalida ftp al agregar tema*/
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8P]U&Uf)Q1qxdr3Udj(QH{tw1+cG!0S7E`pCqSQOPEy^QF}>{Hrxv.$LBf(O.OW7');
define('SECURE_AUTH_KEY',  'u/nLNl4e()T*4#J=HYPz,>9p>NkO<M{eS`jZ?LbVBmq~0mySJ4?]Jxe0=0(Z*A8/');
define('LOGGED_IN_KEY',    'nrZ7[hO/)IPeoJs6 dHOM48aH!%?C:^W=CWOzpK*&Spq^okxYHNaubQDknnPu4P:');
define('NONCE_KEY',        '&ELm1h+>jb5L~JR ~:Gm1i|Xl7|9fZhKNf.49F%W`&5$mR{(hkSQ!2KVCuT#OCEB');
define('AUTH_SALT',        '6Uk[Ol~@4:k_BQ,zl}I8W+]n~W3;>0gUv?u!}:v%tEpN]C?=jX(6:k8`48V>DL;,');
define('SECURE_AUTH_SALT', 'zrKF}e[*.FzAO Q0QB5!5r)%}UL7|1]Bgd.}G?bn$T@9S,MuQ?,w^rfRs8gCm<!b');
define('LOGGED_IN_SALT',   '-`Bbx}_}XO k9QII )8=kB+1xOd6}@q)h<O%mHRMx ${WYuPJD8(`T57[9%%i{D2');
define('NONCE_SALT',       '3sx mLjJ~|pzjRPSjLp9#G}X|N xszR*_= /$MJ9<8l9c$q~|kxcauUEanE)XfKJ');

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

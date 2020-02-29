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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Raygration\Documents\Websites\www.test.dev.cc\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'testDBdjiux');

/** MySQL database username */
define('DB_USER', 'testDBdjiux');

/** MySQL database password */
define('DB_PASSWORD', 'i4C9OZlLZk');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '8gkKJ5]hpp19jqEIE$*2{fbQz,zNNf>>3c|0YdZ|4Frrnd[1]Sdh448ls6eqe629');
define('SECURE_AUTH_KEY',  '1He;fqrFET+.<XNkk0}FzyzBNeqD2Em*#OPaByuvMIXi6{f40kks^Uggg4~_WaW');
define('LOGGED_IN_KEY',    'b>4rso^UQU>0Wh[;]hwsK9Ksiei{2L*#+_a@|NRNg>4JF@dp151ps~GGG+EPPy.2');
define('NONCE_KEY',        'k@-8|NDWtp#m.*2PGpZw]~5_9W{TEX*j$nMEXHq<q.*2Pk}zB|8VRoc,7>Q3Qjf$');
define('AUTH_SALT',        'j0>JUCRo@c@[,0F3JUjNc@gr}Bl#1-5GVDSpSdto-4K[GV1RdRhs[x2H#HWiPa+eq');
define('SECURE_AUTH_SALT', '#9*6L9Oay>3U3IjBQr^f^$6MXAPmIjy,y.3s@8!}Nc4VkJZz|^}N}Mc4Ukvkv,ht');
define('LOGGED_IN_SALT',   '.;THWi.bq{qALz3J>JYjRcrgv}$<IU7XnQfrfr^BKk-Zo|4_:O1CdNkv|v|F@:K}N');
define('NONCE_SALT',       'JYvYj,0,0F8KlOZ~Z-[-[5VCRsRs@k-|G|GR*5L9Oa+et*t*;#5ShWl_ep~p~9Ojy');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/mztribute/public_html/showbottix.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'i1306013_wp6');

/** MySQL database username */
define('DB_USER', 'i1306013_wp6');

/** MySQL database password */
define('DB_PASSWORD', 'W.8Y(IL@i@EnmedXqq*46.#2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'xVviYm9c28rkpkzi5c5llAciWtmhqXCVWHEZtdpBoAQtSFxNp2g3RBiDx56CnI4w');
define('SECURE_AUTH_KEY',  'zWi6AE3iFhoylT03ak1cqv7b6oaQRQLJM516wOGsb8cWQgexW0blcKrXeb5pHnrk');
define('LOGGED_IN_KEY',    'ZCsHPs1xEnW7NdgYsBi17jxhPXnZ1Uk4w53fCo8NEGjGN29f3LL88LXqbqZd7Yl8');
define('NONCE_KEY',        'BnUZeKFJjUIZNRVeMuhrHX1MWWObRE3nkBel5sIv0Aprw82TOOUEaznzqZpqCNk8');
define('AUTH_SALT',        'SPY7h2rrZQY1izWULUiF96aFPlIX0lrBTjyqMdVaFuBEiW91r3UQhTlUtM1vaHEM');
define('SECURE_AUTH_SALT', 'z8NOjlizKS08YtNPRO5x1mBHszC2kR3KmfLk4MYp6Dvp5IdXuFJyiwumaMCmUUoV');
define('LOGGED_IN_SALT',   '5ebBhvTNAinoCeRzCxDa12ATb7BUJ1xeiT39eiPqyFqkCX5ggXXtzSPlcsY0nGww');
define('NONCE_SALT',       'H5eS56DGi6JzzHXB9z0M41J6lGAVPKjBT2ovx99N99xOmgdMZxJuvxVfEc3mdyVD');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
